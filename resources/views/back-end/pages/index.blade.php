@extends('back-end.layout.app')
@section('title')
Admin|PageControl

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
Page Control
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
                  <h4 class="card-title ">Page control</h4>
                  <p class="card-category"> You can Add/ Update/Delete Page </p>
                </div>
                  <div class="col-md-4 text-right ">
                 <a href="{{route('page.create')}} " class="btn btn-white btn-round ">Add Page</a>
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
                         Description
                        </th>
                        <th>
                            Meta keywords
                          </th>
                          
                        <th>
                            Meta Description
                          </th>
                    <th class=" text-right">
                    Control                       
                    </th>
                 </thead>
                      <tbody>
                        <tr>
                            @foreach ($pages as $page)
                        </tr>
                        <tr>
                          <td>
                            {{$page->id}}
                          </td>
                          <td>
                                {{$page->name}}
                          </td>
                          
                      <td>
                        {{$page->des}}
                  </td>
                          <td>
                            {{$page->meta_keywords}}
                      </td>
                      <td>
                            {{$page->meta_des}}
                      </td>
                          <td class="td-actions text-right">
                              <a href="{{route('page.edit',["page"=>$page])}}"> <button type="button" rel="" title="Edit page" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button></a> 
                               <form action="{{route('page.destroy',["page"=>$page])}}" method="POST">
                                @csrf
                                @method('delete')
                                 <button type="submit" rel="" title="Remove page" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                             
                              </form>
                              </td>
                          
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                    {{$pages->links()}}
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