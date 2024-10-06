@extends('backend.master')
@section('content')
<style>
.h1{
    font-size: large;
    align-content: center;
}
</style>
<h1>This is waste category list</h1>
<a type="submit" href="{{route('waste.category.form')}}" class="btn btn-success">Create category</a>
<table>
    <tr>
            <th>#</th>
    <th>Waste Category Name</th>
</tr>
    <tr>
        @foreach($allcategory as $cat)
         <td>{{$cat->id}}</td>
         <td>{{$cat->category_name}}</td>
         @endforeach
    </tr>
</table>

@endsection