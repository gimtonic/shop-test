<?php

namespace App\Http\Controllers;

use App\Product;
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

        $product = Product::where('slug', $slug)
            ->first();

        if(!$product) {
            abort(404);
        }

        return view('product',[
            'product' => $product
        ]);
    }
}
