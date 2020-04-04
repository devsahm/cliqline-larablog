@component('mail::message')
# Cliqline Solutions Client Message

Find your message below<br><br>
Name: {{$name}}<br>

Email:{{$email}}<br>
Message:{{$message}}

@component('mail::button', ['url' => '/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
