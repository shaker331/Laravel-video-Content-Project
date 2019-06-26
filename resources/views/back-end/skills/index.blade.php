@extends('back-end.layout.app')
@section('title')
Admin|SkillControl

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
Skill Control
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
                  <h4 class="card-title ">Skill control</h4>
                  <p class="card-category"> You can Add/ Update/Delete Skill </p>
                </div>
                  <div class="col-md-4 text-right ">
                 <a href="{{route('skill.create')}} " class="btn btn-white btn-round ">Add Skill</a>
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
                            @foreach ($skills as $skill)
                        </tr>
                        <tr>
                          <td>
                            {{$skill->id}}
                          </td>
                          <td>
                                {{$skill->name}}
                          </td>
                          
                          <td class="td-actions text-right">
                              <a href="{{route('skill.edit',["skill"=>$skill])}}"> <button type="button" rel="" title="Edit category" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button></a> 
                               <form action="{{route('skill.destroy',["skill"=>$skill])}}" method="POST">
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
                    {{$skills->links()}}
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