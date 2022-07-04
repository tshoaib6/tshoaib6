<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ycm_job extends Model
{
    protected  $fillable=['rec_id','ycm_id','institue','postion','End_date','Join_date'];

    public function Employee()
    {
        return $this->belongsTo(Employee::class,'rec_id');
    }
    use HasFactory;
}
