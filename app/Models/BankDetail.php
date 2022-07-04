<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    use HasFactory;


    public function paid()
    {
        return $this->belongsTo(Contract::class,'ycm_id','ycm_id');
    }
}
