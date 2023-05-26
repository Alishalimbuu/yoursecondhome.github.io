<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('rule.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('rule.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="point">Add Rules <span class="text-danger">*</span></label>
                                <input id="point" class="form-control" type="text" name="point">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
