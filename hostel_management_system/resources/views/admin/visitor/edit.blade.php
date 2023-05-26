<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Edit Visitor</h5>
                <a href="{{ route('visitor.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('visitor.update', $visitor->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="full_name">Full Name <span class="text-danger">*</span></label>
                                <input id="full_name" class="form-control" type="text" name="name"
                                    value="{{ $visitor->name }}">
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                <input id="phone" class="form-control" type="number" name="phone"
                                    value="{{ $visitor->phone }}">
                            </div>
                        </div>
                     

                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Select Status</label>
                                <select id="status" class="form-select" name="status">
                                    <option value="checked_in"
                                        {{ 'checked_in' == $visitor->status ? 'selected' : '' }}>Checked In</option>
                                    <option value="checked_out"
                                        {{ 'checked_out' == $visitor->status ? 'selected' : '' }}>Checked Out</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
