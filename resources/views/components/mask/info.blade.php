@props(['model'])
<div class="col-12 col-lg-4 col-xl-3">
    <div class="list-group shadow">
        <x-admin::mask.item>
            <h5>{{ __('admin::directives.createdAt') }}</h5>
            {{ $model->prettyDate('created_at') ?? '-' }}
        </x-admin::mask.item>
        <x-admin::mask.item>
            <h5>{{ __('admin::directives.lastEdit') }}</h5>
            {{ $model->prettyDate('updated_at') ?? '-' }}
        </x-admin::mask.item>
    </div>
</div>
