<div class="input-group mb-3">
    <div class="form-floating">
        <textarea class="form-control @error($name) is-invalid @enderror" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}" {{ $mandatory ? 'required' : ''}} style="height:200px">{{ old($name) ?: $value }}</textarea>
        <label for="{{ $id }}">{{ $label }}{{ $mandatory ? '*' : ''}}</label>
    </div>
</div>

