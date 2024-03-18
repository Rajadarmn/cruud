<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biliard extends Model
{
    use HasFactory;
    protected $fillable=['nama','meja','waktu'];
    protected $table = '_biliards';
}
