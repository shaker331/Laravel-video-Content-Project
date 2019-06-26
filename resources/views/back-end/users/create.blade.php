@extends('back-end.layout.app')
@section('title')
Admin|Users|create

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
Users Create
@endslot
@endcomponent


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create User</h4>
                  <p class="card-category">Complete All Input</p>
                </div>
                <div class="card-body">
                  <form action="{{route('users.store')}}" method="POST">
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
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                          
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">password</label>
                          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                          
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add User</button>
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