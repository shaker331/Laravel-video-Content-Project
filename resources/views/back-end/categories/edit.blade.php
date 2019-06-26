@extends('back-end.layout.app')
@section('title')
Admin|category|edit

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
category Edit
@endslot
@endcomponent


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit category</h4>
                  <p class="card-category">Complete All Input</p>
                </div>
                <div class="card-body">
                  <form action="{{route('category.update',['category'=>$cats->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$cats->name}}">
                          
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Meta Keywords</label>
                          <input type="text" class="form-control @error('metakw') is-invalid @enderror" name="metakw" value="{{$cats->meta_keywords}}">
                          
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
                          <input type="text" class="form-control @error('metades') is-invalid @enderror" name="metades" value="{{$cats->meta_des}}">
                          
                          @error('metades')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Category</button>
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