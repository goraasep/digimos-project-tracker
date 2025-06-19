<div class="col-12">
    <div class="card card-sm">
        @if ($task->status == 'TODO')
            <div class="card-status-top bg-secondary"></div>
        @elseif ($task->status == 'IN_PROGRESS')
            <div class="card-status-top bg-primary"></div>
        @elseif ($task->status == 'ON_HOLD')
            <div class="card-status-top bg-warning"></div>
        @elseif ($task->status == 'COMPLETED')
            <div class="card-status-top bg-success"></div>
        @endif
        <div class="card-body">
            <h3 class="card-title">{{ $task->title }}</h3>
            <div class="text-secondary">{!! $task->description !!}</div>
            {{-- <div class="mt-4">
                <div class="row">
                  <div class="col"></div>
                  <div class="col-auto">
                    <a href="#" class="link-warning">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                        <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
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
                    <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                      <span class="switch-icon-a text-muted">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                          <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                      </span>
                      <span class="switch-icon-b text-red">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-filled icon-2">
                          <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                      </span>
                    </button>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/message -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                        <path d="M8 9h8"></path>
                        <path d="M8 13h6"></path>
                        <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                      </svg>
                      6</a>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="link-secondary"><!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                        <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M8.7 10.7l6.6 -3.4"></path>
                        <path d="M8.7 13.3l6.6 3.4"></path></svg></a>
                  </div>
                </div>
              </div> --}}
            <div class="mb-2 text-muted small fw-semibold">Assignee{{ $task->assignedUsers->count() > 1 ? 's' : '' }}:
            </div>

            <div class="d-flex flex-wrap gap-2">
                @forelse ($task->assignedUsers as $assignedUser)
                    <div class="badge bg-azure-lt">
                        {{ $assignedUser->email }}
                    </div>
                @empty
                    <span class="text-muted">No assignees</span>
                @endforelse
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-auto">
                        <a class="link-secondary p-2" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            role="button" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis"></i>
                        </a>
                        <div class="dropdown-menu">
                            <form method="POST" action="{{ url('/tasks/' . $task->id . '/update-status') }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="TODO">
                                <button type="submit"
                                    class="dropdown-item
                                    {{ $task->status == 'TODO' ? 'active' : '' }}">
                                    To Do
                                </button>
                            </form>
                            <form method="POST" action="{{ url('/tasks/' . $task->id . '/update-status') }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="IN_PROGRESS">
                                <button type="submit"
                                    class="dropdown-item
                                    {{ $task->status == 'IN_PROGRESS' ? 'active' : '' }}">
                                    In Progress
                                </button>
                            </form>
                            <form method="POST" action="{{ url('/tasks/' . $task->id . '/update-status') }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="ON_HOLD">
                                <button type="submit"
                                    class="dropdown-item
                                    {{ $task->status == 'ON_HOLD' ? 'active' : '' }}">
                                    On Hold
                                </button>
                            </form>
                            <form method="POST" action="{{ url('/tasks/' . $task->id . '/update-status') }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="COMPLETED">
                                <button type="submit"
                                    class="dropdown-item
                                    {{ $task->status == 'COMPLETED' ? 'active' : '' }}">
                                    Completed
                                </button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#modal-update-task-{{ $task->id }}">
                                Edit</button>
                            <button class="dropdown-item text-danger link" data-bs-toggle="modal"
                                data-bs-target="#modal-delete-task-{{ $task->id }}">
                                Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('tasks.components.update-modal', [
    'task' => $task,
])
@include('tasks.components.delete-modal', [
    'task' => $task,
])
