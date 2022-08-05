@extends('layouts.app')

@section('content')
<div id="profile">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div class="container capitalization profile-menu">
                    <ul class="p-0">
                        <li>
                            <a href="/user-profile/{{$user->id}}/#address" class="my-2"><strong>Address</strong></a>
                        </li>
                        <li>
                            <a href="/user-profile/{{$user->id}}/#review" class="my-2"><strong>Reviews</strong></a>
                        </li>
                        <li>
                            <a href="/user-profile/{{$user->id}}/#order" class="my-2"><strong>Orders</strong></a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-md-9 welcome">
                <div class="title mb-3">{{ $title }} </div>

                <div class="col-md-12 my-2">
                    <div class="card product-item">
                        <div class="card-header">
                            <div class="sub-title m-0">Addresses</div>
                        </div>
                        <div id="profile-user-addresses" data-addresses="{{ $addresses?json_encode($addresses):json_encode([]) }}" data-old_inputs="{{ Session::getOldInput()?json_encode(Session::getOldInput()):json_encode([]) }}">
                            <form action="{{ route('user-profile-store-addresses', ['user'=>$user->id]) }}" method="POST" id="address_form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="address_id" :value="user_addresses[address_id].id" v-if="address_id && address_id !== 'add-new'" />
                                <div class="p-3">
                                    <div class="">
                                        <div class="radio-addresses">
                                            <div>
                                                <label for="address_options">Choose from existing addresses:</label>
                                                <div class="d-flex gap-1 mb-3">
                                                    <select name="address_options" id="address_options" class="form-select" v-model="address_id">
                                                        <option value="" disabled selected>Select address</option>
                                                        <option value="add-new" id="address-add-new">Add New</option>
                                                        @foreach ($addresses as $key => $address)
                                                        <option value="{{ $key }}" id="address-{{ $key }}">{{ $address->address }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="address_type" class="col-form-label">Address Name <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="address_name" id="address_type" v-model="address.address_type" />
                                                @error('address_name')
                                                <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="address" class="col-form-label">Address <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="address" id="address" v-model="address.address" />
                                                @error('address')
                                                <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="city" class="col-form-label">City <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="city" id="city" placeholder="Your City" v-model="address.city" />
                                                @error('city')
                                                <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="province" class="col-form-label">Province <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="province" id="province" placeholder="Your Province" v-model="address.province" />
                                                @error('province')
                                                <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="country" class="col-form-label">Country <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="country" id="country" placeholder="Your Country" v-model="address.country" />
                                                @error('country')
                                                <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="postal_code" class="col-form-label">Postal Code <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Your Postal Code" v-model="address.postal_code" />
                                                @error('postal_code')
                                                <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="phone" class="col-form-label">Phone <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your phone" v-model="address.phone" />
                                                @error('phone')
                                                <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="mt-2 form-group text-center">
                                            <button type="submit" class="btn">Update</button>
                                            <span class="submitting"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection