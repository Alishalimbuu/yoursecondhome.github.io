<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('bed.create') }}" class="btn btn-primary">Add Bed</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Bed Name</th>
                        <th class="border border-1">Action</th>
                    </tr>

                    @foreach ($beds as $index=>$item)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">{{ $item->name }}</td>
                            <td class="border border-1">
                                <a href="{{ route('bed.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
