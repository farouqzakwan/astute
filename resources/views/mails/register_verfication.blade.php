@component('mail::message')
Hi Strangers,

We're happy you singned up for {{ config('app.name') }}. 
To start exploring the {{ config('app.name') }}, 
please confirm your email address. 

@component('mail::button', ['url' => $url])
Verify Email
@endcomponent

@endcomponent