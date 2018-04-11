@extends('layouts.admin')

@section('content')

<h2>Users</h2>

<table class="table">
	<thead>
	  <tr>
	    <th>Id</th>
	    <th>Photo</th>
	    <th>Name</th>
	    <th>Email</th>
	    <th>Role</th>
	    <th>Status</th>
	    <th>Created</th>
	    <th>Updated</th>
	  </tr>
	</thead>

  @foreach($users as $user)

  <tr>
    <td>{{$user->id}}</td>
    <td><img height=50 src="{{$user->photo ? $user->photo->file : 'http://cdn.iseated.com/assets/img/nopicture.jpg'}}"></td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->role->name}}</td>
    <td>{{$user->is_active == 1 ? "Active" :"Not Active"}}
    <td>{{$user->created_at->diffForHumans()}}</td>
  	<td>{{$user->updated_at->diffForHumans()}}</td>
  </tr>

  	@endforeach
  
</table>



@stop