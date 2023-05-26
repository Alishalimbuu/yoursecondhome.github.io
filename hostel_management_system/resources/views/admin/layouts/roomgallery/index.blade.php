<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Room Gallery</h5>
                <a href="{{ route('roomgallery.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Images</th>
                        <th class="border border-1">Action</th>
                    </tr>
                    @foreach ($roomgallery as $index => $item)
                        <tr class="border border-1">
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1"><img src="{{ asset($item->image) }}" width="320"
                                    alt=""></td>
                            <td class="border border-1">
                                <form action="{{ route('roomgallery.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('roomgallery.edit', $item->id) }}"
                                        class="btn btn-primary mx-2">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
