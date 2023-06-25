<?php

namespace App\Models;

use App\Http\Controllers\Estudiantes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table= 'estudiantes';
    protected $primaryKey = 'codestudiante';
    public $timestamps = true;
}