@extends('dashboardOA.dashadmintemp')
@section('dashboardadmin')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">country</th>
                <th scope="col">city</th>
                <th scope="col">street</th>
                <th scope="col">capacity</th>
                <th scope="col">price</th>
                <th scope="col">isavailable</th>
                <th scope="col">image</th>

            </tr>
        </thead>

        <tbody>

            @foreach ($properties as $property)
                <tr>

                    <td>{{ $property['country'] }}</td>
                    <td>{{ $property['city'] }}</td>
                    <td>{{ $property['street'] }}</td>
                    <td>{{ $property['capacity'] }}</td>
                    <td>{{ $property['price'] }}</td>
                    <td>{{ $property['isavailable'] }}</td>



                    @if (isset($property->Propertyimg['0']))
                        <td><img src="storage/imgs/{{ $property->Propertyimg['0']['image'] }}" width="50 px"></td>
                    @endif
                    {{-- <td><a href="{{ route('delete', ['id' => $property['id']]) }}">delete </a>
                    <a href="{{ route('edit', ['id' => $property['id']]) }}">edit </a>
                </td> --}}
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
