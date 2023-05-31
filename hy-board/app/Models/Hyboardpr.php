<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hyboardpr extends Model
{
    use HasFactory;

    protected $table = 'Hyboardprs';
    protected $primaryKey = 'Lno';

    protected $guarded=[];
}
