
             
              
                <div class="card-body card-header-primary">
                  <div class="table-responsive">
                    <table class="table " id="comments">
                      <thead class=" text-primary card-title">
                        <th>
                         Comment
                        </th>
                    <th class=" text-right">
                    Control                       
                    </th>
                 </thead>
                      <tbody>
                        
                            @foreach ($videos->comments as $comment)
                      
                        <tr>
                          <td>
                             <span style="color:lightpink">User Name:  </span> {{$comment->user->name}} <br>
                             <span style="color:palegreen">Created at: </span> {{$comment->created_at}} <br>
                             <span style="color:thistle">{{$comment->comment}} </span><br>
                            </td> 
                            <br>
                          

                          </td> 
                           
                          <td class="td-actions text-right">
                              <button   onclick="$(this).closest('tr').next('tr').slideToggle()"
                                type="button" rel="" title="Edit comment" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                                </button> 
                              
                                 <a href="{{route('destroyComment',["comment"=>$comment])}}" title="Remove comment" class="btn btn-white btn-link btn-sm">
                                  <i class="material-icons">close</i>
                                 </a>
                             
                            
                              </td>
                            </tr>
                        
                           
                            <tr style="display:none">
                        <td colspan="4">
                        <form action="{{route('updateComment',['id'=>$comment->id])}}" method="POST">
                            @csrf
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">comment</label>
                                  <input type="text" class="form-control" name="comment" value="{{$comment->comment}}">
                                  
                                 
                                </div>
                                <input type="hidden" class="form-control " name="video-id" value="{{$videos->id}}">
        
                              </div>
                              
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Update Comment</button>
                            <div class="clearfix"></div>
                          </form>
                        </td>
                            </tr>
                        @endforeach
                    
                      </tbody>
                    </table>
                  </div>
                </div>
  