<div
    x-cloak
    x-data="{ sidebar: @auth null @endauth @guest true @endguest}"
    @auth
         x-breakpoint="
        if($isBreakpoint('unset')) sidebar = false
        if($isBreakpoint('md')) sidebar = true
        "
    @endauth

    >
    <div :class="sidebar ? 'bg-dark fixed-top col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 shadow' : 'd-none'" style="height: 100%; overflow-y: scroll; overfly-x: none">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white">
            <div>
                <a href="/" class="mb-3 text-white text-decoration-none">
                    <span class="fs-4">{{ $config['name'] }}</span>
                </a>
                @auth
                <button class="btn btn-secondary float-end" type="button" x-on:click="sidebar = ! sidebar">
                    <i class="bi bi-list"></i>
                </button>
                @endauth
            </div>

            <hr>
            @auth
            <ul class="nav nav-pills flex-column mb-auto">
                @foreach ($config['items'] as $item)
                <x-admin::menu.sidebar.item :item="$item" />
                @endforeach
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/fflnvb.png" alt="" class="rounded-circle me-2" width="32"
                        height="32">
                    <strong>{{ auth()->user()->name }}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                </ul>
            </div>
            @endauth

            @guest
                <form method="post" action="{{ route('admin.authenticate') }}">
                    {{ csrf_field() }}
                    <div class="mb-2">
                     <label>E-Mail</label>
                     <input type="email" name="email" class="form-control" />
                    </div>
                    <div class="mb-2">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" />
                    </div>
                    <div class="mb-2">
                     <input type="submit" name="login" class="btn btn-primary" value="Login" />
                    </div>
                </form>
            @endguest
        </div>
    </div>
        <button x-show="!sidebar" class="btn btn-primary m-2 fixed-top" type="button" style="width: 40px" x-on:click="sidebar = ! sidebar">
            <i class="bi bi-list"></i>
        </button>
</div>


