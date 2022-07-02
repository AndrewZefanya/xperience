@component('mail::message')
# Booking Trip: {{$checkout->Trip->title}}

Hi {{$checkout->user->name}}
<br>
Thank you for booking on <b>{{$checkout->Trip->title}}</b>, please follow the payment instruction by clicking the button below.

@component('mail::button', ['url' => route('dashboard', $checkout->id)])
Payment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent