<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('gallery.create') }}" class="btn btn-primary">Add Gallery</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th class="border border-1" >SN</th>
                        <th class="border border-1">Title</th>
                        <th class="border border-1">Images</th>
                    </tr>
                    @foreach ($galleries as $index=>$item)
                    <tr class="border border-1">
                        <td class="border border-1">{{ ++$index }}</td>
                        <td class="border border-1">{{ $item->title }}</td>
                        <td class="border border-1"><img src="{{ asset($item->image) }}" width="320" alt=""></td>
                        <td class="border border-1">
                            <a href="{{ route('gallery.edit',$item->id) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
