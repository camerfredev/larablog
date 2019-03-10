@extends('frontend.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 mx-auto">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('contact.send') }}" method="post" class="form-group">
                @csrf
                <div class="form-group">
                    <label for="inputname"> Name</label>
                    <input type="text" name="name" class="form-control"  value="{{ old('name') }}" placeholder="your name" id="inputname"/>
                </div>
                <div class="form-group">
                    <label for="inputemail">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}"  placeholder="your email" id="inputemail"/>
                </div>
                <div class="form-group">
                    <label for="inputmessage"> Message</label>
                    <textarea  name="content" class="form-control" placeholder="your message" rows="10" id="inputmessage"> {{ old('content') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary float-right">Send</button>

            </form>
        </div>
    </div>
</div>

@stop