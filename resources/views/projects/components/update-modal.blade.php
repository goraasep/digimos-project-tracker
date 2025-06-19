<div class="modal modal-blur fade" id="modal-edit-project-{{ $project->id }}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/projects/{{ $project->id }}" method="POST">
                @method('put')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Edit Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input value="{{ old('title', $project->title) }}" type="text" name="title"
                            class="form-control" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Client name</label>
                                <input value="{{ old('client', $project->client) }}" type="text" name="client"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Start date</label>
                                <input value="{{ old('start_date', $project->start_date) }}" type="date"
                                    name="start_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">End date</label>
                                <input value="{{ old('end_date', $project->end_date) }}" type="date" name="end_date"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Project description</label>
                                <textarea name="description" class="form-control" rows="3">{{ old('description', $project->description) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto">
                        Update project
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
