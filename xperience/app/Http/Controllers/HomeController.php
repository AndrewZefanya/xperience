<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Checkout;


class HomeController extends Controller
{
    public function dashboard()
    {
       $checkouts = Checkout::with('Trip')->whereUserId(Auth::id())->get();
            return view ('user.dashboard', [
                'checkouts' => $checkouts
            ]);
            
        }

        

    }
