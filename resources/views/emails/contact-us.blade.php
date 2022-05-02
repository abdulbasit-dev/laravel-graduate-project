@component('mail::message')
<h2>Name: {{ $request->name }}</h2>
<h2>Email: {{ $request->email }}</h2>

<p>
    {{ $request->message }}
</p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent