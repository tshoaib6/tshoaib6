<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable=['ycm_id','subject','name','position','from','until','salary','period','probabtion_start','probabtion_end'];
    use HasFactory;


    public function contractedycm()
    {
        return $this->belongsTo(Employee::class,'ycm_id','id');
    }
}
