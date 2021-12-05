@extends('layouts.master')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kitchen Panel</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
               
            <!-- d ko lrr mrr -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Order Listing</h3>
                    
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Dish Name</th>
                            <th>Table Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                          <tr>
                              <td>{{$order->dish->name}}</td> 
                              <td>{{$order->table_id}}</td>
                              <td>{{$status[$order->status]}}</td>
                              <td>
                                <div>
                                    <a href="/order/{{$order->id}}/approve" class="btn btn-warning">Approve</a>
                                    <a href="/order/{{$order->id}}/cancel" class="btn btn-danger">Cancel</a>
                                    <a href="/order/{{$order->id}}/ready" class="btn btn-success">Ready</a>
                                </div>
                                
                              </td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- thi lr  -->

            </div>
            <!-- /.col-md-6 -->
            
            <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

<script src="plugins/jquery/jquery.min.js"></script>
<script>
 $(function () {
   $('#example2').DataTable({
      "paging": true,
      "pageLength": 10,
      "lengthChange": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>