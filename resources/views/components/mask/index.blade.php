<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center mb-4">
    <h1 class="m-0 flex-grow-1 mb-1 mb-md-0">{{ $name }}</h1>
    @if(Route::has('admin.' . $routeName . '.create'))
    <a href="{{ route('admin.' . $routeName . '.create', ($createModel ? [$createModel => $createId] : '')) }}" role="button" class="btn btn-success">{{ __('admin::directives.createWithName', ['name' => $single]) }}</a>
    @endif
</div>
@if (isset($prelist))
    {{ $prelist }}
@endif
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="list-group shadow">
    {{ $slot }}
</div>

<div class="d-flex @isset($withBack) justify-content-between @else justify-content-end @endisset mt-4">
    @isset($withBack)
    <a href="{{ route($withBack) }}" role="button" class="btn btn-outline-secondary">{{ __('admin::directives.back') }}</a>
    @endisset
    @if (Route::has('admin.' . $routeName . '.export'))
    <a href="{{ route('admin.' . $routeName . '.export') }}" role="button" class="btn btn-outline-secondary"><i class="bi bi-file-earmark-excel-fill"></i> {{ __('admin::directives.export') }}</a>
    @endif
</div>
