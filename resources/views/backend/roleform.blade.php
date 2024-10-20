@extends('backend.master')
@section('content')
<style>
    .h1{
        font-size: large;

    }
</style>
<h1>This is the role form</h1>
<div class="container">
    <form action="{{route('role.store')}}" method="post">
        @csrf
    <label for="name">role Name</label>
    <input name="name" id="name" placeholder="Enter the role name">
    <label for="email">role status</label>
    <input name="status" id="email" placeholder="Enter the role status">
    
    

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection