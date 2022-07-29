@extends('layouts/admin/app')

@section('content')

<div class="d-flex justify-content-between mb-2 my-3">
    <div class="title black-text">{{$title}} ({{ count($users) }})</div>

    <div class="d-flex">
        <form method="get" action="/admin/users/">
            <div class="btn-group mb-2 float-right">
                @csrf
                <input class="form-control search-bar" type="search" name="search" placeholder="Search by id, name or email" value="{{ app('request')->input('search') }}" />
                <button class="btn btn-success"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light ">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="">
                @if(count($users)==0)
                <tr>
                    <td colspan="5" class="text-center">No results found!</td>
                </tr>
                @endif
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="btn-group">
                            <form method="post" action="{{ route('user-delete', ['user' => $user->id]) }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $user->id }}" />
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination justify-content-center py-2">

            {!! $users->links('pagination::bootstrap-5') !!}

        </div>
    </div>
</div>

@endsection