@extends('frontend.layout',[   'title'=>"page post",
         'sub_title'=> 'je suis le sub-title de post'
    ])

@push('bg-img')
    {{asset('blog/img/post-bg.jpg')}}

@endpush
@section('content')
  <!-- Post Content -->
   <h1>ici on affiche tous les poste</h1>

<div class="container">
  <div class="row">
    <div class="card" >
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" >
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" >
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>


  </div>
</div>
@endsection