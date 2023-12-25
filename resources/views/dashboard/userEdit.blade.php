@extends('layouts.dashboard')

@section('main_body')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit User</h1>
    </div>

    <form action="/admin/users/edit/{{ $user->id }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="exampleFormControlInput1" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="exampleInputEmail1" placeholder="Email Address" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password" id="exampleInputPassword1">
        </div>
        <div class="input-group mb-3">
            <select class="form-select" name="user_type" id="inputGroupSelect02">
                <option selected>User Type</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
        </div>
        <button type="submit" class="px-5 btn btn-warning btn-lg">Post</button>
    </form>
@endsection
