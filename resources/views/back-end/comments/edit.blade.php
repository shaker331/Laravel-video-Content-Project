
              <div class="card">
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
               
                 
                <td class="td-actions text-right">
                    {{-- <a href="{{route('comment.edit',["comment"=>$comment])}}"> <button type="button" rel="" title="Edit comment" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button></a>  --}}
                     <form action="{{route('destroyComment',["comment"=>$comment])}}" method="POST">
                      @csrf
                      @method('delete')
                       <button type="submit" rel="" title="Remove comment" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                   
                    </form>
                </div>
              </div>
           