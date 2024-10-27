@props(['active'])

@php
$classes = ($active ?? false)
            ? '"text-gray-800 text-red-600 '
            : 'hover:text-red-600 ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>


