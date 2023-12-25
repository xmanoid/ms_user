@extends('layouts.dashboard')

@section('main_body')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
    </div>

    <button type="button" class="btn btn-warning"><a class="link-dark"
            href="/admin/users/add/"><span data-feather="plus"></span></a></button>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $num = 0;
            @endphp
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $num = $num + 1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td><a class="link-dark btn btn-warning" href="/admin/users/edit/{{ $user->id }}"><span data-feather="edit"></span></a>
                        <a class="link-dark btn btn-danger" href="/admin/users/delete/{{ $user->id }}"><span data-feather="delete"></span></a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
@endsection
