<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TernakKerbau extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'ternak_kerbau';
}
