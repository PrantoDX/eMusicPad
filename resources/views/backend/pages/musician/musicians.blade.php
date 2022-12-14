@extends('backend.adminpanel')

@section('contents')
<h1>Musician List</h1>

{{-- <a href="{{route('musician.form')}}" class="btn btn-primary">
    Add Musician
</a> --}}
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Band</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
  @foreach($user as $key=>$data)
  <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->band}}</td>
      <td>
        <a href="{{ route('musician.delete',$data->id) }}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>



@endsection
