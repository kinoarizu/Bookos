<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Auth;

class UserController extends Controller
{
    public function payment(Request $request, $id)
    {
        $order = Order::find($id);
        $request->file('gambar')->move('storage/', $request->file('gambar')->getClientOriginalName());
        $order->payment_proof = $request->file('gambar')->getClientOriginalName();
        $order->status = 'Menunggu Konfirmasi';
        $order->save();

        return redirect('/profile');
    }
}
