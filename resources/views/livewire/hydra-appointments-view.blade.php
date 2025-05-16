<div>
    <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Hydra Facial Appointments</h3>
                </div> <!-- /.card-header -->
                <div class="card-body">

                    <div class="row mb-3">
                         <div class="col-md-2 p-2">
                            <h4>Filters</h4>
                        </div>
                        <div class="col-md-3 p-2">
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
                            <input type="text" class="form-control" placeholder="Contact" wire:model.live="contactfilter">
                        </div>
                        <div class="col-md-3 p-2">
                            <input type="text" class="form-control" placeholder="Type" wire:model.live="typefilter">
                        </div>
                        <div class="col-md-3 p-2">
                            <input type="date" class="form-control" placeholder="Date" wire:model.live="datefilter">
                        </div>
                        <div class="col-md-3 p-2">
                            <button class="btn btn-secondary" wire:click="clearFilters">Clear Filters</button>
                        </div>
                    </div>


                    <table class="table table-striped table-bordered table-valign-middle">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>contact</th>
                                <th>Type</th>
                                <th>date</th>
                                <th>Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointments as $appointment)
                            <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $appointment->name }}</td>
                                <td>{{ $appointment->email }}</td>
                                <td>{{ $appointment->contact }}</td>
                                <td>{{ $appointment->appointment_type }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">View</a>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <button wire:click="delete({{ $appointment->id }})" class="btn btn-danger btn-sm">Delete</button>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div> <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $appointments->links() }}
                </div>
            </div> <!-- /.card -->
</div>
