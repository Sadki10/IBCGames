@props(['value'])

<label for="{{ $attributes->get('for') }}" class="form-label">
    {{ $value ?? $slot }}
</label>
