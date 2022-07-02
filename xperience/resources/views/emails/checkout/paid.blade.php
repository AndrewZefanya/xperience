@component('mail::message')
# Your Transaction Has Been Confirmed

Hi {{$checkout->User->name}}
<br>
Your transaction has been confirmed, enjoy your Adveneture <b>{{$checkout->Trip->title}}</b> trip.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent