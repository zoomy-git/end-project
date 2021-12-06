@props(['value'])

<label {{ $attributes->merge(['class' => 'col-sm-2 col-form-label', 'style' => 'width:8rem;']) }}>
    {{ $value ?? $slot }}
</label>
