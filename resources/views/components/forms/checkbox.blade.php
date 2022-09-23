<div class="input-group mb-3">
    <div class="form-check">
        <input class="form-check-input @error($name) is-invalid @enderror" type="checkbox" value="1" name="{{ $name }}" id="{{ $id }}" {{ $value ? 'checked' : '' }}>
        <label class="form-check-label" for="{{ $id }}">
            {{ $label }}
        </label>
    </div>
    <div class="invalid-feedback">
        {{ __('admin::enterValidValue') }}
    </div>
</div>
