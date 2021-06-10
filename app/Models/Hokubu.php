<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hokubu extends Model
{
    use HasFactory;
    protected $table = "hokubus";

    public static $rules = [
        'name' => 'required|max: 30',
        'body' => 'required',
        'image_url' => 'image|file'
    ];
}
    