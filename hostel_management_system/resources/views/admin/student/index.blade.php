<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('student.create') }}" class="btn btn-primary">Add Student</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr style="font-size: 12px">
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Name</th>
                        <th class="border border-1">Contact</th>
                        <th class="border border-1">Parents No</th>
                        <th class="border border-1">Address</th>
                        <th class="border border-1">Room</th>
                        <th class="border border-1">Bed</th>
                        <th class="border border-1">Status</th>
                        <th class="border border-1">Enroll</th>
                        <th class="border border-1">Action</th>
                    </tr>

                    @foreach ($students as $index => $item)
                        <tr style="font-size: 12px">
                            <td class="border border-1">{{ ++$index }}</td>

                            <td class="border border-1">{{ $item->first_name }} {{ $item->last_name }}</td>
                            <td class="border border-1">{{ $item->contact }}</td>
                            <td class="border border-1">{{ $item->dob }}</td>
                            <td class="border border-1">{{ $item->address }}</td>
                            <td class="border border-1">{{ $item->room->name }}</td>
                            <td class="border border-1">{{ $item->bed->name }}</td>
                            <td class="border border-1">
                                <span
                                    class="badge {{ $item->status == 'checked-in' ? ' badge-success' : 'bg-danger' }}">{{ $item->status }}</span>
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('student.edit', $item->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('student.show', $item->id) }}" class="btn btn-success btn-sm">Payment
                                    Request</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
