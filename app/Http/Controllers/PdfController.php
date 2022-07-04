<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use View;
use App;

use Illuminate\Support\Facades\Storage;
use File;
class PdfController extends Controller
{
    public function getycmForm($employee_id){

        $islamic=DB::table('islamic_edus')->where('ycm_id',$employee_id)->get();
        $dawah=DB::table('dawah_exps')->where('ycm_id',$employee_id)->get();
        $job= DB::table('ycm_jobs')->where('ycm_id',$employee_id)->get();
        $employees = DB::table('employees')->where('id',$employee_id)->get();

        // $path = storage_path('pdf/orders');
        // if(!File::exists($path)) {
        //     File::makeDirectory($path, $mode = 0755, true, true);
        // }
        // else {}
        // $filename = "user";
        $view = View::make('form.edit.editemployee',compact('employees','islamic','dawah','job'));
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        // ->save(''.$path.'/'.$filename.'.pdf');
        // ['employees'=>$employees,'islamic'=>$islamic,'dawah'=>$dawah,'job'=>$job]
        // Storage::put('public/', $pdf->output());

       return $pdf->stream('itsolutionstuff');



    }
}
