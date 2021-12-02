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
                    <h3 class="card-title">Create a delicious dish</h3>
                    <a href="/dish" class="btn btn-default" style="float:right">Back</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="/dish/{{$dish->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name',$dish->name)}}">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <Select class="form-control" name="category">
                                <option value="">Choose category</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}" {{$cat->id == $dish->category_id ? 'selected':''}} > {{$cat->name}}</option>
                                @endforeach
                            </Select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label> <br>
                            <img src="{{url('/images/'.$dish->image)}}" alt="" srcset="" width=130 height=100><br><br>
                            <input type="file" name="dish_image" id="dish_image">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
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