<div>
    <div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Contact Details</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $contactDetail->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $contactDetail->email }}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{ $contactDetail->subject }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $contactDetail->Message }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $contactDetail->created_at }}</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ route('contact.index')}}" class="btn btn-secondary mt-3">
                ← Back to Contact List
            </a>
        </div>
    </div>
</div>

</div>
