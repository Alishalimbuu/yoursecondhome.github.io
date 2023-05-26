<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('meal.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('meal.update', $meal->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="breakfast">Breakfast <span class="text-danger">*</span></label>
                                <input id="breakfast" class="form-control" type="text" name="breakfast"
                                    value="{{ $meal->breakfast }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lunch">Lunch <span class="text-danger">*</span></label>
                                <input id="lunch" class="form-control" type="text" name="lunch"
                                    value="{{ $meal->lunch }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tiffin">Tiffin <span class="text-danger">*</span></label>
                                <input id="tiffin" class="form-control" type="text" name="tiffin"
                                    value="{{ $meal->tiffin }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dinner">Dinner <span class="text-danger">*</span></label>
                                <input id="dinner" class="form-control" type="text" name="dinner"
                                    value="{{ $meal->dinner }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="my-select">Meal Day</label>
                                <select id="my-select" class="form-select" name="day">
                                    <option>{{ $meal->day }}</option>
                                    <option>Sunday</option>
                                    <option>Monday</option>
                                    <option>Tuesday</option>
                                    <option>Wednesday</option>
                                    <option>Thursday</option>
                                    <option>Friday</option>
                                    <option>Saturday</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control summernote" name="description" rows="5">{{ $meal->description }}</textarea>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
