<div class="form-floating mb-3">
    <select class="form-select @error($name) is-invalid @enderror" id="{{ $id }}" name="{{ $name }}">
        <option hidden>{{ __('admin::directives.pleaseSelect') }}</option>
        @foreach ($list as $item)
            <option value="{{ $item->value }}"
                {{ $item->value == (old($name) ?: $selected) ? 'selected' : '' }}>
                {{ Str::replace('_', ' ', $item->name) }}
            </option>
        @endforeach
    </select>
    <label for="{{ $id }}">{{ $label }}</label>
</div>
