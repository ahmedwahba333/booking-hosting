@extends('dashboardOA.dashadmintemp')
@section('dashboardadmin')
    <h2>Customer</h2>

    <a href="{{ url('adduser') }}">
        <button class="btn btn-primary">ADD Users</button></a>

    <table class="table table-striped" style="margin: 10px;">


        <thead>
            <tr>

                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">nid</th>
                <th scope="col">email</th>
                <th scope="col">role</th>
                <th scope="col">gender</th>
                <th scope="col">phone</th>
                <th scope="col">birthdate</th>


                <th scope="col">delete</th>


            </tr>
        </thead>

        <tbody>
            <tr>
                @foreach ($Users as $XX)
                    <td>{{ $XX['name'] }}</td>
                    <td>{{ $XX['lastname'] }}</td>
                    <td>{{ $XX['nid'] }}</td>
                    <td>{{ $XX['email'] }}</td>
                    <td>{{ $XX['role'] }}</td>
                    <td>{{ $XX['gender'] }}</td>
                    <td>{{ $XX['phone'] }}</td>
                    <td>{{ $XX['birthdate'] }}</td>

                    <td> <a class="btn btn-danger" href="{{ route('ddelete', ['id' => $XX['id']]) }}">delete</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
