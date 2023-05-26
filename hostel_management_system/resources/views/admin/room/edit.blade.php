<x-admin-layout>
    <div class="container">

        <div class="card">
            <div class="card-header">
                <a href="{{ route('room.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('room.update',$room->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Room Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $room->name }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price">Room Price <span class="text-danger">*</span></label>
                                <input id="price" class="form-control" type="text" name="price" value="{{ $room->price }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bed_id">Choose Bed</label>
                                <select id="bed_id" class="form-select select2" name="bed_id[]" multiple >
                                    @foreach ($beds as $item)
                                    <option value="{{ $item->id }}" @foreach ($room->beds as $bed)
                                        {{ $item->id == $bed->id ? 'selected' : '' }}
                                    @endforeach>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Service Description <span class="text-danger">*</span></label>
                                <textarea id="description" class="form-control summernote" name="description" rows="5">{{ $room->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Upload Room Image <span class="text-danger">*</span></label>
                                <input id="image" class="form-control-file" type="file" name="image"
                                    placeholder="">
                            </div>
                        </div>
                        <div>
                            <h5>Previous Image</h5>
                            <img src="{{ asset($room->image) }}" width="360" alt="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
