<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Booking Info</h1>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Name</th>
                        <th class="border border-1">Contact</th>
                        <th class="border border-1">Email</th>
                        <th class="border border-1">Address</th>
                        <th class="border border-1">Room Name</th>
                        <th class="border border-1">Bed</th>
                        <th class="border border-1">Action</th>
                    </tr>

                    @foreach ($booking as $index=>$item)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">{{ $item->name }}</td>
                            <td class="border border-1">{{ $item->contact }}</td>
                            <td class="border border-1">{{ $item->email }}</td>
                            <td class="border border-1">{{ $item->address }}</td>
                            <td class="border border-1">{{ $item->room->name }}</td>
                            <td class="border border-1">{{ $item->bed->name }}</td>
                            <td class="border border-1">
                                <a href="{{ route('booking.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
