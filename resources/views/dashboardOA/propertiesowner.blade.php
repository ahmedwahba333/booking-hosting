@extends('dashboardOA.dashownerTemp')
@section('dashboardowner')
    <h2>Properties</h2>

    <a href="{{ route('addprop') }}">

        <button style="margin:1%" class="btn btn-primary"> add Property </button>

    </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">country</th>
                <th scope="col">city</th>
                <th scope="col">street</th>
                <th scope="col">capacity</th>
                <th scope="col">price</th>
                <th scope="col">isavailable</th>
                <th scope="col">services</th>
                <th scope="col">image</th>
                <th scope="col">Actions</th>
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
                    <td> @foreach ( $property->services as $item )
                        {{ $item['name'] }} <br>
                    @endforeach
                   </td>



                    @if (isset($property->Propertyimg['0']))
                        <td><img src="storage/imgs/{{ $property->Propertyimg['0']['image'] }}" width="50 px"></td>
                    @endif
                    <td><a class="btn btn-danger" href="{{ route('delete', ['id' => $property['id']]) }}">delete </a>
                        <a class="btn btn-warning" href="{{ route('edit', ['id' => $property['id']]) }}">edit </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
