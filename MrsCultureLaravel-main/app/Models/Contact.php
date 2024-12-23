<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table="contacts"; //here contacts is our table name (migrations)
    protected $Primarykey="id"; // here id from table.
}
