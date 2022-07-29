@if (session()->has('success'))
<div class="alert alert-success error-message">
    <i class="fa-solid fa-circle-check mx-2"></i> {{ session('success') }}
    <i class="fa-solid fa-xmark float-right py-1 cursor-pointer close"></i>
</div>
@endif

@if (session()->has('warning'))
<div class="alert alert-warning error-message">
    <i class="fa-solid fa-triangle-exclamation mx-2"></i>{{ session('warning') }}
    <i class="fa-solid fa-xmark float-right py-1 cursor-pointer close"></i>
</div>
@endif

@if (session()->has('error'))
<div class="alert alert-danger error-message">
    <i class="fa-solid fa-circle-exclamation mx-2"></i> {{ session('error') }}
    <i class="fa-solid fa-xmark float-right py-1 cursor-pointer close"></i>
</div>
@endif