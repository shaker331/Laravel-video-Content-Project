@extends('back-end.layout.app')
@section('title')
Admin|MessageControl

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
Message Control
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
                  <h4 class="card-title ">Message control</h4>
                  <p class="card-category"> You can Add/ Update/Delete Message </p>
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
                            @foreach ($mess as $mes)
                        </tr>
                        <tr>
                          <td>
                            {{$mes->id}}
                          </td>
                          <td>
                                {{$mes->name}}
                          </td>
                          
                      <td>
                        {{$mes->email}}
                  </td>
                         
                          <td class="td-actions text-right">
                              <a href="{{route('message.edit',["message"=>$mes])}}"> <button type="button" rel="" title="Edit message" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button></a> 
                               <form action="{{route('message.destroy',["message"=>$mes])}}" method="POST">
                                @csrf
                                @method('delete')
                                 <button type="submit" rel="" title="Remove message" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button>
                             
                              </form>
                              </td>
                          
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                    {{$mess->links()}}
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