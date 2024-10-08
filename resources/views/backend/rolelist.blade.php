@extends('backend.master')
@section('content')

<style>
.h1{
    font-size: large;
    align-content: center;
}
</style>
<h1>This is Role list</h1>
<a type="submit" href="{{route('role.form')}}" class="btn btn-success">Create New user</a>
<table>
    <tr>
            <th>#</th>
    <th>Role  Name</th>
    <th>Role  status</th>
    <th>action</th>
</tr>
@foreach($role as $data)
    <tr>
        
         <td>{{$data->id}}</td>
         <td>{{$data->name}}</td>
         <td>{{$data->status}}</td>
        <td> <a href="{{route('role.assign.permission',$data->id)}}" class="btn btn-success">Assign permission</a></td>
        <td> <a href="{{route('role.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>
        
    </tr>
    @endforeach
</table>

@endsection