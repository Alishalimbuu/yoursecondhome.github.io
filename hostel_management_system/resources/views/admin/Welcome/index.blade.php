<x-admin-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3>Welcome Message</h3>
                        @if (empty($welcome))
                       <a href="{{ route('welcome.create') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i> Add</a>
                       @endif
                    </div>

                    <div class="card-body">
                        @if (!empty($welcome))
                        <h1>{{ $welcome->name }}</h1>
                        <img src="{{ asset($welcome->image) }}" class="img-fluid " width="250px" alt="">
                        {!! $welcome->description !!}
                        <form action="{{ route('welcome.destroy', $welcome->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('welcome.edit', $welcome->id) }}"
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