@extends('dashboardOA.dashadmintemp')
@section('dashboardadmin')
    <a href="addform" class=" btn btn-primary" style="margin:1%;">add service</a>
    {{-- <a href="dashboardAdmin" class=" btn btn-dark"style="margin:1%;">dashboard Admin</a> --}}
    <table class="table table-striped">
        <thead>
            <tr>

                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($service as $i)
                <tr>

                    <th scope="row">{{ $i['name'] }}</th>
                    <td><a class="btn btn-danger" href="{{ route('delete.service', ['id' => $i['id']]) }}">delete </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
