@extends('back-end.layout.app')
@section('title')
Admin|User|Edit

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
User Edit
@endslot
@endcomponent


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Profile</h4>
                  <p class="card-category">Complete All Input</p>
                </div>
                <div class="card-body">
                  <form action="{{route('users.update',["user"=>$users->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="{{$users->name}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" value="{{$users->email}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">password</label>
                          <input type="password" class="form-control" name="password" value="{{$users->password}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">User Status</label>
                            <select name="group" id="" class="form-control @error('group') is-invalid @enderror">
  
                              <option value="1 " {{isset($users->group)?'selected':''}}>Admin</option>
                              <option value="0"{{isset($users->group)?'selected':'' }}>User</option>
                            </select>
                            @error('group')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
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