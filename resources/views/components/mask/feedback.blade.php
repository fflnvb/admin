@if ($errors->any())
    @foreach ($errors->all() as $error)
        <x-admin::mask.item background="danger">
            {{ $error }}
        </x-admin::mask.item>
    @endforeach
@endif
