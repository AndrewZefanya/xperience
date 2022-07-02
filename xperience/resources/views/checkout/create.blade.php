@extends('layouts.app')
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</header>

@section('content')
<section class="checkout">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        Just one more step to go
                    </p>
                    <h2 class="primary-header">
                        Checkout Your Trip
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <img src="{{asset('images/komodo.png')}}" alt="" class="cover">
                                <h1 class="package text-uppercase">
                                    {{$trip->title}} Trip
                                </h1>
                                <p class="description">
                                Komodo Island is very famous for its spectacular View and its jurassic feels
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="{{route('checkout.store', $trip->id)}}" class="basic-form" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" required value="{{Auth::user()->name}}" class="form-control {{$errors->has('name') ? 'is-invalid' :''}}" aria-describedby="emailHelp">
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    @endif                                
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email Address</label>                                   
                                    <input type="email" name="email" required value="{{Auth::user()->email}}" class="form-control {{$errors->has('email') ? 'is-invalid' :''}}" aria-describedby="emailHelp">
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    @endif   
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">ID Card / Passport Number</label>                                                                   
                                    <input type="number" name="country" required  class="form-control {{$errors->has('country') ? 'is-invalid' :''}}" 
                                    value="{{old('country') ?: Auth::user()->country}}" aria-describedby="emailHelp">
                                    @if ($errors->has('country'))
                                        <p class="text-danger">{{$errors->first('country')}}</p>
                                    @endif   
                                </div>
                                
                                <div class="mb-4">
                                    <label  class="form-label">Card Number</label>                                    
                                    <input type="number" name="card_number" required class="form-control {{$errors->has('card_number') ? 'is-invalid' :''}}" 
                                    aria-describedby="emailHelp">
                                    @if ($errors->has('card_number'))
                                        <p class="text-danger">{{$errors->first('card_number')}}</p>
                                    @endif   
                                </div>
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <label class="form-label">Expired</label>
                                            <input type="month" name="expired" required class="form-control {{$errors->has('expired') ? 'is-invalid' :''}}" aria-describedby="emailHelp">
                                            @if ($errors->has('expired'))
                                            <p class="text-danger">{{$errors->first('expired')}}</p>
                                            @endif   
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label class="form-label">CVC</label>
                                            <input type="number" maxlength="3" required name="cvc" class="form-control {{$errors->has('cvc') ? 'is-invalid' :''}}" aria-describedby="emailHelp">
                                            @if ($errors->has('cvc'))
                                            <p class="text-danger">{{$errors->first('cvc')}}</p>
                                            @endif   
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                                <p class="text-center subheader mt-4">
                                    <img src="images/ic_secure.svg" alt=""> Your payment is secure and encrypted.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection