<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Student Leave</h5>

                <a href="{{ route('leave.create') }}" class="btn btn-primary "><i class="fa-solid fa-plus"></i>Add
                    leave</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Name</th>
                        <th class="border border-1">Leave Date</th>
                        <th class="border border-1">Return Date</th>
                        <th class="border border-1">Status</th>
                        <th class="border border-1">Action</th>
                    </tr>

                    @foreach ($leave as $index => $item)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">{{ $item->name }} </td>
                            <td class="border border-1">{{ \Carbon\Carbon::parse($item->from)->format('d-M-Y, l') }}
                            </td>
                            <td class="border border-1">{{ \Carbon\Carbon::parse($item->upto)->format('d-M-Y, l') }}
                            </td>
                            <td class="border border-1">
                                <span
                                    class="badge {{ $item->status == 'checked_in' ? ' badge-success' : 'bg-danger' }}">{{ $item->status }}</span>
                            </td>
                            <td>
                                <a href="{{ route('leave.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('leave.show', $item->id) }}" class="btn btn-info">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
