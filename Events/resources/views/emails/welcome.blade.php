<x-mail::message>
# Introduction

Hello {{$user->name}}
<h2>ازيك و ازى امك </h2>
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
