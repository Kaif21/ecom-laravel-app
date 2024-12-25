<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $product;
    public function index()
    {
        return view('website.cart.index',['products'=>Cart::content()]);
    }
    public function store(Request $request, $id)
    {
        $this->product = Product::find( $id );
        Cart::add(
            [
                'id' => $id,
                'name' => $this->product->name,
                'qty' => $request->qty,
                'price' => $this->product->selling_price,
                'weight' => 550,
                'options' => [
                    'brand' => $this->product->brand->name,
                ]
            ]
        );
        return redirect('/cart')->with('success','Added to cart successfully');
    }
    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart')->with('message', 'Cart item info delete successfully.');
    }
}
