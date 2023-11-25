<x-mail::message>
# Introduction

Ahmed Ghoneim Send all love  to you and your mother

<x-mail::button :url="'https://www.youtube.com/'">
Button Text
</x-mail::button>
<x-mail::table>
    | Laravel       | Table         | Example  |
    | ------------- |:-------------:| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
</x-mail::table>
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
