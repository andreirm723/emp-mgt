<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employ extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $primarykey='id';
    protected $fillable =  ['fname','mname','lname','address','country','state'	
    ,'city','zip','age','bdate','dhired','dept',  'div'	
];
}
