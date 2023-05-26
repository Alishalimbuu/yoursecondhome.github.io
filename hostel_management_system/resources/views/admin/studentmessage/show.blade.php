<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Student Message</h5>
                <a href="{{ route('studentmessage.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <img src="{{ asset($studentmessage->user->photo) }}" width="120" class="rounded" alt=""> <br>

                <span class="fw-bold">Message From:</span> {{ $studentmessage->user->first_name }}
                {{ $studentmessage->user->last_name }} <br>

                <span class="fw-bold">Room:</span> {{ $studentmessage->user->room->name }}
                <br>
                <span class="fw-bold">Bed No:</span> {{ $studentmessage->user->bed->name }}
                <br>
                <p>{!! $studentmessage->description !!}</p>
                <div class="d-flex">
                    <form action="{{ route('studentmessage.update', $studentmessage->id) }}" method="post">
                        @csrf
                        @method('put')
                        <input type="text" name="status" value="declined" hidden>

                        <button type="submit" class="btn btn-danger btn-sm">Decline</button>
                    </form>

                    <form class="ms-2" action="{{ route('studentmessage.update', $studentmessage->id) }}"
                        method="post">
                        @csrf
                        @method('put')
                        <input type="text" name="status" value="approved" hidden>
                        <button type="submit" class="btn btn-success btn-sm">Approved</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
