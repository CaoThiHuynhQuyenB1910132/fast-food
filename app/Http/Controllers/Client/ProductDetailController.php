<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProductDetailController extends Controller
{
    public $quantity = 1;
    public function index(string $id): View
    {
        $product = Product::getProductById($id);

        return view('client.product-detail.index', compact('product'));
    }

    public function addToCart(Request $request,int $productId): RedirectResponse
    {
        $data = $request->validate([
            'quantity' => ['nullable', 'int', 'min:1']
        ]);
        if (! Auth::check()) {
            toast('Đăng nhập trước khi sử dụng dịch vụ', 'warning');
            return redirect('login');
        }

        $product = Product::getProductById($productId);

        if ($data['quantity']) {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => $data['quantity'],
            ]);
            toast()->success('Thêm sản phẩm' . $product->name . 'vào giỏ hàng thành công');

            return redirect()->back();
        }

        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'quantity' => 1,
        ]);

        toast('Thêm sản phẩm' . $product->name . 'vào giỏ hàng thành công', 'success');

        return redirect()->back();
    }


}
