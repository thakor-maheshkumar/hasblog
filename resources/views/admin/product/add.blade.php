@extends('master.layouts')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{url('admin/product.store')}}" enctype="multipart/form-data">
            	@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name">
                 	@if($errors->has('name'))
                 		<p class="text-danger">{{$errors->first('name')}}</p>
                 	@endif
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Price">
                  @if($errors->has('price'))
                  <p class="text-danger">{{$errors->first('price')}}</p>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Quantity</label>
                  <select class="form-control" name="quantity">
                  	@for($i=0;$i<=10;$i++)
                  	<option>{{$i}}</option>
                  	@endfor
                  </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
                  @if($errors->has('description'))
                  <p class="text-danger">{{$errors->first('description')}}</p>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" id="exampleInputFile" name="image">

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
    <!-- /.content -->
 
@endsection