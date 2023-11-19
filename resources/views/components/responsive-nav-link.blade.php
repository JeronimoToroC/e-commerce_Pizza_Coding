@props(['active'])

@php
    $classes = $active ?? false ? 'block py-2 px-3 text-white bg-red-logo rounded' : 'block py-2 px-3 text-white rounded hover:bg-blue-800';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
