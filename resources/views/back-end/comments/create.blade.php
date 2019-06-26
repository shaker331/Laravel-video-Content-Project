
                <div class="card-body" id="comments">
                    <form action="{{route('storeComment')}}" method="POST">
                        @csrf
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating">Comment</label>
                              <input type="text" class="form-control" name="comment" >
                              
                             
                            </div>
                            <input type="hidden" class="form-control " name="video-id" value="{{$videos->id}}">
    
                          </div>
                          
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Add Comment</button>
                        <div class="clearfix"></div>
                      </form>
                </div>
           