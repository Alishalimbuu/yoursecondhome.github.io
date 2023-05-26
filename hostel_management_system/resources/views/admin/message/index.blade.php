<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Message from Outsiders</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Name</th>
                        <th class="border border-1 w-25">Email</th>
                        <th class="border border-1 w-75">Message</th>
                        <th class="border border-1">Action</th>
                    </tr>
                    @if (count($message) > 0)
                        @foreach ($message as $index => $item)
                            <tr>
                                <td class="border border-1">{{ ++$index }}</td>
                                <td class="border border-1">{{ $item->name }}</td>
                                <td class="border border-1">{{ $item->email }}</td>
                                <td class="border border-1">{{ $item->description }}</td>
                                <td class="border border-1">
                                    <form action="{{ route('message.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                        </td>
                            </tr>
                        @endforeach
                    @else
                        <span>No Message Available</span>
                    @endif
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
