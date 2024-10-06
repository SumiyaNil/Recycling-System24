@extends('backend.master')
@section('content')
<style>
    .h1{
        font-size: large;

    }
</style>
<h1>This is the waste category Form</h1>
<div class="container">
    <form action="{{route('waste.category.store')}}" method="post">
        @csrf
    <label for="name">Waste Category Name</label>
    <input name="category_name" id="name" placeholder="Enter the waste category name">
    <!-- <label for="parent_category">Parent Category Name</label>
    <select name="parent_id" id="parent_category">
        <option value=""></option>
    </select> -->
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection