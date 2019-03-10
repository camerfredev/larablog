@if(session()->has('success'))
<div class="row">
    <div class="col-12 col-sm-6 mx-auto">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
</div>
   
@endif