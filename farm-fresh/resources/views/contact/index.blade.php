@extends('layouts.app')

@section('content')
<div class="max-container py-4 my-4">
    <div class="row align-items-stretch no-gutters contact-wrap normal-shadow">
        <div class="col-md-8 px-4 py-4">
            <div>
                <h3>Send us a message</h3>
                <form action="/contact" method="post" id="contactForm" name="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                            @error('name')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">Email *</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                            @error('email')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #">
                            @error('phone')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">How can we help you?</label></br>
                            <!--<input type="text" class="form-control" name="company" id="company" placeholder="Company  name"> -->
                            <select class="form-select" id="category" name="category" required="required">
                                <option value="" selected disabled>Select below *</option>
                                <option value="refund">Refund</option>
                                <option value="order_status">Order Status</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                            @error('category')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="message" class="col-form-label">Message *</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                            @error('message')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group ">
                            <input type="submit" value="Send Message" class="btn bg-green text-white rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 px-0">
            <div class="contact-info h-100 px-4 bg-green text-white py-4">
                <h3>Contact Information</h3>
                <p class="mb-5">Farm-Fresh International ltd.</p>
                <ul class="list-unstyled">
                    <li class="d-flex">
                        <i class="fa-solid fa-location-dot px-3 py-1"></i>
                        <span class="text">460 Portage Ave, Winnipeg, MB R3C 0E8</span>
                    </li>
                    <li class="d-flex">
                        <i class="fa-solid fa-phone px-3 py-1"></i> <span class="text">+1 (204) 123 1234</span>
                    </li>
                    <li class="d-flex">
                        <i class="fa-solid fa-envelope px-3 py-1"></i> <span class="text">ecom.farmfresh@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection