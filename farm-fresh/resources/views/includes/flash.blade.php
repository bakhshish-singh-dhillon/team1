@if (session()->has('success'))
<div class="alert alert-success error-message">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <i class="fa-solid fa-circle-check mx-2"></i> {{ session('success') }}<span><i class="fa-solid fa-xmark position-absolute top-0 end-0"></i></span>
</div>
@endif
@if (session()->has('warning'))
<div class="alert alert-warning error-message">

    <i class="fa-solid fa-triangle-exclamation mx-2"></i>{{ session('warning') }}<span><i class="fa-solid fa-xmark position-absolute top-0 end-0"></i></span>
</div>
@endif
@if (session()->has('error'))
<div class="alert alert-danger error-message">

    <i class="fa-solid fa-circle-exclamation mx-2"></i> {{ session('error') }} <span><i class="fa-solid fa-xmark position-absolute top-0 end-0"></i></span>
</div>
@endif