<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerCategory extends Model
{
    //php artisan make:model BannerCategory -f
    use HasFactory;
    protected $table = 'banner_category';
}
