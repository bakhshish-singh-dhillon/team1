@extends('layouts/admin/app')

@section('content')
    <div class="d-flex justify-content-between mb-2 my-3">
        <div class="title black-text">{{ $title }} ({{ $reviews->total() }})</div>

        <div class="d-flex justify-content-between mb-2">
            <!-- Button trigger modal -->
            <div>
                <form method="get" action="/admin/reviews/">
                    <div class="btn-group mx-2">
                        @csrf
                        <input class="form-control search-bar" type="search" name="search"
                            placeholder="Search by id, name or rating" value="{{ app('request')->input('search') }}" />
                        <button class="btn btn-success"><i class="fas fa-search"></i></button>
                    </div>
                </form>

            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal"
                data-bs-whatever="Create"><i class="fa-solid fa-plus mx-1"></i>Create</button>
        </div>
    </div>
    <div class="card">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light ">
                <tr>
                    <th>#</th>
                    <th>Review</th>
                    <th>Rating</th>
                    <th class="w100">Action</th>
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
                            <div class="btn-group" id="review-button">
                                <form method="post"><button class="btn btn-success">Approved</button></form>
                                <form method="post" action="{{ route('review-delete', ['review' => $review->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $review->id }}" />
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this post?')">Decline</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="pagination justify-content-center py-2">

        {!! $reviews->links('pagination::bootstrap-5') !!}

    </div>
@endsection
