<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contract;



class SalaryController extends Controller

{
    public $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }

    public function paidycm(){

        $contractYcm= Contract::with('contractedycm')->get();

       return view('salary.paid',compact('contractYcm'));
    }

    public function BankDetail($ycm_id){

        return view('salary.detail');
    }

    public function BankDetailForm($ycm_id){
        
        return view('salary.addbank',compact('ycm_id'));
    }
}
