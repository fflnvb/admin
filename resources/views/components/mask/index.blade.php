<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center mb-4">
    <h1 class="m-0 flex-grow-1 mb-1 mb-md-0">{{ $name }}</h1>
    @if (Route::has('admin.' . $routeName . '.create'))
    <a href="{{ route('admin.' . $routeName . '.create') }}" role="button" class="btn btn-success">{{ __('admin::directives.createWithName', ['name' => $single]) }}</a>
    @endif
</div>

<div class="list-group shadow">
    {{ $slot }}
</div>

<div class="d-flex justify-content-end mt-4">
    @if (Route::has('admin.' . $routeName . '.export'))
    <a href="{{ route('admin.' . $routeName . '.export') }}" role="button" class="btn btn-outline-secondary"><i class="bi bi-file-earmark-excel-fill"></i> {{ __('admin::directives.export') }}</a>
    @endif
</div>
