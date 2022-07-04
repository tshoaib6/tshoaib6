<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dawah_exp extends Model
{
    protected  $fillable=['ycm_id','institue','postion','from_date','to_date'];
    use HasFactory;
}
