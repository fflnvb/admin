<div class="col-12 col-xl-6 col-xxl-4 d-flex align-items-stretch">
    <div class="card mb-3 shadow flex-grow-1">
        <div class="row g-0">
            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                <h1 class="display-4 m-0">{{ $count }}</h1>
            </div>
            <div class="col-sm-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $name }}</h5>
                    <p class="card-text">
                        <small class="text-muted">{{ __('admin::directives.lastEdit') }}</small><br>
                        {{ $lastEditItem->prettyDate('updated_at') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

