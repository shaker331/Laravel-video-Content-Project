@extends('back-end.layout.app')
@section('title')
Admin|
Messages|edit

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
Messages Edit
@endslot
@endcomponent


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Messages</h4>
                  <p class="card-category">Complete All Input</p>
                </div>
                <div class="card-body">
                  <form action="{{route('message.update',['message'=>$mess->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$mess->name}}">
                          
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">email</label>
                          <input type="email" class="form-control @error('desc') is-invalid @enderror" name="email" value="{{$mess->email}}">
                          
                          @error('desc')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Message</label>
                          <input type="text" class="form-control @error('message') is-invalid @enderror" name="message" value="{{$mess->message}}">
                          
                          @error('message')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Message</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Replay Messages</h4>
                </div>
                <div class="card-body">
                  <form action="{{route('replay',['id'=>$mess->id])}}" method="POST">
                    @csrf
                    <div class="row">
                     
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Message</label>
                          <input type="text" class="form-control @error('message') is-invalid @enderror" name="message" >
                          
                          @error('message')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Replay </button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
      </div>

@endsection
@push('js')
    <script>
    
    </script>
@endpush