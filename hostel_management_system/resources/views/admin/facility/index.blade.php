<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('facility.create') }}" class="btn btn-primary">Add Facility</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Facility Name</th>
                        <th class="border border-1">Description</th>
                        <th class="border border-1">Icon</th>
                    </tr>

                    @foreach ($facilities as $index=>$item)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">{{ $item->name }}</td>
                            <td class="border border-1">{{ $item->description }}</td>
                            <td class="border border-1"><img src="{{ asset($item->icon) }}" width="56" alt=""></td>
                            <td class="border border-1">
                                <a href="{{ route('facility.edit',$item->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
