<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Student Leave</h5>
                <a href="{{ route('leave.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <h5>Name: {{ $leave->name }}</h5>
                <p>Reason: {!! $leave->reason !!}</p>
            </div>
        </div>
    </div>
</x-admin-layout>
