@extends('back-end.layout.app')
@section('title')
Admin|TagControl

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
Tag Control
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
                  <h4 class="card-title ">Tag control</h4>
                  <p class="card-category"> You can Add/ Update/Delete Tag </p>
                </div>
                  <div class="col-md-4 text-right ">
                 <a href="{{route('tag.create')}} " class="btn btn-white btn-round ">Add Tag</a>
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
                    <th class=" text-right">
                    Control                       
                    </th>
                 </thead>
                      <tbody>
                        <tr>
                            @foreach ($tags as $tag)
                        </tr>
                        <tr>
                          <td>
                            {{$tag->id}}
                          </td>
                          <td>
                                {{$tag->name}}
                          </td>
                          
                          <td class="td-actions text-right">
                              <a href="{{route('tag.edit',["tag"=>$tag])}}"> <button type="button" rel="" title="Edit category" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button></a> 
                               <form action="{{route('tag.destroy',["tag"=>$tag])}}" method="POST">
                                @csrf
                                @method('delete')
                                 <button type="submit" rel="" title="Remove category" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                             
                              </form>
                              </td>
                          
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                    {{$tags->links()}}
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