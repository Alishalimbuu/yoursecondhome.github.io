<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Message from Student</h3>
            </div>
            <div class="row p-5">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Name</th>
                        <th class="border border-1 w-50">Room</th>
                        <th class="border border-1">Bed</th>
                        <th class="border border-1 ">Status</th>
                        <th class="border border-1">Action</th>
                    </tr>

                    @foreach ($studentmessage as $index => $item)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">{{ $item->user->first_name }} {{ $item->user->last_name }}</td>
                            <td class="border border-1">{{ $item->user->room->name }}</td>
                            <td class="border border-1">{{ $item->user->bed->name }} </td>
                            <td class="border border-1"><span
                                    class="{{ $item->status == 'approved' ? 'badge badge-success' : 'badge badge-danger' }}">{{ $item->status }}</span>
                            </td>
                            <td class="border border-1"><a href="{{ route('studentmessage.show', $item->id) }}"
                                    class="btn btn-info">Preview</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
