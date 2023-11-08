<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_name',
        'user_id'
    ];
    public static function addCategory($categoryName)
    {
        $category = new Category;
        $category->category_name = $categoryName;
        $category->user_id = Auth::id();
        $category->save();
    }
}
