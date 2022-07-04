<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contracts;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
class ContractsController extends Controller
{

    public $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }

    public function edit(){
        if (is_null($this->user) || $this->user->can('contract.edit')) {
            abort(403, 'Sorry !! You are Unauthorized !');
        }
    }

    public function Offercontract($employee_id){
        if (is_null($this->user) || !$this->user->can('contract.view')) {
            abort(403, 'Sorry !! You are Unauthorized !');
        }
     $employees = DB::table('employees')->where('id',$employee_id)->first();
    return view('contracts.contracttemplate',compact('employees'));
    }

    public function viewContracts($employee_id){
        if (is_null($this->user) || !$this->user->can('contract.view')) {
            abort(403, 'Sorry !! You are Unauthorized !');
        }

        $contractYcm= Contract::where('ycm_id','=',$employee_id)->get();

        return view('contracts.viewemployeecontracts',compact('contractYcm'));
    }
    public function AllContracts(){
        if (is_null($this->user) || !$this->user->can('contract.view')) {
            abort(403, 'Sorry !! You are Unauthorized !');
        }

    //    $employees = DB::table('employees')->where('contracted',true)->get();
        $contractYcm= Contract::with('contractedycm')->get();
        

    //    $comments = employee::all()->contracts->first();
    //   dd($contractYcm[]->contractedycm->email);

    //  foreach ($contractYcm as $items ){
    //     dd($items->position);
    // //     // dd(count($contractYcm));
    // }
        return view('contracts.allcontracts',compact('contractYcm'));
    }
    public function saveContract(Request $request,$employee_id){

        if (is_null($this->user) || !$this->user->can('contract.offer')) {
            abort(403, 'Sorry !! You are Unauthorized !');
        }


        $request->validate([
            'name'        => 'required|string|max:50|min:3',
            'subject'     => 'required|string|max:50|min:3',
            'position'    => 'required|string|max:50|min:3',
            'from'        => 'required|date',
            'until'       => 'required|date',
            'probabtion_from'       => 'required|date',
            'probabtion_until'       => 'required|date',
            'salary'       => 'required|numeric',

        ],);

        $data = $request->input();

        $employees = DB::table('employees')->where('id',$employee_id)->update([
                    'contracted' => true,
                    'designation' => $data['position'] 
              ]);
       
        $contract= new Contract;
        $contract->ycm_id= $employee_id;
        $contract->subject=$data['subject'];
        $contract->name=$data['name'];
        $contract->position=$data['position'];
        $contract->started=$data['from'];
        $contract->until=$data['until'];
        $contract->probabtion_start=$data['probabtion_from'];
        $contract->probabtion_end=$data['probabtion_until'];
        $contract->salary=$data['salary'];
        $contract->period=$data['period'];
        $contract->save();
    return redirect('contracts/all');

    }

public function editContract($employee_id){
    $contractYcm= Contract::where('ycm_id', '=',$employee_id)->get();

     return view('contracts.editcontracts',compact('contractYcm'));


}
    public function updateContract(Request $request,$employee_id){

        if (is_null($this->user) || !$this->user->can('contract.offer')) {
            abort(403, 'Sorry !! You are Unauthorized !');
        }

        $request->validate([
            'name'        => 'required|string|max:50|min:3',
            'subject'     => 'required|string|max:50|min:3',
            'position'    => 'required|string|max:50|min:3',
            'from'        => 'required|date',
            'until'       => 'required|date',
            'probabtion_from'       => 'required|date',
            'probabtion_until'       => 'required|date',
            'salary'       => 'required|numeric',

        ],);

        $data = $request->input();
        $contract= Contract::where('ycm_id', '=',$employee_id)->first();
        $contract->ycm_id= $employee_id;
        $contract->subject=$data['subject'];
        $contract->name=$data['name'];
        $contract->position=$data['position'];
        $contract->started=$data['from'];
        $contract->until=$data['until'];
        $contract->probabtion_start=$data['probabtion_from'];
        $contract->probabtion_end=$data['probabtion_until'];
        $contract->salary=$data['salary'];
        $contract->period=$data['period'];
        $contract->save();

    return redirect('contracts/all');

    }


    public function contractSearch(Request $request)
    {      
        $contractYcm= Contract::with('contractedycm')->get();

        // search by id
        if($request->employee_id)
        {
            $contractYcm= Contract::where('ycm_id','LIKE','%'.$request->employee_id.'%')->with('contractedycm')
                        ->get();
        }
        // search by name
        if($request->name)
        {
            $contractYcm = Contract::where('name','LIKE','%'.$request->name.'%')->with('contractedycm')
                        ->get();
        }
        // search by name
        if($request->position)
        {
            $contractYcm = Contract::where('position','LIKE','%'.$request->position.'%')->with('contractedycm')
                        ->get();
        }
        return view('contracts.allcontracts',compact('contractYcm'));

    }
}
