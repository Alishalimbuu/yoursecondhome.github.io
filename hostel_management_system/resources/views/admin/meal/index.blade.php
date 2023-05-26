<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('meal.create') }}" class="btn btn-primary">Add Meal</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th class="border border-1">Day/Meal</th>
                        <th class="border border-1">Breakfast</th>
                        <th class="border border-1">Lunch</th>
                        <th class="border border-1">Tiffin</th>
                        <th class="border border-1">Dinner</th>
                        <th class="border border-1">Action</th>
                    </tr>

                    @foreach ($meals as $index=>$item)
                        <tr>
                            <th class="border border-1">{{ $item->day }}</th>
                            <td class="border border-1">{{ $item->breakfast }}</td>
                            <td class="border border-1">{{ $item->lunch }}</td>
                            <td class="border border-1">{{ $item->tiffin }}</td>
                            <td class="border border-1">{{ $item->dinner }}</td>
                            <td class="border border-1">
                                <a href="{{ route('meal.edit',$item->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
