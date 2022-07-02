@component('mail::message')
# Welcome!

Hi {{$user->name}}
<br>
Welcome to Xperience+, your account has been created successfully. Find your trip and Start your Adventure!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent