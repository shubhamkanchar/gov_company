<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscribe extends Model
{
    use HasFactory;

    protected $table = 'subscribe';
    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'email',
    ];

    public $timestamps = true;
}
