<x-admin-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3>About Hostel Message</h3>
                        @if (empty($abouthostel))
                       <a href="{{ route('abouthostel.create') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i> Add</a>
                       @endif
                    </div>

                    <div class="card-body">
                        @if (!empty($abouthostel))
                        <h1>{{ $abouthostel->name }}</h1>
                        <img src="{{ asset($abouthostel->image) }}" class="img-fluid " width="250px" alt="">
                        {!! $abouthostel->description !!}
                        <form action="{{ route('abouthostel.destroy', $abouthostel->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('abouthostel.edit', $abouthostel->id) }}"
                                class="btn btn-primary mx-2">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        @else
                            <span>No Content Available</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>