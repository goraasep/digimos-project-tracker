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
    @include('tasks.components.create-modal')
@endsection
