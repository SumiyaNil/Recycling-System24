@extends('backend.master')
@section('content')

<style>
.h1{
    font-size: large;
    align-content: center;
}
</style>
<h1>This is User list</h1>
<a type="submit" href="{{route('user.form')}}" class="btn btn-success">Create New user</a>
<table>
    <tr>
            <th>#</th>
    <th scope="row">User  Name</th>
    <th scope="row">User  email</th>
    <th scope="row">Role</th>
</tr>
@foreach($user as $data)
    <tr>
        
         <td>{{$data->id}}</td>
         <td>{{$data->name}}</td>
         <td>{{$data->email}}</td>
         <td>{{$data->role->status}}</td>
         
    </tr>
    @endforeach
</table>

@endsection