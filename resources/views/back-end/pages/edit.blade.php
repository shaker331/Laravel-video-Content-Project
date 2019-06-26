@extends('back-end.layout.app')
@section('title')
Admin|Page|edit

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
Page Edit
@endslot
@endcomponent


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Page</h4>
                  <p class="card-category">Complete All Input</p>
                </div>
                <div class="card-body">
                  <form action="{{route('page.update',['Page'=>$pages->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$pages->name}}">
                          
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{$pages->desc}}">
                          
                          @error('desc')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Meta Keywords</label>
                          <input type="text" class="form-control @error('metakw') is-invalid @enderror" name="metakw" value="{{$pages->meta_keywords}}">
                          
                          @error('metakw')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Meta Description</label>
                          <input type="text" class="form-control @error('metades') is-invalid @enderror" name="metades" value="{{$pages->meta_des}}">
                          
                          @error('metades')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Page</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
@push('js')
    <script>
    
    </script>
@endpush