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
                    <div class="col">
                        <h3 class="card-title">Project info</h3>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a class="link-secondary p-2" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis"></i>
                            </a>
                            <div class="dropdown-menu">
                                <button class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#modal-update-status-project-{{ $project->id }}">
                                    Change Status</button>
                                <button class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#modal-edit-project-{{ $project->id }}">
                                    Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row gy-3 align-items-start mb-4">
                            <div class="col-md-6">
                                <div class="fw-semibold text-muted mb-1">Description</div>
                                <div class="text-body">{!! $project->description !!}</div>
                            </div>
                            <div class="col-md-6">
                                <div class="row gy-3">
                                    <div class="col-sm-6">
                                        <div class="fw-semibold text-muted mb-1">Start Date</div>
                                        <div class="text-body">
                                            {{ \Carbon\Carbon::parse($project->start_date)->format('d M Y') }}</div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="fw-semibold text-muted mb-1">End Date</div>
                                        <div class="text-body">
                                            {{ \Carbon\Carbon::parse($project->end_date)->format('d M Y') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-3 col-sm-6">
                                <div class="fw-semibold text-muted mb-1">Client</div>
                                <div class="text-body">{{ $project->client }}</div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="fw-semibold text-muted mb-1">Created At</div>
                                <div class="text-body">{{ $project->created_at->format('d M Y H:i') }}</div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="fw-semibold text-muted mb-1">Created By</div>
                                <div class="text-body">
                                    {{ $project->createdBy ? $project->createdBy->email : 'Deleted user' }}</div>
                            </div>

                            @php
                                $statusColors = [
                                    'TODO' => 'gray',
                                    'IN_PROGRESS' => 'blue',
                                    'ON_HOLD' => 'yellow',
                                    'COMPLETED' => 'green',
                                ];
                                $statusClass = $statusColors[$project->status] ?? 'gray';
                            @endphp

                            <div class="col-md-3 col-sm-6">
                                <div class="fw-semibold text-muted mb-1">Status</div>
                                <div>
                                    <span class="status status-{{ $statusClass }}">
                                        {{ str_replace('_', ' ', $project->status) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-4">
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <button class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-create-task">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            Create new task
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">To Do</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            @if ($project->tasks->where('status', 'TODO')->isEmpty())
                                <div class="col-12">
                                    <div class="text-secondary text-center">
                                        No tasks found.
                                    </div>
                                </div>
                            @endif
                            @foreach ($project->tasks as $task)
                                @if ($task->status == 'TODO')
                                    @include('tasks.components.task-card', [
                                        'task' => $task,
                                    ])
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">In Progress</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            @if ($project->tasks->where('status', 'IN_PROGRESS')->isEmpty())
                                <div class="col-12">
                                    <div class="text-secondary text-center">
                                        No tasks found.
                                    </div>
                                </div>
                            @endif
                            @foreach ($project->tasks as $task)
                                @if ($task->status == 'IN_PROGRESS')
                                    @include('tasks.components.task-card', [
                                        'task' => $task,
                                    ])
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">On Hold</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            @if ($project->tasks->where('status', 'ON_HOLD')->isEmpty())
                                <div class="col-12">
                                    <div class="text-secondary text-center">
                                        No tasks found.
                                    </div>
                                </div>
                            @endif
                            @foreach ($project->tasks as $task)
                                @if ($task->status == 'ON_HOLD')
                                    @include('tasks.components.task-card', [
                                        'task' => $task,
                                    ])
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <h2 class="mb-3">Completed</h2>
                    <div class="mb-4">
                        <div class="row row-cards">
                            @if ($project->tasks->where('status', 'COMPLETED')->isEmpty())
                                <div class="col-12">
                                    <div class="text-secondary text-center">
                                        No tasks found.
                                    </div>
                                </div>
                            @endif
                            @foreach ($project->tasks as $task)
                                @if ($task->status == 'COMPLETED')
                                    @include('tasks.components.task-card', [
                                        'task' => $task,
                                    ])
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('tasks.components.create-modal', ['users' => $users])
    @include('projects.components.update-modal', ['project' => $project, 'users' => $users])
    @include('projects.components.update-status-modal', ['project' => $project])
@endsection
