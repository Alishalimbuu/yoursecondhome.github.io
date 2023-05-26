<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('service.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Service Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Service Description <span class="text-danger">*</span></label>
                                <textarea id="description" class="form-control summernote" name="description" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Upload Service Image <span class="text-danger">*</span></label>
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
</x-admin-layout>
