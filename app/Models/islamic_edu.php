<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class islamic_edu extends Model
{
    protected  $fillable=['ycm_id','institue','Course','year'];
    use HasFactory;
}
