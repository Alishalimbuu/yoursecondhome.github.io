<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('student.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <h3>Student Detail</h3>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Room</th>
                        <th>Bed</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($students as $index=>$item)
                        <tr>
                            <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                            <td>{{ $item->contact }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->room->name }}</td>
                            <td>{{ $item->bed->name }}</td>
                            <td>
                                <span class="badge {{ $item->status == 'checked-in' ? ' badge-success' : 'bg-danger' }}">{{ $item->status }}</span>
                            </td>
                            <td>
                                <a href="{{ route('student.edit',$item->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
