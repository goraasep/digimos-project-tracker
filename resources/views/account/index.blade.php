@extends('layouts.app')

@section('title', 'Account Settings')

@section('content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Account Settings
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards row-cols-1 row-cols-md-2">
                <div class="col">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Change Username</h3>
                                </div>
                                <div class="card-body">
                                    <form action="/account/update" method="POST" class="space-y">
                                        @method('put')
                                        @csrf
                                        <div>
                                            <div class="input-icon">
                                                <span class="input-icon-addon">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-1">
                                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                    </svg>
                                                </span>
                                                <input name="name" type="text" value="{{ Auth::user()->name }}"
                                                    class="form-control" placeholder="Username" required>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary btn-3">
                                                        Change Username
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Change Password</h3>
                                </div>
                                <div class="card-body">
                                    <form action="/account/change-password" method="POST" class="space-y">
                                        @method('put')
                                        @csrf
                                        <div>
                                            <div class="input-icon">
                                                <span class="input-icon-addon">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-1">
                                                        <path
                                                            d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z">
                                                        </path>
                                                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                                        <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                                    </svg>
                                                </span>
                                                <input name="old_password" type="password" value=""
                                                    class="form-control" placeholder="Old Password" required>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="input-icon">
                                                <span class="input-icon-addon">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-1">
                                                        <path
                                                            d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z">
                                                        </path>
                                                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                                        <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                                    </svg>
                                                </span>
                                                <input name="password" type="password" value="" class="form-control"
                                                    placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="input-icon">
                                                <span class="input-icon-addon">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-1">
                                                        <path
                                                            d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z">
                                                        </path>
                                                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                                        <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                                    </svg>
                                                </span>
                                                <input name="password_confirmation" type="password" value=""
                                                    class="form-control" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary btn-3">
                                                        Change Password
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('projects.components.create-modal')
@endsection
