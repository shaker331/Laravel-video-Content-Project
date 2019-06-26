@extends('back-end.layout.app')
@section('title')
Admin|video|create

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
video Control
@endslot
@endcomponent


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create video</h4>
                  <p class="card-category">Complete All Input</p>
                </div>
                <div class="card-body">
                  <form action="{{route('video.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                          
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
                          <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" name="meta_keywords">
                          
                          @error('meta_keywords')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Meta Description</label>
                          <input type="text" class="form-control @error('meta_des') is-invalid @enderror" name="meta_des">
                          
                          @error('meta_des')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Description</label>
                          <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc">
                          
                          @error('desc')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Youtube Link</label>
                          <input type="url" class="form-control @error('youtube') is-invalid @enderror" name="youtube">
                          
                          @error('youtube')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Video Status</label>
                          <select name="published" id="" class="form-control @error('published') is-invalid @enderror">

                            <option value="1">published</option>
                            <option value="0">hidden</option>

                          </select>
                          @error('published')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category </label>
                          <select name="category_id" id="" class="form-control @error('category') is-invalid @enderror">
                            @foreach ($cats as $cat)
                                
                            
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            
                            @endforeach
                          </select>
                          @error('category')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                     @php
                         $input="skills[]";
                     @endphp
                      <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Skills </label>
                            <select name="{{ $input}}" id="" class="form-control @error('skill') is-invalid @enderror" multiple style="height:100px">
                              @foreach ($skills as $skill)
                                  
                              
                              <option value="{{$skill->id}}">{{$skill->name}}</option>
                              
                              @endforeach
                            </select>
                            @error('skill')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                        </div>
                        
                     @php
                     $input="tags[]";
                 @endphp
                  <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Tags </label>
                        <select name="{{ $input}}" id="" class="form-control @error('tag') is-invalid @enderror" multiple style="height:100px">
                          @foreach ($tags as $tag)
                              
                          
                          <option value="{{$tag->id}}">{{$tag->name}}</option>
                          
                          @endforeach
                        </select>
                        @error('tag')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                    </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Photo</label>
                          <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" style=" opacity: 0; position: initial ">
                          
                          @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add Video</button>
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