@extends('master.layouts')
@section('content')
<div class="container">
<section class="content-header">
      <h1>
        Products Table
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
      <a href="{{url('admin/product.add')}}" class="btn btn-success">Add Product</a>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Description</th>
                  <th>Image</th>
                 
                </tr>
                </thead>
                <tbody>
                  @foreach($product as $products)
                  <tr>
                    <td>{{$products->name}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>{{$products->description}}</td>
                    <td>
                      <img src="{{URL::to('/')}}/images/{{$products->image}}" width="80">
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
@endsection