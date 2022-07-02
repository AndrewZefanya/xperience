<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Mail;
use App\Mail\Checkout\Paid;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->payment_status = true;
        $checkout->save();
        $request->session()->flash('success', "Checkout with ID {$checkout->id} has been updated!");

         // send email to user
         Mail::to($checkout->User->email)->send(new Paid($checkout));

        return redirect(route('admin.dashboard'));
    }
}