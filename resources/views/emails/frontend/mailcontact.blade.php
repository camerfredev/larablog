@component('mail::message')
Inforamton de l'expediteur <br>

* Nom {{ $name }}
* Email {{ $email }}

#contenu du message
{{ $content }}

The body of your message.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
