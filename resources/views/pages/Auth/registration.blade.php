@extends('layouts.app')

@section('title', 'Registration Page')

@section('content')
<div class="container">
    <form>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
         </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
</div>
@endsection
