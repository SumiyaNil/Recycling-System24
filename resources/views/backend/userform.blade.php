@extends('backend.master')
@section('content')
<style>
    .h1{
        font-size: large;

    }
</style>
<h1>This is the user form</h1>
<div class="container">
    <form action="{{route('user.store')}}" method="post">
        @csrf
    <label for="name">User Name</label>
    <input name="name" id="name" placeholder="Enter the User name">
    <label for="email">User email</label>
    <input name="email" id="email" placeholder="Enter the User email">
    <label for="password">User password</label>
    <input name="password" id="password" placeholder="Enter the User password">
    <div class="form-group">
                            <label for="exampleFormControlInput1"><strong>Role</strong></label>
                            <select name="role_id" id="" class="form-control">
                                <option value="">--Select Option--</option>
                                @foreach ($role as $data)
                                    <option value="{{ $data->id }}">{{ $data->status }}</option>
                                @endforeach
                            </select>
                        </div><br>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection