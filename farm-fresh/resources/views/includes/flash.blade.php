@if (session()->has('success'))
<div class="alert alert-success error-message">

    <i class="fa-solid fa-circle-check mx-2"></i> {{ session('success') }}<span class="alertClose"><i class="fa-solid fa-xmark position-absolute top-0 end-0" aria-hidden="false"></i></span>
</div>
@endif
@if (session()->has('warning'))
<div class="alert alert-warning error-message">

    <i class="fa-solid fa-triangle-exclamation mx-2"></i>{{ session('warning') }}<span class="alertClose"><i class="fa-solid fa-xmark position-absolute top-0 end-0"></i></span>
</div>
@endif
@if (session()->has('error'))
<div class="alert alert-danger error-message">

    <i class="fa-solid fa-circle-exclamation mx-2"></i> {{ session('error') }} <span class="alertClose"><i class="fa-solid fa-xmark position-absolute top-0 end-0"></i></span>
</div>
@endif