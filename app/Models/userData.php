<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userData extends Model
{
    use HasFactory;
    protected $fillable = [ 'fullname', 'Age' , 'Email' ];
}
