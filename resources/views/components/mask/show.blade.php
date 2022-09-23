
    {{-- Headline --}}
    <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center mb-4">
        <h1 class="m-0 flex-grow-1 mb-1 mb-md-0">{{ $name }} {{ __('lesen') }}</h1>
        @isset($model->id)
        <form action="{{ route('admin.' . $routeName . '.destroy', $model->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" onclick="return confirm('{{ __('Bist du dir sicher?')}}')"
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
        <a href="{{ route('admin.' . $routeName . '.index') }}" role="button" class="btn btn-outline-secondary">{{ __('Zurück') }}</a>
    </div>
