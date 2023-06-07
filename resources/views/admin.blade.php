@extends('layout')
@section('body')
    @auth
        <div class="d-flex">
            <div style="min-height: 100vh; width: 280px;" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
                <a href="/admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4">Admin Dashoard</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item m-3">
                        <a href="/admin/users" class="nav-link @if (str_starts_with(Route::current()->getName(), 'users')) active @endif"
                            aria-current="page">
                            Users
                        </a>
                    </li>
                    <li class="nav-item m-3">
                        <a href="/admin/categories" class="nav-link @if (str_starts_with(Route::current()->getName(), 'categories')) active @endif"
                            aria-current="page">
                            Categories
                        </a>
                    </li>
                    <li class="nav-item m-3">
                        <a href="/admin/products" class="nav-link @if (str_starts_with(Route::current()->getName(), 'products')) active @endif"
                            aria-current="page">
                            Products
                        </a>
                    </li>
                    <li class="nav-item m-3">
                        <a href="/admin/brands" class="nav-link @if (str_starts_with(Route::current()->getName(), 'brands')) active @endif"
                            aria-current="page">
                            Brands
                        </a>
                    </li>
                    <li class="nav-item m-3">
                        <a href="/admin/roles" class="nav-link @if (str_starts_with(Route::current()->getName(), 'roles')) active @endif"
                            aria-current="page">
                            Roles
                        </a>
                    </li>
                    <li class="nav-item m-3">
                        <a href="/admin/permissions" class="nav-link @if (str_starts_with(Route::current()->getName(), 'permission')) active @endif"
                            aria-current="page">
                            Permissions
                        </a>
                    </li>

                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                            class="rounded-circle me-2">
                        <strong>abdallah</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Sign out</a></li>
                    </ul>

                </div>
            </div>
            <div style="width: calc(100vw - 290px)" class="p-4 d-flex flex-column">
                @yield('content')
            </div>
        </div>
         <div class="p-4 d-flex">


         </div>
    @endauth
@endsection
