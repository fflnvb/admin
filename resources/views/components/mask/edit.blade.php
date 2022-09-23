<form method="POST"
    action="{{ isset($model->id) ? route('admin.' . $routeName . '.update', $model->id) : route('admin.' . $routeName . '.store') }}">

    @csrf
    @isset($model->id) @method('PUT') @endisset
    {{-- Headline --}}
    <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center mb-4">
        <h1 class="m-0 flex-grow-1 mb-1 mb-md-0">{{ isset($model->id) ? __('admin::directives.editWithName', ['name' => $name]) : __('admin::directives.createWithName', ['name' => $name]) }}</h1>
        @isset($model->id)
        <form action="{{ route('admin.' . $routeName . '.destroy', $model->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" onclick="return confirm('{{ __('admin::directives.areYouSure') }}')"
                class="btn btn-danger"><b>{{ __('Löschen') }}</b>
            </button>
        </form>
        @endisset
    </div>
    {{-- Cards --}}
    <div class="row gy-3">
        <div class="col">
            <div class="list-group shadow">
                <x-admin::mask.feedback/>
                {{ $slot }}
            </div>
        </div>
        @if(isset($model->id))
            <x-admin::mask.info :model="$model"/>
        @endif
    </div>
    {{-- Call to action --}}
    <div class="d-flex justify-content-start mt-4">
        <button type="submit" class="btn btn-success me-1"><i class="bi bi-check-lg"></i> <b>{{ __('admin::directives.save') }}</b></button>
        <a href="{{ route('admin.' . $routeName . '.index') }}" role="button" class="btn btn-outline-secondary">{{ __('admin::directives.back') }}</a>
    </div>

</form>
