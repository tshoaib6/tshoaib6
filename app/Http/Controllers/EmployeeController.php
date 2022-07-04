<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeContactExport;
use App\Models\dawah_exp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Employee;
use App\Models\islamic_edu;
use App\Models\User;
use App\Models\module_permission;
use App\Models\ycm_job;
// use Barryvdh\DomPDF\Facade as PDF
use Exception;
use Illuminate\Support\Facades\Date;

class EmployeeController extends Controller
{
    public $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }

    // all employee card view
    public function cardAllEmployee(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('YCM.view')) {
            abort(403, 'Sorry !! You are Unauthorized !');
        }

        $users = DB::table('users')
        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
        ->select('users.*', 'employees.birth_date', 'employees.gender',)
        ->get();
    $ycm=DB::table('Employees')->get();
$userList = DB::table('users')->get();


        // return view('form.allemployeecard',compact('users','userList','permission_lists'));
        return view('form.allemployeecard',compact('ycm'));

    }
    // all employee list
    public function listAllEmployee()
    {
        if (is_null($this->user) || !$this->user->can('YCM.view')) {
            abort(403, 'Sorry !! You are Unauthorized !');
        }
        $users = DB::table('users')
                    ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                    ->select('users.*', 'employees.birth_date', 'employees.gender')
                    ->get();
        $userList = DB::table('users')->get();
        $ycm=DB::table('Employees')->get();

        // return view('form.employeelist',compact('users','userList','permission_lists'));
        return view('form.employeelist',compact('ycm'));
    }

    public function Addycmform(){
        if (is_null($this->user) || !$this->user->can('YCM.create')) {
            abort(403, 'Sorry !! You are Unauthorized !');
        }
        return view('form.ycmform');
    }
    // save data employee
    public function saveRecord(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('YCM.create')) {
            abort(403, 'Sorry !! You are Unauthorized !');
        }

        $request->validate([
            'name'        => 'required|string|max:50|min:3',
            'lname'       => 'required|string|max:50|min:3',
            'address'       => 'required|max:50|min:3',
            'city'       => 'required|max:50|min:3',
            'country'       => 'required|max:50|min:3',
            'phno'       => 'required|numeric',
            'whatsappNo'    =>'required|numeric',
            'email'       => 'required|string|email',
            'birthDate'   => 'required|before:today',
            'gender'      => 'required',
            'martial'      => 'required',
            'qu_insitute' =>'required|string',
            'qu_course' =>'required|string',
            'qu_year' =>'required|numeric|min:4',
            'qu_fod' =>'required|string',
            "job_position.*" => 'max:50|min:3',
            "job_instituion.*" => 'max:50|min:3',
            "job_from.*" => 'date_format:Y-m-d|before:today',
             "job_to.*" => 'date_format:Y-m-d|before:today',
             "dawah_position.*" => 'max:50|min:3',
            "dawah_institute.*" => 'max:50',
            "dawah_from.*" => 'date_format:Y-m-d|before:today',
            "dawah_to.*" =>'date_format:Y-m-d|before:today',
            "volunteer" =>'required',
            "Desgination" => 'required|max:50|min:3',
            "Chapter" => 'required|max:50|min:3',
        ], );


            $data = $request->input();


                    $employees = Employee::where('email', '=',$request->email)->first();
                    if ($employees === null)
                     {
                        $employee = new Employee;
                        $ycm_job =new ycm_job;
                        $islamic_edu =new islamic_edu;
                        $islamic_course=$request->Islamic_course;
                        $job_position= $request->job_position;
                        $dawah= new dawah_exp;
                        $dawah_position= $request->dawah_position;
                        $employee->name       = $data['name'];
                        $employee->lname      = $data['lname'];
                        $employee->status      ="Active";
                        $employee->address    = $request->address;
                        $employee->city       = $request->city;
                        $employee->country    = $request->country;
                        $employee->phone_no   = $request->phno;
                        $employee->whatsapp_no = $request->whatsappNo;
                        $employee->email        = $request->email;
                        $employee->birth_date   = $request->birthDate;
                        $employee->gender       = $request->gender;
                        $employee->martial_status    = $request->martial;
                        $employee->employee_id  = $request->employee_id;
                        $employee->qualification=$request->qualification;
                        $employee->institute=$request->qu_insitute;
                        $employee->field_of_study=$request->qu_fod;


                        $employee->designation= $request->Desgination;
                        $employee->save();

                    if($request->fod==1){
                        for($i=0;$i<count($islamic_course);$i++)
                        {
                            $datasaveIslamic=[
                                "ycm_id" => $employee->id,
                                'Course' => $islamic_course[$i],
                                'institute'=> $request->Islamic_institute[$i],
                                'year'=> $request->Islamic_year[$i],
                            ];

                            DB::table('islamic_edus')->insert($datasaveIslamic);
                        }
                    }

                        for($i=0;$i<count($job_position);$i++)
                        {
                            $datasave=[
                                "ycm_id" => $employee->id,
                                'posistion' => $job_position[$i],
                                'insitute'=> $request->job_institute[$i],
                                'Join_date'=> $request->job_from[$i],
                                'End_date'=> $request->job_to[$i],
                            ];

                            DB::table('ycm_jobs')->insert($datasave);
                        }

                        for($i=0;$i<count($dawah_position);$i++)
                        {
                            $datasaveDawah=[
                                "ycm_id" => $employee->id,
                                'posistion' => $dawah_position[$i],
                                'insitute'=> $request->dawah_institute[$i],
                                'from_date'=> $request->dawah_from[$i],
                                'to_date'=> $request->dawah_to[$i],
                            ];

                            DB::table('dawah_exps')->insert($datasaveDawah);
                        }

                        Toastr::success('Add new employee successfully :)','Success');
                        return redirect()->route('all/employee/card');
                }

                    else {
                        DB::rollback();
                        Toastr::error('Add new employee exits :)','Error');
                        return redirect()->back();
                    }
                // }
        }

