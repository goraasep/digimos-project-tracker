<div class="d-flex justify-content-around gap-2">
    <a href="/projects/{{ $project->id }}" class="btn btn-6 btn-outline-primary w-100">Details</a>
    <button class="btn btn-6 btn-outline-primary w-100" data-bs-toggle="modal"
        data-bs-target="#modal-edit-project-{{ $project->id }}">
        Edit
    </button>
    <button class="btn btn-6 btn-outline-danger w-100" data-bs-toggle="modal"
        data-bs-target="#modal-delete-project-{{ $project->id }}">
        Delete
    </button>
</div>
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
                                <label class="form-label">Budget</label>
                                <input value="{{ old('budget', $project->budget) }}" type="number" name="budget"
                                    value="0" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Project number</label>
                                <input value="{{ old('project_number', $project->project_number) }}" type="text"
                                    name="project_number" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Start date</label>
                                <input value="{{ old('start_date', $project->start_date) }}" type="date"
                                    name="start_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
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

<div class="modal modal-blur fade" id="modal-delete-project-{{ $project->id }}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="/projects/{{ $project->id }}" method="POST">
                @method('delete')
                @csrf
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 9v2m0 4v.01" />
                        <path
                            d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                    </svg>
                    <h3>Are you sure?</h3>
                    <div class="text-muted">Do you really want to delete project "{{ $project->title }}"? What you've
                        done
                        cannot be
                        undone.</div>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn btn-white w-100" data-bs-dismiss="modal">
                                    Cancel
                                </a>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-danger w-100">
                                    Delete this project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
