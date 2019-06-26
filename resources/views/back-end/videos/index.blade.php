@extends('back-end.layout.app')
@section('title')
Admin|videoControl

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
                        <div class="row">
                 <div class="col-md-8">
                  <h4 class="card-title ">video control</h4>
                  <p class="card-category"> You can Add/ Update/Delete video </p>
                </div>
                  <div class="col-md-4 text-right ">
                 <a href="{{route('video.create')}} " class="btn btn-white btn-round ">Add video</a>
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
                        Published
                      </th>
                        <th>
                          Category
                        </th>

                        <th>
                        User
                        </th>
                    <th class=" text-right">
                    Control                       
                    </th>
                 </thead>
                      <tbody>
                        <tr>
                            @foreach ($videos as $video)
                        </tr>
                        <tr>
                          <td>
                            {{$video->id}}
                          </td>
                          <td>
                                {{$video->name}}
                          </td>
                          
                          <td>
                            @if ($video->published == 1)
                                Published
                            @else
                               Hidden 
                            @endif
                      </td>
                      <td>
                            {{-- {{$video->category->name}} --}}
                      </td>
                      
                      <td>
                        {{$video->user->name}}
                  </td>
                          <td class="td-actions text-right">
                              <a href="{{route('video.edit',["video"=>$video])}}"> <button type="button" rel="" title="Edit video" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button></a> 
                               <form action="{{route('video.destroy',["video"=>$video])}}" method="POST">
                                @csrf
                                @method('delete')
                                 <button type="submit" rel="" title="Remove video" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                             
                              </form>
                              </td>
                          
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                    {{$videos->links()}}
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