public function editycm($employee_id){

    if (is_null($this->user) || !$this->user->can('YCM.edit')) {
        abort(403, 'Sorry !! You are Unauthorized !');
    }
    $islamic=DB::table('islamic_edus')->where('ycm_id',$employee_id)->get();
    $dawah=DB::table('dawah_exps')->where('ycm_id',$employee_id)->get();
    $job= DB::table('ycm_jobs')->where('ycm_id',$employee_id)->get();
    $employees = DB::table('employees')->where('id',$employee_id)->get();
    return view('form.edit.editycm',compact('employees','job','islamic','dawah'));

}

public function updateycm(Request $request, $id){
    if (is_null($this->user) || !$this->user->can('YCM.edit')) {
        abort(403, 'Sorry !! You are Unauthorized !');
    }

    $request->validate([
        'name'        => 'required|string|max:50|min:3',
        'lname'       => 'required|string|max:50|min:3',
        'address'       => 'required|max:50|min:3',
        'city'       => 'required|max:50|min:3',
        'country'       => 'required|max:50|min:3',
        'phno'       => 'required|numeric',
        'whatsappNo'    =>'required|numeric',
        'email'       => 'required|string|email',
        'birthDate'   => 'required|before:today',
        'martial'      => 'required',
        "Islamic_institute.*" => 'max:50',
        "Islamic_course.*" => 'max:50',
        "Islamic_year.*" => 'date_format:Y-m-d|before:today',
        "job_position.*" => 'max:50|min:3',
        "job_instituion.*" => 'max:50|min:3',
        "job_from.*" => 'date_format:Y-m-d|before:today',
         "job_to.*" => 'date_format:Y-m-d|before:today',
         "dawah_position.*" => 'max:50|min:3',
        "dawah_institute.*" => 'max:50',
        "dawah_from.*" => 'date_format:Y-m-d|before:today',
        "dawah_to.*" =>'date_format:Y-m-d|before:today',
        "volunteer" =>'required',
        "Desgination" => 'required|max:50|min:3',
        "Chapter" => 'required|max:50|min:3',
    ], );


        $data = $request->input();


                $employee = Employee::where('id', '=',$id)->first();
                $ycm_job =ycm_job::where('ycm_id', '=',$id)->first();
                $islamic_edu =islamic_edu::where('ycm_id', '=',$id)->first();
                $dawah= dawah_exp::where('ycm_id', '=',$id)->first();



                    $islamic_course=$request->Islamic_course;
                    $job_position= $request->job_position;
                    $dawah_position= $request->dawah_position;
                    $employee->name       = $data['name'];
                    $employee->lname      = $data['lname'];
                    $employee->status      ="Active";
                    $employee->address    = $request->address;
                    $employee->city       = $request->city;
                    $employee->country    = $request->country;
                    $employee->phone_no   = $request->phno;
                    $employee->whatsapp_no = $request->whatsappNo;
                    $employee->email        = $request->email;
                    $employee->birth_date   = $request->birthDate;
                    $employee->gender       = $request->gender;
                    $employee->martial_status    = $request->martial;
                    $employee->employee_id  = $request->employee_id;
                    $employee->designation= $request->Desgination;
                    $employee->save();

                if($request->fod==1){
                    for($i=0;$i<count($islamic_course);$i++)
                    {
                        $datasaveIslamic=[
                            "ycm_id" => $employee->id,
                            'Course' => $islamic_course[$i],
                            'institute'=> $request->Islamic_institute[$i],
                            'year'=> $request->Islamic_year[$i],
                        ];

                        DB::table('islamic_edus')->update($datasaveIslamic);
                    }
                }

                    for($i=0;$i<count($job_position);$i++)
                    {
                        $datasave=[
                            "ycm_id" => $employee->id,
                            'posistion' => $job_position[$i],
                            'insitute'=> $request->job_institute[$i],
                            'Join_date'=> $request->job_from[$i],
                            'End_date'=> $request->job_to[$i],
                        ];

                        DB::table('ycm_jobs')->update($datasave);
                    }

                    for($i=0;$i<count($dawah_position);$i++)
                    {
                        $datasaveDawah=[
                            "ycm_id" => $employee->id,
                            'posistion' => $dawah_position[$i],
                            'insitute'=> $request->dawah_institute[$i],
                            'from_date'=> $request->dawah_from[$i],
                            'to_date'=> $request->dawah_to[$i],
                        ];

                        DB::table('dawah_exps')->update($datasaveDawah);
                    }

                    Toastr::success('employee added successfully :)','Success');
                    return redirect()->route('all/employee/card');




}

    // view edit record
    public function viewRecord($employee_id)
    {
        $islamic=DB::table('islamic_edus')->where('ycm_id',$employee_id)->get();
        $dawah=DB::table('dawah_exps')->where('ycm_id',$employee_id)->get();
        $job= DB::table('ycm_jobs')->where('ycm_id',$employee_id)->get();
        $employees = DB::table('employees')->where('id',$employee_id)->get();
        // $pdf = PDF::loadView('form.edit.editemployee', compact('employees','job','islamic','dawah'));
        // return $pdf->download('invoice.pdf');

        return view('form.edit.editemployee',compact('employees','job','islamic','dawah'));
    }

