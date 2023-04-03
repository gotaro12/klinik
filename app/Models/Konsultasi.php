<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;
    protected $table ="konsultasis";
    protected $fillable = ['id','fullname','name','jenis_kelamin','email','no_hp','konsul','address','ktp','lampiran','status'];
}
