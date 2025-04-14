<?php
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;
//
//class CartController extends Controller
//{
//    public function index()
//    {
//        $cart = Session::get('cart', []);
//        return view('pages.cart', compact('cart'));
//    }
//
//    public function add(Request $request)
//    {
//        $product = $request->only(['id', 'name', 'price', 'image']);
//        $product['quantity'] = 1;
//
//        $cart = Session::get('cart', []);
//        $existing = collect($cart)->firstWhere('id', $product['id']);
//
//        if ($existing) {
//            foreach ($cart as &$item) {
//                if ($item['id'] == $product['id']) {
//                    $item['quantity'] += 1;
//                    break;
//                }
//            }
//        } else {
//            $cart[] = $product;
//        }
//
//        Session::put('cart', $cart);
//        return redirect()->route('cart.index');
//    }
//
//    public function update(Request $request)
//    {
//        $cart = Session::get('cart', []);
//        foreach ($cart as &$item) {
//            if ($item['id'] == $request->id) {
//                $item['quantity'] = max(1, $request->quantity);
//                break;
//            }
//        }
//        Session::put('cart', $cart);
//        return redirect()->route('cart.index');
//    }
//
//    public function remove(Request $request)
//    {
//        $cart = array_filter(Session::get('cart', []), function ($item) use ($request) {
//            return $item['id'] != $request->id;
//        });
//
//        Session::put('cart', $cart);
//        return redirect()->route('cart.index');
//    }
//}


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('pages.cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $product = $request->only(['id', 'name', 'price', 'image']);
        $product['quantity'] = 1;

        $cart = Session::get('cart', []);
        $existing = collect($cart)->firstWhere('id', $product['id']);

        if ($existing) {
            foreach ($cart as &$item) {
                if ($item['id'] == $product['id']) {
                    $item['quantity'] += 1;
                    break;
                }
            }
        } else {
            $cart[] = $product;
        }

        Session::put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function update(Request $request)
    {
        $cart = Session::get('cart', []);
        foreach ($cart as &$item) {
            if ($item['id'] == $request->id) {
                $item['quantity'] = max(1, $request->quantity);
                break;
            }
        }
        Session::put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function remove(Request $request)
    {
        $cart = array_filter(Session::get('cart', []), function ($item) use ($request) {
            return $item['id'] != $request->id;
        });

        Session::put('cart', $cart);
        return redirect()->route('cart.index');
    }
}
