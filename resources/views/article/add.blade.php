@extends('master.layouts')
@section('content')


    <!-- Main content -->
    <section class="content" >
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">New Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{url('article/store')}}" enctype="multipart/form-data">
            	@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
                 	@if($errors->has('title'))
                 		<p class="text-danger">{{$errors->first('title')}}</p>
                 	@endif
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Excerption</label>
                  <textarea class="form-control" name="excerption" placeholder="Excerption"></textarea>
                  @if($errors->has('excerption'))
                  <p class="text-danger">{{$errors->first('excerption')}}</p>
                  @endif
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Body</label>
                  <textarea class="form-control" name="body" placeholder="body"></textarea>
                  @if($errors->has('body'))
                  <p class="text-danger">{{$errors->first('body')}}</p>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tag</label>
                  <select class="form-control" name="tag[]" multiple="">
                  	@foreach($tags as $tag)
                  	<option value="{{$tag->id}}">{{$tag->name}}</option>
                  	@endforeach
                  </select>
                  @error('tags')
                  <p class="help is-danger">{{$message}}</p>
                  @enderror
                </div>      
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box -->

          <!-- /.box -->

          <!-- Input addon -->
         
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
@endsection