<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_App extends Model
{
    use HasFactory;

    //tell our model what column we have in our table
    protected $fillable=[
        'id',
        'cou_attendace',
        'cou_receipt',
        'cou_approveStatus',
        'cou_approveDate',
    ];
}
