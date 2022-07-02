@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Adventures
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                <table class="table">
                <tbody>
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{asset('images/komodo1')}}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{$checkout->Trip->title}}</strong>
                                    </p>
                                    <p>
                                        {{$checkout->created_at->format('M d Y')}}
                                    </p>
                                </td>
                                <td>
                                    <strong>
                                           Rp. {{$checkout->total}}
                                       
                                        @if ($checkout->discount_id)
                                            <span class="badge bg-success">Disc {{$checkout->discount_percentage}}%</span>
                                        @endif
                                    </strong>
                                </td>
                                <td>
                                @if ($checkout->payment_status)
                                        <span class="badge bg-success">Paid</span>
                                        @else
                                        <span class="badge bg-warning">Waiting</span>
                                        @endif
                                    
                                </td>
                                <td>
                                @if ($checkout->payment_status == '0')
                                        <a href="{{$checkout->midtrans_url}}" class="btn btn-primary">Pay Here</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="https://wa.me/081220002652?text=Hi, saya ingin bertanya tentang kelas {{$checkout->Trip->title}}" class="btn btn-primary">
                                        Contact Support
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h3>No Trips Were Added</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
