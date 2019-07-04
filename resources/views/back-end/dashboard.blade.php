
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-video-camera"></i>
                      </div>
                  <p class="card-category">Video</p>
                  <h3 class="card-title"> {{$videos->count()}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning">warning</i>
                    <a href="{{route('video.index')}}" class="warning-link">All Videos</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                      <i class="fa fa-list-alt"></i>
                  </div>
                  <p class="card-category">Category</p>
                  <h3 class="card-title">{{$cats->count()}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <a href="{{route('category.index')}}" class="warning-link">All Categories</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                      <i class="fa fa-tag"></i>
                    </div>
                  <p class="card-category">Tags</p>
                  <h3 class="card-title">{{$tags->count()}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <a href="{{route('tag.index')}}" class="warning-link">All Tags</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <p class="card-category">Users Status</p>
                  <h3 class="card-title">{{$users->count()}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <a href="{{route('users.index')}}" class="warning-link">All Users</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Users</h4>
                  <p class="card-category">Last Users</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th  style="color:lightpink">ID</th>
                      <th  style="color:lightpink">Name</th>
                      <th  style="color:lightpink">No. of Videos</th>
                      <th  style="color:lightpink">Date Of Register</th>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($users as $user)
                            
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->videos->count()}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-warning">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"> Latest Videos</span>
                    
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                          <tr>
                              <td style="color:lightpink">
                               ID
                                 
                            
                            <td  style="color:lightpink">
                              Video  Name
                             
                        
                            </td>
                            <td  style="color:lightpink">
                              Video  Status
                            </td>
                            <td  style="color:lightpink">
                              Control
                            </td>
                          </tr>
                            @foreach ($videost as $video)
                               <tr> 
                                  <td>{{$video->id}}"</td>

                            <td>{{$video->name}}"</td>
                              <td>
                                @if ($video->published==1)
                                   Published 
                                @else
                                    Hidden
                                @endif
                               </td>
                             <td> 
                                 <a href="{{route('video.destroy1',["video"=>$video])}}"><button type="submit" rel="" title="Remove video" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                </button></a>
                             
                            
                            </td>
                          </tr>
                          @endforeach
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>