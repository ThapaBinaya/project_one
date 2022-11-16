<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $table= 'site_setting';

    protected $fillable =[
        'title',
        'alias',
        'logo',
        'facebook',
        'twitter',
        'tiktok',
        'address',
        'phone',
        'email'
    ];
}
