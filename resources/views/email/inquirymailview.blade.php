@component('mail::message')
<h1>Hello Admin,</h1>
<p>This inquiry/message email <br>from {{$details['name']}}<br>Email :{{ $details['email']}}
 <br>Message : {{ $details['msg'] }}<br>
{{ config('app.name') }}<br>
@endcomponent