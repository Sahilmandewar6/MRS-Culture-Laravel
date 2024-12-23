<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fbook extends Model
{
    use HasFactory;
    protected $table='fbooks';
    protected $Primarykey='id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }





}
