<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('room.create') }}" class="btn btn-primary">Add New Room</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Room Name</th>
                        <th class="border border-1">Beds</th>
                        <th class="border border-1">Action</th>
                    </tr>

                    @foreach ($rooms as $index => $room)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">{{ $room->name }}</td>
                            <td class="border border-1">
                                @foreach ($room->beds as $bed)
                                    <span
                                        class="badge {{ $bed->pivot->status == 'available' ? 'badge-success' : 'badge-danger' }}">{{ $bed->name }}
                                        {{ $bed->pivot->status }}</span>
                                @endforeach
                            </td>
                            <td><a href="{{ route('room.edit', $room->id) }}" class="btn btn-primary">Edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
