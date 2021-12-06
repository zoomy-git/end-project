<div class="d-grid gap-2">
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn', 'style' => 'background-color: #DB7E61;']) }}>
    {{ $slot }}
</button>
</div>
