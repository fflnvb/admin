<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>{{ config('admin.title') }} –  @yield('title')</title>

    <script type="module" src="/js/admin.js" defer></script>
    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/icons.css" rel="stylesheet">

    @yield('head')

</head>

<body>
    <x-admin::menu.sidebar />
    <main class="container-fluid min-vh-100">
        <div class="row mb-5">
            <div class="d-none d-md-block col-md-4 col-lg-3 col-xxl-2">
            </div>
            <div class="col-12 col-md-8 col-lg-9 col-xxl-10">
                <div class="container mt-5">
                    @yield('content')
                </div>
            </div>
        </div>

      </main>
    @yield('scripts')
</body>

</html>
