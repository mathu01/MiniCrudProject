<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay() {
        session()->forget('cart');
        return view('Payement.success');
}
}
