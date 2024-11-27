@php
    $class ??= null;
@endphp

<div @class(['form-check form-switch', $class])>
    <input name="{{ $name }}" hidden value="0" />
    <input @checked(old($name, $value ?? false)) name="{{ $name }}" class="form-check-input @error($name) is-invalid @enderror" type="checkbox" id="{{ $name }}" value="1" />
    <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
