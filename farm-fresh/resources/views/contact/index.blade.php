@extends('layouts.app')

@section('content')
<div class="max-container py-4">
    <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-6 px-4">
            <div class="form h-100">
                <h3>Send us a message</h3>
                <form class="mb-5" method="post" id="contactForm" name="contactForm">
                    <div class="row">
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                        </div>
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Email *</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #">
                        </div>
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Company</label>
                            <input type="text" class="form-control" name="company" id="company" placeholder="Company  name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-5">
                            <label for="message" class="col-form-label">Message *</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
                <div id="form-message-warning mt-4"></div>
                <div id="form-message-success">
                    Your message was sent, thank you!
                </div>
            </div>
        </div>

    </div>
    @endsection