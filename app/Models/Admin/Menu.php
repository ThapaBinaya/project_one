<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'menu1',
        'menu2',
        'menu3',
    ];
}
