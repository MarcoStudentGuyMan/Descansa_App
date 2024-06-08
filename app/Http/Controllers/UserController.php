<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|regex:/^([^0-9]*)$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        try {
            $user->save();
            return redirect("/login")->with('success', 'You have successfully registered.');
        } catch (\Exception $e) {
            return back()->with('error', 'There was an error: ' . $e->getMessage());
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('loginID', $user->id);
            return redirect('/');
        } else {
            return back()->withErrors(['email' => 'Invalid Email', 'password' => 'Invalid Password']);
        }
    }

    public function home(Request $request)
    {
        $data = [];
        if (Session::has('loginID')) {
            $data = User::where('id', Session::get('loginID'))->first();
        }
        return view('home', compact('data'));
    }

    public function logout()
    {
        if (Session::has('loginID')) {
            Session::pull('loginID');
        }
        return redirect('/login');
    }


    // Orders

    
    public function createOrder(Request $request)
    {
        $request->validate([
            'items' => 'required|array|min:1',
            'items.*.product_name' => 'required|string',
            'items.*.product_price' => 'required|numeric',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.total_price' => 'required|numeric|min:0',
            'items.*.product_image' => 'nullable|string',
        ]);

        $order = Order::create([]);

        foreach ($request->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_name' => $item['product_name'],
                'product_price' => $item['product_price'],
                'quantity' => $item['quantity'],
                'total_price' => $item['total_price'],
                'product_image' => $item['product_image'] ?? null,
            ]);
        }

        return response()->json(['message' => 'Order created successfully'], 201);
    }

    public function index()
    {
        $orders = Order::with('items')->get();
        return view('list', compact('orders'));
    }
}
