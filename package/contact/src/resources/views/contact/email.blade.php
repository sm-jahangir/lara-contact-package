<x-mail::message>
# Introduction

There is new query from {{ $name }}
{{ $message }}

<x-mail::button :url="'/laravel.com'">
Button Text
</x-mail::button>

Thanks,<br>
{{ $name }}
</x-mail::message>