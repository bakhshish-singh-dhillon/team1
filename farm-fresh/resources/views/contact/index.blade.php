@extends('layouts.app')

@section('content')
<div class="max-container py-4 my-4">
    <div class="row align-items-stretch no-gutters contact-wrap normal-shadow">
        <div class="col-md-8 px-4 py-4">
            <div class="form h-100">
                <h3>Send us a message</h3>
                <form class="mb-5" action="/contact" method="post" id="contactForm" name="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">Email *</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #">
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
                        </div>

                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="message" class="col-form-label">Message *</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group ">
                            <input type="submit" value="Send Message" class="btn bg-green text-white rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
                <!-- <div id="form-message-warning mt-4"></div>
                <div id="form-message-success">
                    Your message was sent, thank you!
                </div> -->
            </div>
        </div>
        <div class="col-md-4 px-0">
            <div class="contact-info h-100 px-4 bg-green text-white py-4">
                <h3>Contact Information</h3>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, magnam!</p>
                <ul class="list-unstyled">
                    <li class="d-flex">
                        <span class="wrap-icon icon-room mr-3"></span>
                        <span class="text">9757 Aspen Lane South Richmond Hill, NY 11419</span>
                    </li>
                    <li class="d-flex">
                        <span class="wrap-icon icon-phone mr-3"></span>
                        <span class="text">+1 (291) 939 9321</span>
                    </li>
                    <li class="d-flex">
                        <span class="wrap-icon icon-envelope mr-3"></span>
                        <span class="text"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="355c5b535a75584c425057465c41501b565a58">[email&#160;protected]</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection