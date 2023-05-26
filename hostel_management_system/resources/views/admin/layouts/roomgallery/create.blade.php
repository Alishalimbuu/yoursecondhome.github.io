<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Add Room Gallery</h5>
                <a href="{{ route('roomgallery.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
            </div>
            <div class="card-body">
                                <form action="{{ route('roomgallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Upload Image <span class="text-danger">*</span></label>
                                <input id="image" class="form-control-file" type="file" name="image"
                                    placeholder="">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-admin-layout>
