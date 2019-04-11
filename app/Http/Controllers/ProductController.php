<?php

namespace App\Http\Controllers;

use App\Category;

/**
 * Контроллер для работы с категориями
 * Class CategoryController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Метод для получениыя всех продуктов в категории
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getProducts(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        if(!$category) {
            abort(404);
        }

        return view('product',[
            'category' => $category
        ]);
    }
}
