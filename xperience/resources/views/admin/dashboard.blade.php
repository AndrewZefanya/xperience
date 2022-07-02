@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        My Trips
                    </div>
                    <div class="card-body">
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Trip</th>
                                    <th>Price</th>
                                    <th>Register Data</th>
                                    <th>Paid Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                    <tr>
                                        <td>{{$checkout->User->name}}</td>
                                        <td>{{$checkout->Trip->title}}</td>
                                        <td><strong>
                                           Rp. {{$checkout->total}}
                                        @if ($checkout->discount_id)
                                            <span class="badge bg-success">Disc {{$checkout->discount_percentage}}%</span>
                                        @endif

                                       
                                    </strong></td>
                                        <td>{{$checkout->created_at->format('M d Y')}}</td>
                                        <td>@if ($checkout->payment_status)
                                        <span class="badge bg-success">Paid</span>
                                        @else
                                        <span class="badge bg-warning">Waiting</span>
                                        @endif</td></strong>

                                        
                                        <td>
                                        @if (!$checkout->payment_status)
                                            <form action="{{route('admin.checkout.update', $checkout->id)}}" method="POST">
                                                @csrf<button class="btn btn-primary btn-sm">Set to Paid</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    
                                    <tr>
                                        <td colspan="3">No Booked Trips</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 