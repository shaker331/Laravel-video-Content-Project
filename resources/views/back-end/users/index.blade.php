@extends('back-end.layout.app')
@section('title')
Admin|UsersControl

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
Users Control
@endslot
@endcomponent

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                 <div class="col-md-8">
                  <h4 class="card-title ">Users control</h4>
                  <p class="card-category"> You can Add/ Update/Delete Users </p>
                </div>
                  <div class="col-md-4 text-right ">
                 <a href="{{route('users.create')}} " class="btn btn-white btn-round ">ADD User</a>
                 </div>
                </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                      <th>
                    Email                       
                    </th>
                    <th class=" text-right">
                    Control                       
                    </th>
                 </thead>
                      <tbody>
                        <tr>
                            @foreach ($users as $user)
                        </tr>
                        <tr>
                          <td>
                            {{$user->id}}
                          </td>
                          <td>
                                {{$user->name}}
                          </td>
                          <td>
                                {{$user->email}}
                          </td>
                          
                          <td class="td-actions text-right">
                              <a href="{{route('users.edit',["user"=>$user])}}"> <button type="button" rel="" title="Edit User" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button></a> 
                               <form action="{{route('users.destroy',["user"=>$user])}}" method="POST">
                                @csrf
                                @method('delete')
                                 <button type="submit" rel="" title="Remove User" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                             
                              </form>
                              </td>
                          
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                    {{$users->links()}}
                  </div>
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