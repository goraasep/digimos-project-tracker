<div class="modal modal-blur fade" id="modal-create-task" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/tasks/create" method="POST">
                @csrf
                @method('post')
                <div class="modal-header">
                    <h5 class="modal-title">New task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input value="{{ $project->id }}" type="text" name="project_id" hidden required>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Your task title"
                            required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Task description</label>
                                <textarea name="description" class="form-control rich-text-editor" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <div class="form-label">Assignee</div>
                                <select name="users[]" class="form-select selectize" multiple>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->email }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Deadline</label>
                            <input type="datetime-local" name="deadline" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto">
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
            </form>
        </div>
    </div>
</div>
