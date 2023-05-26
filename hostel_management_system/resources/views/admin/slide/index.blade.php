<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('slide.create') }}" class="btn btn-primary">Add Slide</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Images</th>
                    </tr>
                    @foreach ($slides as $index=>$item)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $item->title }}</td>
                        <td><img src="{{ asset($item->image) }}" width="320" alt=""></td>
                        <td>
                            <a href="{{ route('slide.edit',$item->id) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
