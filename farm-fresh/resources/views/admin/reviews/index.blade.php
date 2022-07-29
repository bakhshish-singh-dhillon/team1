@extends('layouts/admin/app')

@section('content')
<div class="mx-auto container ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1 class="h1">Reviews</h1>
                </div>
                <div class="card-body">
                    <span class="title ">{{$title}} ({{ count($reviews) }})</span>
                    <form method="get" action="/admin/reviews/">
                        <div class="btn-group">
                            @csrf
                            <input class="form-control w-96" type="search" name="search" placeholder="Search by id, name or rating" value="{{ app('request')->input('search') }}" />
                            <button class="btn btn-success">Search</button>
                        </div>
                    </form>

                </div>
            </div>

            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light ">
                    <tr>
                        <th>ID</th>
                        <th>Review</th>
                        <th>Rating</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="">
                    @if(count($reviews)==0)
                    <tr colspan="4">No results found!</tr>
                    @endif
                    @foreach ($reviews as $review)
                    <tr>
                        <td>{{ $review->id }}</td>
                        <td>{{ $review->review }}</td>
                        <td>{{ $review->rating }}</td>
                        <td>
                            <div class="btn-group">
                                @csrf
                                <input class="form-control w-96" type="search" name="search" placeholder="Search by id, name or rating" value="{{ app('request')->input('search') }}" />
                                <button class="btn btn-success">Search</button>
                            </div>
                            </form>

        </div>
    </div>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light ">
            <tr>
                <th>ID</th>
                <th>Review</th>
                <th>Rating</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="">
            @if (count($reviews) == 0)
            <tr colspan="4">No results found!</tr>
            @endif
            @foreach ($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->review }}</td>
                <td>{{ $review->rating }}</td>
                <td>
                    <div class="btn-group">
                        <form method="post" action="{{ route('review-delete', ['review' => $review->id]) }}">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $review->id }}" />
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination content-center">

        {!! $reviews->links('pagination::bootstrap-5') !!}

    </div>
</div>
</div>

</div>
@endsection