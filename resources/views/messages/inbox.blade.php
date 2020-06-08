@extends('layout.app')

@section('content')
    
<div class="container mt-5">
    
    
    <form action="{{route('messages.store')}}" class="form-class"  method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6 mt-5">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}"  placeholder="Your name" >
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-sm-6 mt-5">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}"  placeholder="Your email" data-msg="Please enter a valid email">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-sm-12 mt-5">
                <input type="text" name="object" class="form-control @error('object') is-invalid @enderror" value="{{old('object')}}"  placeholder="object">
                @error('object')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-sm-12 mt-5">

                <textarea name="message" class="form-control @error('message') is-invalid @enderror"  placeholder="Message">{{old('message')}}</textarea>
                @error('message')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <button class="btn btn-primary mt-5">Submit</button>
            </div>
        </div>
    </form>


</div>
@endsection