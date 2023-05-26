<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('service.create') }}" class="btn btn-primary">Add Service</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Service Name</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>

                    @foreach ($services as $index=>$item)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{!! $item->description !!}</td>
                            <td><img src="{{ asset($item->image) }}" width="320" alt=""></td>
                            <td>
                                <a href="{{ route('service.edit',$item->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
