@extends('layouts/admin/app')

@section('content')
<div class="mx-auto container ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1 class="h1">Users</h1>
                </div>
                <div class="card-body">

                    <form method="get" action="/admin/users/">
                        <div class="btn-group">
                            @csrf
                            <input class="form-control w-96" type="search" name="search" placeholder="Search by id, name or email" value="{{ app('request')->input('search') }}" />
                            <button class="btn btn-success">Search</button>
                        </div>
                    </form>

                </div>
            </div>

            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light ">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="">
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
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination content-center">

                {!! $users->links('pagination::bootstrap-5') !!}

            </div>
        </div>
    </div>

</div>
</div>
</div>
@endsection