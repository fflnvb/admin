<div class="mb-3">
    <div class="form-floating">
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name) ?: $value }}" {{ $mandatory ? 'required' : ''}}>
        <label for="{{ $id }}">{{ $label }}{{ $mandatory ? '*' : ''}}</label>
    </div>
    <div class="invalid-feedback">
        {{ __('admin::enterValidValue') }}
    </div>
</div>
