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
                <th scope="col">action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ $item['country'] }}</th>
                    <td>{{ $item['city'] }}</td>
                    <td>{{ $item['street'] }}</td>
                    <td>{{ $item['capacity'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['isavailable'] }}</td>
                    <td style="display: flex;">
                        <form action="{{ route('updateAcceptadmin', ['items' => $item['id']]) }}"
                            method="post">
                            @csrf
                            <input type="text" name='isavailable' value='yes' hidden>
                            <input type="submit" class="btn btn-success m-2"  value="Accept">
                        </form>


                        <form action="{{ route('updateRejectadmin', ['items' => $item['id']]) }}"
                            method="post">
                            @csrf
                            <input type="text" name='isavailable' value="no" hidden>
                            <input type="submit" class="btn btn-warning m-2" value="Reject">
                        </form>

                        <form action="{{ route('updateDeleteadmin', ['items' => $item['id']]) }}"
                            method="post">
                            @csrf
                            <input type="submit" class="btn btn-danger m-2" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
