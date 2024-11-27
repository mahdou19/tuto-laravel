@php
    $type ??= 'text';
    $name ??= '';
    $class ??= null;
    $label ??= null;
    $value ??= '';
@endphp

<div @class(['form-group', $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}">{{ old($name, $value) }}</textarea>
    @else
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" value="{{ old($name, $value) }}" />
    @endif

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
