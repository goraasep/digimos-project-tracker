<div class="modal modal-blur fade" id="modal-update-status-project-{{ $project->id }}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/projects/{{ $project->id }}/update-status" method="POST">
                @method('put')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Update Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        @php
                            $statuses = ['TODO', 'IN_PROGRESS', 'ON_HOLD', 'COMPLETED'];
                        @endphp
                        @foreach ($statuses as $status)
                            <option value="{{ $status }}"
                                {{ old('status', $project->status) === $status ? 'selected' : '' }}>
                                {{ str_replace('_', ' ', $status) }}
                            </option>
                        @endforeach
                    </select>
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
