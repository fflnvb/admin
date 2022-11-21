<div class="input-group mb-3">
    <div class="form-floating">
        <input type="number" step="0.01" min="0" lang="de" class="form-control @error($name) is-invalid @enderror" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name) ?: $value }}"  {{ $mandatory ? 'required' : ''}}>
        <label for="{{ $id }}">{{ $label }}{{ $mandatory ? '*' : ''}}</label>
    </div>
    <span class="input-group-text">{{ $currency }}</span>
</div>
<div class="invalid-feedback">
        {{ __('admin::enterValidValue') }}
</div>