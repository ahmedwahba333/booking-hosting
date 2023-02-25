@extends('dashboardOA.dashadmintemp')
@section('dashboardadmin')
    <form action="{{ route('store.service') }}" method="post" class="row g-3" enctype="multipart/form-data"
        style="width:50%;margin: 10%;padding: 10%;;border: 1px blue solid;">
        @csrf

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="font-weight: bold;">Name Service</label>
            <input type="text"name="name" class="form-control" id="exampleInputPassword1">

        </div>


        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
