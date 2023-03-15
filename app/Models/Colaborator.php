<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborator extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [ 'name', 'email', 'cpf', 'phone', 'stacks', 'verification'];
}
