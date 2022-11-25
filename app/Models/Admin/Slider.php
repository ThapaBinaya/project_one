<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'title',
        'alt_text',
        'photo',
        'status'
    ];
}
