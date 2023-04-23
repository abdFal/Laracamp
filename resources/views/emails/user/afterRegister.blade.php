<x-mail::message>
# Welcome

Hi {{$user->name}}
<br>
Welcome To Laracamp

<x-mail::button :url="route('login')">
Login Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
