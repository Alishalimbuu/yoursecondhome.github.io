<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Edit Student</h5>
                <a href="{{ route('student.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('student.update', $student->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name <span class="text-danger">*</span></label>
                                <input id="first_name" class="form-control" type="text" name="first_name"
                                    value="{{ $student->first_name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                <input id="last_name" class="form-control" type="text" name="last_name"
                                    value="{{ $student->last_name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <input id="address" class="form-control" type="text" name="address"
                                    value="{{ $student->address }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Contact Number <span class="text-danger">*</span></label>
                                <input id="phone" class="form-control" type="number" name="contact"
                                    value="{{ $student->contact }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input id="email" class="form-control" type="email" name="email"
                                    value="{{ $student->email }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="parent">Parent Contact No </label>
                                <input id="parent" class="form-control" type="text" name="parent" placeholder=""
                                    value="{{ $student->dob }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="room_id">Select Room</label>
                                <select id="room_id" class="form-select" name="room_id">
                                    @foreach ($rooms as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $student->room_id ? 'selected' : '' }}>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bed_id">Select Bed</label>
                                <select id="bed_id" class="form-select" name="bed_id">
                                    @foreach ($beds as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $student->bed_id ? 'selected' : '' }}>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="photo">Update Student Image(nullable)</label>
                                <input id="photo" class="form-control-file" type="file" name="photo"
                                    placeholder="">
                            </div>
                            <div>
                                <img src="{{ asset($student->photo) }}" width="220" alt="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Select Status</label>
                                <select id="status" class="form-select" name="status">
                                    <option value="checked-in"
                                        {{ 'checked-in' == $student->status ? 'selected' : '' }}>Checked In</option>
                                    <option value="checked-out"
                                        {{ 'checked-out' == $student->status ? 'selected' : '' }}>Checked Out</option>
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
