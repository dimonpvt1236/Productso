<?php
namespace Dimonpvt\Productso\Http\Controllers;

use App\Http\Controllers\Controller;
use Dimonpvt\Productso\Models\PrsoProduct as Product;
use Dimonpvt\Productso\Models\PrsoCategory as Category;

class PrsoProductController extends Controller
{

    public function show($slug, $categoryid=null)
    {
        if ( $product = Product::where('slug',$slug)->first()) {
            $parentCategores=$product->categories;
            $pathCategory=Category::find($categoryid);
            return view('Productso::product_show', compact('product','parentCategores', 'pathCategory'));
        }
        abort(404);
    }
}