//     // public function viewPDF($employee_id){
//     //     $islamic=DB::table('islamic_edus')->where('ycm_id',$employee_id)->get();
//     //     $dawah=DB::table('dawah_exps')->where('ycm_id',$employee_id)->get();
//     //     $job= DB::table('ycm_jobs')->where('ycm_id',$employee_id)->get();
//     //     $employees = DB::table('employees')->where('id',$employee_id)->get();
//     //     $dompdf=PDF::loadView('form.edit.editemployee',compact('employees','job','islamic','dawah'));
//     //     $dompdf->setPaper('A4', 'potrait');



// $dompdf->stream();
//     }
    public function OfferContract($employee_id)
    {
     $employees = DB::table('employees')->where('id',$employee_id)->first();
     return view('contracts.contracttemplate',compact('employees'));

    }

    public function destroy($id)
    {
        // if (is_null($this->user) || !$this->user->can('role.delete')) {
        //     abort(403, 'Sorry !! You are Unauthorized to delete any role !');
        // }


        $employee = Employee::where('id',$id)->first();
        if (!is_null($employee)) {
            $employee->delete();
        }

        session()->flash('success', 'YCM has been deleted !!');
        return back();
    }

    public function showContracted(){

        $employees = DB::table('employees')->where('contracted',true)->get();
        return view('contracts.viewcontracts',compact('employees'));
    }
    // public function printYcmRecord()
    // {
    //     $filename = '/reports/printview_table.blade.php';
    //     try
    //     {
    //         $contents = File::get($filename);
    //         printfile($contents);
    //     }
    // }

    // update record employee
    public function updateRecord( Request $request)
    {
        DB::beginTransaction();
        try{
            // update table Employee
            $updateEmployee = [
                'id'=>$request->id,
                'name'=>$request->name,
                'email'=>$request->email,
                'birth_date'=>$request->birth_date,
                'gender'=>$request->gender,
                'employee_id'=>$request->employee_id,
                'company'=>$request->company,
            ];
            // update table user
            $updateUser = [
                'id'=>$request->id,
                'name'=>$request->name,
                'email'=>$request->email,
            ];

            // update table module_permissions
            for($i=0;$i<count($request->id_permission);$i++)
            {
                $UpdateModule_permissions = [
                    'employee_id' => $request->employee_id,
                    'module_permission' => $request->permission[$i],
                    'id'                => $request->id_permission[$i],
                    'read'              => $request->read[$i],
                    'write'             => $request->write[$i],
                    'create'            => $request->create[$i],
                    'delete'            => $request->delete[$i],
                    'import'            => $request->import[$i],
                    'export'            => $request->export[$i],
                ];
                module_permission::where('id',$request->id_permission[$i])->update($UpdateModule_permissions);
            }

            User::where('id',$request->id)->update($updateUser);
            Employee::where('id',$request->id)->update($updateEmployee);

            DB::commit();
            Toastr::success('updated record successfully :)','Success');
            return redirect()->route('all/employee/card');
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('updated record fail :)','Error');
            return redirect()->back();
        }
    }
    public  function exportIntoExcel(){
        return Excel::download(new EmployeeContactExport,'contactlist.xlsx');
    }
    // delete record
    public function deleteRecord($employee_id)
    {
        DB::beginTransaction();
        try{

            Employee::where('employee_id',$employee_id)->delete();
            module_permission::where('employee_id',$employee_id)->delete();

            DB::commit();
            Toastr::success('Delete record successfully :)','Success');
            return redirect()->route('all/employee/card');

        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Delete record fail :)','Error');
            return redirect()->back();
        }
    }
    // employee search


    public function employeeSearch(Request $request)
    {
        $users = DB::table('users')
                    ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                    ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                    ->get();
        $permission_lists = DB::table('permission_lists')->get();
        $userList = DB::table('users')->get();

        // search by id
        if($request->employee_id)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->get();
        }
        // search by name
        if($request->name)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->get();
        }
        // search by name
        if($request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }

        // search by name and id
        if($request->employee_id && $request->name)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->get();
        }
        // search by position and id
        if($request->employee_id && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }
        // search by name and position
        if($request->name && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }
         // search by name and position and id
         if($request->employee_id && $request->name && $request->position)
         {
             $users = DB::table('users')
                         ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                         ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                         ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                         ->where('users.name','LIKE','%'.$request->name.'%')
                         ->where('users.position','LIKE','%'.$request->position.'%')
                         ->get();
         }
        return view('form.allemployeecard',compact('users','userList','permission_lists'));
    }
    public function employeeListSearch(Request $request)
    {
        $users = DB::table('users')
                    ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                    ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                    ->get();
        $permission_lists = DB::table('permission_lists')->get();
        $userList = DB::table('users')->get();

        // search by id
        if($request->employee_id)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->get();
        }
        // search by name
        if($request->name)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->get();
        }
        // search by name
        if($request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }

        // search by name and id
        if($request->employee_id && $request->name)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->get();
        }
        // search by position and id
        if($request->employee_id && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }
        // search by name and position
        if($request->name && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }
        // search by name and position and id
        if($request->employee_id && $request->name && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }
        return view('form.employeelist',compact('users','userList','permission_lists'));
    }

    // employee profile
    public function profileEmployee($rec_id)
    {
        $users = DB::table('profile_information')
                ->join('users', 'users.rec_id', '=', 'profile_information.rec_id')
                ->select('profile_information.*', 'users.*')
                ->where('profile_information.rec_id','=',$rec_id)
                ->first();

        $user = DB::table('users')->where('rec_id',$rec_id)->get();
        return view('form.employeeprofile',compact('user','users'));
    }
}
