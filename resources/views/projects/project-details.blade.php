@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Project
                    </div>
                    <h2 class="page-title">
                        {{ $project->title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Project info</h3>
                </div>
                <div class="card-body">
                    <div class="datagrid">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Description</div>
                            <div class="datagrid-content">{{ $project->description }}</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Project Number</div>
                            <div class="datagrid-content">{{ $project->project_number }}</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Budget</div>
                            <div class="datagrid-content">{{ $project->budget }}</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Client</div>
                            <div class="datagrid-content">{{ $project->client }}</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Start Date</div>
                            <div class="datagrid-content">{{ $project->start_date }}</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">End Date</div>
                            <div class="datagrid-content">{{ $project->end_date }}</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Created At</div>
                            <div class="datagrid-content">{{ $project->created_at }}</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Status</div>
                            <div class="datagrid-content">
                                <span class="status status-green">ON PROGRESS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">To Do</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Enable analytics tracking</h3>
                                        <div class="ratio ratio-16x9">
                                            <img src="./static/projects/dashboard-1.png" class="rounded object-cover"
                                                alt="Enable analytics tracking">
                                        </div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/004m.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/002f.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/003f.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/063m.jpg)">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    7
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8"></path>
                                                            <path d="M8 13h6"></path>
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                                            </path>
                                                        </svg>
                                                        2</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">User should receive a daily digest email</h3>
                                        <div class="text-secondary">Dedicated form for a category of users that will
                                            perform actions.</div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/000f.jpg)">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-warning">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path
                                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                                            </path>
                                                            <path d="M16 3v4"></path>
                                                            <path d="M8 3v4"></path>
                                                            <path d="M4 11h16"></path>
                                                            <path d="M11 15h1"></path>
                                                            <path d="M12 15v3"></path>
                                                        </svg>
                                                        10 Sep
                                                    </a>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    6
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-status-top bg-yellow"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Change license and remove references to products</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale active"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    34
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8"></path>
                                                            <path d="M8 13h6"></path>
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                                            </path>
                                                        </svg>
                                                        4</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">In Progress</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-status-top bg-green"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Write a release note for Admin v1.0</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-secondary">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/activity -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M3 12h4l3 8l4 -16l3 8h4"></path>
                                                        </svg>
                                                        1/3
                                                    </a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8"></path>
                                                            <path d="M8 13h6"></path>
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                                            </path>
                                                        </svg>
                                                        11</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divide-y-2 mt-4">
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-muted icon-2">
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg>
                                                <span class="text-secondary text-decoration-line-through">Implement new
                                                    designs</span>
                                            </div>
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-green icon-2">
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg>
                                                Usability testing
                                            </div>
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-green icon-2">
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg>
                                                Design navigation changes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="ribbon ribbon-top ribbon-bookmark bg-yellow">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                            <path
                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">Product Update - Q4 2021</h3>
                                        <div class="text-secondary">Dedicated form for a category of users that will
                                            perform actions.</div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/002f.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/003f.jpg)">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    11
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8"></path>
                                                            <path d="M8 13h6"></path>
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                                            </path>
                                                        </svg>
                                                        6</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Code HTML email template for welcome email</h3>
                                        <div class="ratio ratio-16x9">
                                            <img src="./static/projects/dashboard-3.png" class="rounded object-cover"
                                                alt="Code HTML email template for welcome email">
                                        </div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8"></path>
                                                            <path d="M8 13h6"></path>
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                                            </path>
                                                        </svg>
                                                        11</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">Test</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-status-top bg-red"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Design new diagrams</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/063m.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/006m.jpg)">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    6
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8"></path>
                                                            <path d="M8 13h6"></path>
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                                            </path>
                                                        </svg>
                                                        9</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Improve animation loader</h3>
                                        <div class="ratio ratio-16x9">
                                            <img src="./static/projects/dashboard-2.png" class="rounded object-cover"
                                                alt="Improve animation loader">
                                        </div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/004f.jpg)">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale active"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    5
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8"></path>
                                                            <path d="M8 13h6"></path>
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                                            </path>
                                                        </svg>
                                                        6</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">iOS App home page</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/002m.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/003m.jpg)">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-status-top bg-blue"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Changelog 1.7</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-warning">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path
                                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                                            </path>
                                                            <path d="M16 3v4"></path>
                                                            <path d="M8 3v4"></path>
                                                            <path d="M4 11h16"></path>
                                                            <path d="M11 15h1"></path>
                                                            <path d="M12 15v3"></path>
                                                        </svg>
                                                        10 Jan
                                                    </a>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M8 9h8"></path>
                                                            <path d="M8 13h6"></path>
                                                            <path
                                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                                            </path>
                                                        </svg>
                                                        6</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">Completed</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Enable analytics tracking</h3>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/002f.jpg)">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    1
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Coordinate with business development</h3>
                                        <div class="text-secondary">This content is a little bit longer.</div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/000m.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/052f.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/002m.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/003m.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/000f.jpg)">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale active"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    7
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="link-secondary">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/activity -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M3 12h4l3 8l4 -16l3 8h4"></path>
                                                        </svg>
                                                        1/3
                                                    </a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divide-y-2 mt-4">
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-muted icon-2">
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg>
                                                <span class="text-secondary text-decoration-line-through">Find out the old
                                                    contract documents</span>
                                            </div>
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-green icon-2">
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg>
                                                Organize meeting sales associates to understand need in detail
                                            </div>
                                            <div>
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon text-green icon-2">
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg>
                                                Make sure to cover every small details
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <h3 class="card-title">Managing teams</h3>
                                        <div class="text-secondary">Publishing industries for previewing layouts and visual
                                            <a href="#">#family</a> 🔥
                                        </div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/006m.jpg)">
                                                        </span>
                                                        <span class="avatar avatar-xs"
                                                            style="background-image: url(./static/avatars/004f.jpg)">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="switch-icon switch-icon-scale"
                                                        data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-1">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-filled icon-2">
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    4
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#"
                                                        class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                            <path d="M8.7 10.7l6.6 -3.4"></path>
                                                            <path d="M8.7 13.3l6.6 3.4"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
