<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Visitors Details</h5>

                <a href="{{ route('visitor.create') }}" class="btn btn-primary "><i class="fa-solid fa-plus"></i>Add
                    visitor</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Name</th>
                        <th class="border border-1">Phone</th>
                        <th class="border border-1">Status</th>
                        <th class="border border-1">In Time</th>
                        <th class="border border-1">Last Updated</th>
                        <th class="border border-1">Action</th>
                    </tr>

                    @foreach ($visitor as $index => $item)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">{{ $item->name }} </td>
                            <td class="border border-1">{{ $item->phone }}</td>
                            <td class="border border-1">
                                <span
                                    class="badge {{ $item->status == 'checked_in' ? ' badge-success' : 'bg-danger' }}">{{ $item->status }}</span>
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="{{ route('visitor.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
