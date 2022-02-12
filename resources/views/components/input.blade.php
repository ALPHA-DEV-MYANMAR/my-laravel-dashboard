<div class="mb-3">
    <label for="input{{ $name }}" class="form-label">{{ $title }}</label>
    <input
        type="{{ $type }}"
        class="form-control @error($name) is-invalid @enderror"
        value="{{ old($name,$value ? $value : null) }}"
        name="{{ $name }}"
        id="input{{ $name }}"
    >
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
