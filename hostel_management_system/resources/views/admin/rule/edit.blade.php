<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('rule.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('rule.update',$rule->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        {{-- <div class="col-md-12">
                            <div class="form-group">
                                <label for="point">Add Rules<span class="text-danger">*</span></label>
                                <textarea id="point" class="form-control summernote" name="point" rows="5">{{ $rule->point }}</textarea>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="point">Add Rules <span class="text-danger">*</span></label>
                                <input id="point" class="form-control" type="text" name="point" value="{{ $rule->point }}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
