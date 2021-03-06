@extends('layout')

@section('title', 'User ' .$user->name)

@section('content')
 <a type="button" class="btn btn-secondary mt-2" href="{{ route('users.index') }}">Back to Users</a>
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Id: {{ $user->id }}</li>
    <li class="list-group-item">Name: {{ $user->name }}</li>
    <li class="list-group-item">Email: {{ $user->email }}</li>
    <li class="list-group-item">Created: {{ $user->created_at->format('d/m/y h:i:s') }}</li>
    <li class="list-group-item">Updated: {{ $user->updated_at->format('d/m/y h:i:s') }}</li>
  </ul>
</div>

<form method = "POST" action="{{ route('users.destroy', $user) }}">
            <a type="button" class="btn btn-warning" href="{{ route('users.edit', $user) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type = "submit">Delete</button>
          </form> 


          
<!-- {{dd ($user) }} -->

@endsection