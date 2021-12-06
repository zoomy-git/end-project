@props(['active'])

@php
$classes = ($active ?? false)
            ? ''
            : 'p-5';
@endphp

<a {{ $attributes->merge(['class' => $classes.'align-self-right']) }}>
    {{ $slot }}
</a>
