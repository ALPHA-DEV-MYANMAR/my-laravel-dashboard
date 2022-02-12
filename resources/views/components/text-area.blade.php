<div class="mb-3">
    <label for="input{{ $name }}" class="form-label">{{ $title }}</label>
    <textarea
        type="{{ $type }}"
        class="form-control @error($name) is-invalid @enderror"
        name="{{ $name }}"
        id="input{{ $name }}"
        rows="{{ $rows }}"
    >{{ old($name,$value ? $value : null) }}</textarea>
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
