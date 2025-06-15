<div>
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Laser Facial Appointments</h3>
        </div> <!-- /.card-header -->
        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-2 p-2">
                    <h4>Filters</h4>
                </div>
                <div class="col-md-1 p-2">
                    <select class="form-control" wire:model.change="setLimit">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="col-md-3 p-2">
                    <input type="text" class="form-control" placeholder="Name" wire:model.live="namefilter">
                </div>
                <div class="col-md-3 p-2">
                    <input type="text" class="form-control" placeholder="Email" wire:model.live="emailfilter">
                </div>
                <div class="col-md-3  p-2">
                    <input type="text" class="form-control" placeholder="Subject" wire:model.live="subjectfilter">
                </div>
                <div class="col-md-3 p-2">
                    <input type="date" class="form-control" placeholder="Date" wire:model.live="datefilter">
                </div>
                <div class="col-md-3 p-2">
                    <button class="btn btn-secondary" wire:click="clearFilters">Clear Filters</button>
                </div>
            </div>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            <table class="table table-striped table-bordered table-valign-middle">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contactlist as $details)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $details->name }}</td>
                            <td>{{ $details->email }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($details->subject, 30, '...') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($details->Message, 20, '...') }}</td>
                            <td>{{ $details->created_at->format('d-m-Y') }}</td>
                            <td>
                                <a target="_blank" href="{{ route('contact.detail', $details->id)}}" class="btn btn-info btn-sm">View</a>
                                {{-- <a target="_blank" href="{{ route('laser.edit', $details->id)}}" class="btn btn-warning btn-sm">Edit</a> --}}
                                <button class="btn btn-danger btn-sm" wire:click="confirmDelete({{ $details->id }})">Delete</button>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div> <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $contactlist->links() }}
        </div>
    </div> <!-- /.card -->


    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteConfirmLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this appointment?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" wire:click="delete" class="btn btn-danger">
                        Yes, Delete
                    </button>

                </div>
            </div>
        </div>
    </div>
    {{-- @push('scripts') --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));

                Livewire.on('showDeleteConfirmation', () => {
                    deleteModal.show();
                });

                Livewire.on('closeDeleteModal', () => {
                    deleteModal.hide();
                });
            });
        </script>
    {{-- @endpush --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}


</div>
