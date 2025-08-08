<div>
    <div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Consultation Details</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $appiontmentDetail->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $appiontmentDetail->email }}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{ $appiontmentDetail->contact }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $appiontmentDetail->date }}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{ $appiontmentDetail->time }}</td>
                    </tr>
                    <tr>
                        <th>Appointment Type</th>
                        <td>{{ $appiontmentDetail->appointment_type }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>GBP {{ number_format($appiontmentDetail->price, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Paid</th>
                        <td>
                            @if($appiontmentDetail->paid)
                                <span class="badge bg-success">Yes</span>&nbsp;&nbsp;{{ number_format($appiontmentDetail->paid, 2) }}
                            @else
                                <span class="badge bg-danger">No</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td>{{ $appiontmentDetail->message }}</td>
                    </tr>
                    <tr>
                        <th>status</th>
                        <td>{{ $appiontmentDetail->status->label() }}</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ route('const.index')}}" class="btn btn-secondary mt-3">
                ← Back to Appointments
            </a>
        </div>
    </div>
</div>

</div>
