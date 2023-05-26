<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Edit Student Leave</h5>
                <a href="{{ route('leave.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('leave.update', $leave->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Full Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name"
                                    value="{{ $leave->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="from">From</label>
                                <input id="from" class="form-control" type="date" name="from"
                                    value="{{ $leave->from }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="upto">Upto</label>
                                <input id="upto" class="form-control" type="date" name="upto"
                                    value="{{ $leave->upto }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Select Status</label>
                                <select id="status" class="form-select" name="status">
                                    <option value="checked_in"
                                        {{ 'checked_in' == $leave->status ? 'selected' : '' }}>Checked In</option>
                                    <option value="checked_out"
                                        {{ 'checked_out' == $leave->status ? 'selected' : '' }}>Checked Out</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="reason">Reason for Leave <span class="text-danger">*</span></label>
                                <textarea id="reason" class="form-control summernote" name="reason" rows="5">{{$leave->reason}}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
