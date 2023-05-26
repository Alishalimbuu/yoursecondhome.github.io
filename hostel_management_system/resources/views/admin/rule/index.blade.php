<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('rule.create') }}" class="btn btn-primary">Add Rules</a>
            </div>
            <div class="card-body">
                <h3 class="text-center">Rules & Regulation</h3>
                <div class="row py-5">
                    
                    @foreach ($rule as $index => $item)
                        <div class="col-md-12">
                            <ul>
                            <li>{!! $item->point !!}</li>
                            </ul>
                            <a href="{{ route('rule.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</x-admin-layout>
