@extends('layouts.app')

@section('content')
<div id="profile">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div class="container capitalization profile-menu">
                    <ul class="p-0">
                        <li>
                            <a href="#address" class="my-2" data-bs-toggle="collapse"><strong>Address</strong></a>
                        </li>
                        <li>
                            <a href="#review" class="my-2" data-bs-toggle="collapse"><strong>Reviews</strong></a>
                        </li>
                        <li>
                            <a href="#order" class="my-2" data-bs-toggle="collapse"><strong>Orders</strong></a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-md-9 welcome">
                <div class="title mb-3">{{ $title }} </div>
                <div>
                    <form method="POST" action="{{ route('user-detail-update', ['user' => $user->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" disabled class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-start">{{ __('First name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" required autofocus>

                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-start">{{ __('Last name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required>

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= null != $user->is_subscribed ? 'checked' : ' ' ?> id="is_subscribed" name="is_subscribed">
                                    <label class="form-check-label" for="is_subscribed">
                                        Subscribed to Newsletter
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0 " style="display: none;" id="update_user">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark bg-green  border border-none text-gray ">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 my-2 ">
                    <div class="card product-item">
                        <div class="card-header">
                            <div class="sub-title m-0">Address</div>
                        </div>
                        <div id="address" class="collapse">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($addresses) == 0)
                                        <tr>
                                            <td colspan="4">You have not reviewed anything yet!</td>
                                        </tr>
                                        @else
                                        @foreach ($addresses as $address)
                                        <tr>
                                            <td>{{ $address->address_type }} address</td>
                                            <td>{{ $address->address }},
                                                {{ $address->city }},
                                                {{ $address->province }}
                                                {{ $address->postal_code }},
                                                {{ $address->country }}
                                            </td>
                                            <td>{{ $address->phone }}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <a href="{{ route('user-profile-addresses', ['user' => $user->id]) }}" class="my-2 btn"><strong>Add / Update Addresses</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 my-2">
                    <div class="card product-item">
                        <div class="card-header">
                            <div class="sub-title m-0">Reviews</div>
                        </div>
                        <div id="review" class="collapse">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Review</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($reviews) == 0)
                                        <tr>
                                            <td colspan="4">You have not reviewed anything yet!</td>
                                        </tr>
                                        @else
                                        @foreach ($reviews as $review)
                                        <tr>
                                            <td>{{ $review->created_at }}</td>
                                            <td>{{ $review->review }}</td>
                                            <td>{{ $review->rating }}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 my-2">
                    <div class="card product-item">
                        <div class="card-header">
                            <div class="sub-title m-0">Orders</div>
                        </div>
                        <div id="order" class="collapse">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($orders) == 0)
                                        <tr>
                                            <td colspan="4">You have not purchased anything yet!</td>
                                        </tr>
                                        @else
                                        @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->created_at }}</td>
                                            <td>$ {{ $order->total }}</td>
                                            <td>{{ $order->order_status }}</td>
                                            <td><a href="/user-order/{{ $order->id }}" class="btn">View</a> </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection