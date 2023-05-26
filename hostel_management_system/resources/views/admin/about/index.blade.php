<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('about.create') }}" class="btn btn-primary">Add About</a>
            </div>
            {{-- <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>About Title</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>

                    @foreach ($abouts as $index => $item)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td><img src="{{ asset($item->image) }}" width="320" alt=""></td>
                            <td>
                                <a href="{{ route('about.edit',$item->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div> --}}
            <div class="row p-5">
                @foreach ($abouts as $index => $item)
                    <div class="col-md-4">
                        <div class="card">
                            <div></div>
                            <div class="card-body">
                                <h5>{{ $item->title }}</h5>
                                 <div>
                                    {!! Str::words($item->description, 40, '...') !!}
                                 </div>
                                <a href="{{ route('about.edit', $item->id) }}" class="badge bg-primary text-decoration-none">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-admin-layout>
