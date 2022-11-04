
    {{-- Headline --}}
    <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center mb-4">
        <h1 class="m-0 flex-grow-1 mb-1 mb-md-0">{{ $name }} {{ __('lesen') }}</h1>
        <span>
            @if (route('admin.' . $routeName . '.edit', $model->id))
                <a href="{{ route('admin.' . $routeName . '.edit', $model->id) }}" role="button" class="btn btn-outline-secondary">
                    <b>{{ __('admin::directives.edit') }}</b>
                </a>
            @endif
            @isset($model->id)
                <form action="{{ route('admin.' . $routeName . '.destroy', $model->id) }}" method="POST" class="d-inline-block">
                    @method('DELETE')
                    @csrf
                    <button type="submit" onclick="return confirm('{{ __('admin::directives.areYouSure')}}')"
                        class="btn btn-danger"><b>{{ __('admin::directives.delete') }}</b>
                    </button>
                </form>
            @endisset
        </span>
        
    </div>
    {{-- Cards --}}
    <div class="row gy-3">
        <div class="col">
            <div class="list-group shadow">
                <x-admin::mask.feedback/>
                {{ $slot }}
            </div>
        </div>
        @isset($model->id)
            <div class="col-12 col-lg-4 col-xl-3">
                <x-admin::mask.info :model="$model"/>
                @if(isset($subside))
                    <x-admin::mask.subside>
                        {{ $subside }}
                    </x-admin::mask.subside>
                @endif
            </div>
        @endisset
    </div>
    {{-- Call to action --}}
    <div class="d-flex justify-content-start mt-4">
        <a href="{{ route('admin.' . $routeName . '.index') }}" role="button" class="btn btn-outline-secondary">{{ __('Zurück') }}</a>
    </div>
