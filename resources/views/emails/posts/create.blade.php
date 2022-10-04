@component('mail::message')
# New Post has been published

 {{ $post->body }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
