<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'name',
        'fname',
        'email',
        'address',
        'city',
        'avatar',
        'country',
        'whatsapp_no',
        'phone_no',
        'birth_date',
        'gender',
        'martial_status',
        'employee_id',
    ];
    
    public function getContacts(){
        $contacts=DB::table('employees')->select('name','lname','email','phone_no')->where('status','active')->get();
        return $contacts;
    }

    public function ycmjob()
    {
        return $this->hasMany(ycm_job::class,'ycm_id','id');
    }

    public function contracts(){
        return $this->hasMany(Contract::class,'ycm_id','id');
    }

    public function dawah()
    {
        return $this->hasMany(dawah_exp::class,'ycm_id','id');
    }


}
