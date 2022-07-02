<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\Mail\Checkout\AfterCheckout;
use App\Models\Trip;
use App\Models\Discount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Str;
use Midtrans;

class CheckoutController extends Controller
{

    public function __construct()
    {
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Trip $trip)
    {
        return view('checkout.create', [
            'trip' => $trip
        ]);
    }


    public function store(Request $request, Trip $trip)
    {
        // mapping request data
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['trip_id'] = $trip->id;

         // update user data
         $user = Auth::user();
         $user->email = $data['email'];
         $user->name = $data['name'];
         $user->country = $data['country'];
         
         $user->save();

           // create checkout
           $checkout = Checkout::create($data);
           $this->getSnapRedirect($checkout);

        

        return redirect(route('checkout.success'));
       
    }


    public function success()
    {
        return view('checkout.success');
    }

    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }


    /**
     * Midtrans Handler
     */
    public function getSnapRedirect(Checkout $checkout)
    {
        // $orderId = $checkout->id.'-'.Str::random(5);
        // $price = $checkout->Camp->price * 1000;

        // $checkout->midtrans_booking_code = $orderId;
        // $discountPrice = 0;
        // $item_details[] = [
        //     'id' => $orderId,
        //     'price' => $price,
        //     'quantity' => 1,
        //     'name' => "Payment for {$checkout->Camp->title} Camp"
        // ];

        // $discountPrice = 0;
        // if ($checkout->Discount) {
        //     $discountPrice = $price * $checkout->discount_percentage / 100;
        //     $item_details[] = [
        //         'id' => $checkout->Discount->code,
        //         'price' => -$discountPrice,
        //         'quantity' => 1,
        //         'name' => "Discount {$checkout->Discount->name} ({$checkout->discount_percentage}%)"
        //     ];
        // }

        // $total = $price - $discountPrice;
        // $transaction_details = [
        //     'order_id' => $orderId,
        //     'gross_amount' => $total
        // ];

        // $userData = [
        //     "first_name" => $checkout->User->name,
        //     "last_name" => "",
        //     "address" => $checkout->User->address,
        //     "city" => "",
        //     "postal_code" => "",
        //     "phone" => $checkout->User->phone,
        //     "country_code" => "IDN",
        // ];

        // $customer_details = [
        //     "first_name" => $checkout->User->name,
        //     "last_name" => "",
        //     "email" => $checkout->User->email,
        //     "phone" => $checkout->User->phone,
        //     "billing_address" => $userData,
        //     "shipping_address" => $userData,
        // ];

        // $midtrans_params = [
        //     'transaction_details' => $transaction_details,
        //     'customer_details' => $customer_details,
        //     'item_details' => $item_details,
        // ];

        // try {
        //     // Get Snap Payment Page URL
        //     $paymentUrl = \Midtrans\Snap::createTransaction($midtrans_params)->redirect_url;
        //     $checkout->midtrans_url = $paymentUrl;
        //     $checkout->total = $total;
        //     $checkout->save();

        //     return $paymentUrl;
        // } catch (Exception $e) {
        //     return false;
        // }
    }

    // public function midtransCallback(Request $request)
    // {
    //     $notif = $request->method() == 'POST' ? new Midtrans\Notification() : Midtrans\Transaction::status($request->order_id);

    //     $transaction_status = $notif->transaction_status;
    //     $fraud = $notif->fraud_status;

    //     $checkout_id = explode('-', $notif->order_id)[0];
    //     $checkout = Checkout::find($checkout_id);

    //     if ($transaction_status == 'capture') {
    //         if ($fraud == 'challenge') {
    //             // TODO Set payment status in merchant's database to 'challenge'
    //             $checkout->payment_status = 'pending';
    //         }
    //         else if ($fraud == 'accept') {
    //             // TODO Set payment status in merchant's database to 'success'
    //             $checkout->payment_status = 'paid';
    //         }
    //     }
    //     else if ($transaction_status == 'cancel') {
    //         if ($fraud == 'challenge') {
    //             // TODO Set payment status in merchant's database to 'failure'
    //             $checkout->payment_status = 'failed';
    //         }
    //         else if ($fraud == 'accept') {
    //             // TODO Set payment status in merchant's database to 'failure'
    //             $checkout->payment_status = 'failed';
    //         }
    //     }
    //     else if ($transaction_status == 'deny') {
    //         // TODO Set payment status in merchant's database to 'failure'
    //         $checkout->payment_status = 'failed';
    //     }
    //     else if ($transaction_status == 'settlement') {
    //         // TODO set payment status in merchant's database to 'Settlement'
    //         $checkout->payment_status = 'paid';
    //     }
    //     else if ($transaction_status == 'pending') {
    //         // TODO set payment status in merchant's database to 'Pending'
    //         $checkout->payment_status = 'pending';
    //     }
    //     else if ($transaction_status == 'expire') {
    //         // TODO set payment status in merchant's database to 'expire'
    //         $checkout->payment_status = 'failed';
    //     }

    //     $checkout->save();
    //     return view('checkout/success');
    // }
    
}