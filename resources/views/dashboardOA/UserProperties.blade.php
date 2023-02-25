@extends('dashboardOA.dashownerTemp')
@section('dashboardowner')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">National ID</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">full address of the Property</th>
                <th scope="col">Capacity</th>
                <th scope="col">Phone Number</th>
                <th scope="col">start date</th>
                <th scope="col">end date</th>
                <th scope="col">Bio</th>
                <th scope="col">created at</th>
                <th scope="col">status</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    {{-- @if ($item['userstatus'] == 'accepted')
                        {{ $item->User->email }}
                        {{ $item->User->phone }}

                        {{ $item->Property->capacity }}
                    @endif --}}
                    <td>{{ $item->User->name }}</td>
                    <td>{{ $item->User->nid }}</td>
                    <td>{{ $item->User->birthdate }}</td>
                    <td>{{ $item->User->email }}</td>
                    <td>{{ $item->User->gender }}</td>
                    <td>{{ $item->Property->country }},{{ $item->Property->city }},{{ $item->Property->street }}</td>
                    <td>{{ $item->Property->capacity }}</td>

                    <td>{{ $item->User->phone }}</td>



                    <td>{{ $item['startdate'] }}</td>
                    <td>{{ $item['enddate'] }}</td>
                    <td>{{ $item['description'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                    <td>{{ $item['userstatus'] }}</td>
                    <td>
                        <form action="{{ route('updateAccept', ['items' => $item['id']]) }}" method="post">
                            @csrf

                            <input type="text" name='userstatus' value="accepted" hidden>
                            <input type="submit" class="btn btn-success" value="accept" style="width:100%;">
                        </form>


                        <form action="{{ route('updateReject', ['items' => $item['id']]) }}" method="post">
                            @csrf
                            <input type="text" name='userstatus' value="rejected" hidden>
                            <input type="submit" class="btn btn-warning" value="reject" style="width:100%;">
                        </form>

                        {{--
                        <a class="btn-danger" href="{{ route('accept', ['id' => $item['id']]) }}"
                                style="text-decoration: none; color:white;">accept</a>
                            <a class="btn-success" href="{{ route('reject', ['id' => $item['id']]) }}"
                                style="text-decoration: none; color:white;">reject</a> --}}
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
@endsection
