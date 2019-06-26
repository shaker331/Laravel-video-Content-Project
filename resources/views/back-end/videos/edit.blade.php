@extends('back-end.layout.app')
@section('title')
Admin|video|Edit

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
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit video</h4>
                  <p class="card-category">Complete All Input</p>
                </div>
                <div class="card-body">
                  <form action="{{route('video.update',['video'=>$videos])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$videos->name}}">
                          
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
                          <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" name="meta_keywords" value="{{$videos->meta_keywords}}">
                          
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
                          <input type="text" class="form-control @error('meta_des') is-invalid @enderror" name="meta_des" value="{{$videos->meta_des}}">
                          
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
                          <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{$videos->desc}}">
                          
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
                          <input type="url" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{$videos->youtube}}">
                          
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
                      @php
                      $input="skills[]";
                  @endphp
                   <div class="col-md-4">
                       <div class="form-group">
                         <label class="bmd-label-floating">skills </label>
                         <select name="{{ $input}}" id="" class="form-control @error('skills') is-invalid @enderror" multiple style="height:100px">
                           @foreach ($skills as $skill)
                           {{-- @if ($skill->name == $videos->skills->id) --}}
 
                           
                           <option value="{{$skill->id}}" selected>{{$skill->name}}</option>
                           
                           {{-- @else --}}
                           <option value="{{$skill->id}}" >{{$skill->name}}</option>
 
                           {{-- @endif --}}
                           @endforeach
                         </select>
                         @error('skills')
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
                        <select name="{{ $input}}" id="" class="form-control @error('tags') is-invalid @enderror" multiple style="height:100px">
                          @foreach ($tags as $tag)
                          {{-- @if ($tag->id == $videos->tags->id) --}}

                          
                          <option value="{{$tag->id}}" selected>{{$tag->name}}</option>
                          
                          {{-- @else --}}
                          <option value="{{$tag->id}}" >{{$tag->name}}</option>

                          {{-- @endif --}}
                          @endforeach
                        </select>
                        @error('tags')
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
                                @if ($cat->id == $videos->category_id)
                                <option value="{{$cat->id}}" selected>{{$cat->name}}</option>

                                @else
                                <option value="{{$cat->id}}" >{{$cat->name}}</option>

                                @endif
                            
                            
                            @endforeach
                          </select>
                          @error('category')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Photo</label>
                          <input type="file" class="form-control @error('image') is-invalid @enderror"  name="image" value="" style="position:unset">
                          
                          @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Video</button>
                    <div class="clearfix"></div>
                  </form>
              </div>  
            </div>
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Comments</h4>
                <p class="card-category">You can Edir Or Delete Comment</p>
              </div>
            </div>
            @include('back-end.comments.index')
           
            </div>
            <div class="col-md-4">
            <div class="card">
              
                <div class="card-header card-header-primary">
                    <h4 class="card-title">show video</h4>
                  </div>
              
                  <div class="card-body">
                @php

                    $url=getYoutubeId($videos->youtube);
                    @endphp
                    @if ($url) 
                    <iframe width="270" height="200" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     @endif 
              </div>
           
            
            <div class="card">
              
                <div class="card-header card-header-primary">
                    <h4 class="card-title">show Photo</h4>
                  </div>
              
                  <div class="card-body">
                      <img  src="{{URL::asset("$videos->image")}}" alt="" height="200" width="270">

              </div>
            </div>
            <div class="card">
              
              <div class="card-header card-header-primary">
                  <h4 class="card-title">Add comment</h4>
                </div>
            
                <div class="card-body">
                  @include('back-end.comments.create')

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