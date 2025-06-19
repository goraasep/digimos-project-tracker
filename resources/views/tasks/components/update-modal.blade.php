<div class="modal modal-blur fade" id="modal-update-task-{{ $task->id }}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/tasks/{{ $task->id }}" method="POST">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h5 class="modal-title">Edit task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input value="{{ $project->id }}" type="text" name="project_id" hidden required>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input value="{{ $task->title }}" type="text" name="title" class="form-control"
                            placeholder="Your task title" required>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Task description</label>
                                <textarea name="description" class="form-control rich-text-editor" rows="3">{{ $task->description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto">
                        Edit task
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
