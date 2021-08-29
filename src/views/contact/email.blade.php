@component('mail::message')
# Introduction
There is New Massage From <strong style="color: red">{{$name}}</strong>
<br>
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
