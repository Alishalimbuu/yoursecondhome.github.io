<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('facility.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('facility.update',$facility->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Facility Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name"
                                    placeholder="" value="{{ $facility->name }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Facility Description <span class="text-danger">*</span></label>
                                <textarea id="description" class="form-control summernote" name="description" rows="5">{{ $facility->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="icon">Upload Facility Icon <span class="text-danger">*</span></label>
                                <input id="icon" class="form-control-file" type="file" name="icon"
                                    placeholder="">
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset($facility->icon) }}" width="36" alt="">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
