<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::where('slug', $slug)
            ->where('active', true)
            ->firstOrFail();

        // Если категория не активна, отдаем ошибку 404
        if (!$category->active) {
            abort(404);
        }

        $banners = $category->banners()
            ->where('active', true)
            //->where('active_from', '<=', now())
            //->where('active_to', '>=', now())
            ->orderByDesc('created_at')
            ->limit(5)
            ->get();

        return view('category.show', compact('category', 'banners'));
    }
}


