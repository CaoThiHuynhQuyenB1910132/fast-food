<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function index(): View
    {
        $products = Product::orderByDesc('created_at')->get()->take(6);

        return view('client.shop.index', compact('products'));
    }

    public function add(int $productId): RedirectResponse
    {
        if (!Auth::check()) {
            toast('Đăng nhập trước khi sử dụng dịch vụ', 'warning');
            return redirect('login');
        }

        if (Cart::where('user_id', Auth::user()->id)
            ->where('product_id', $productId)->exists()) {
            toast('Sản phẩm đã có trong giỏ hàng.', 'warning');
            return redirect()->back();
        }

        $product = Product::getProductById($productId);
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        toast('Thêm sản phẩm ' . $product->name . ' vào giỏ hàng thành công', 'success');

        return redirect()->back();
    }
}
