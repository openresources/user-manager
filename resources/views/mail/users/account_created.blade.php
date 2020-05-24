@component('mail::message')
# New User Account Notification

Hello {{ $name }},

A new user account has been created for you based on your registration of interest.

Please click the link below to complete the registration process and set your account password.

@component('mail::button', ['url' => $loginUrl])
Complete Registration
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
