@extends('admin.header')
@section('main-content2')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/index')}}">Home</a></li>
            <li class="breadcrumb-item active">Product Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="{{ url('admin/products')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Product Add</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputClientCompany">Name</label>
                <input type="text" id="inputClientCompany" class="form-control" name='name'>
              </div>
              <div class="form-group">
                <label for="inputStatus">Manu name</label>
                <select id="inputStatus" class="form-control custom-select" name='manu_id'>
                  <option selected disabled>Select one</option>
                  @foreach($manufactures as $row)
                  <option value="{{$row->manu_id}}">{{$row->manu_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Type name</label>
                <select id="inputStatus" class="form-control custom-select" name='type_id'>
                  <option selected disabled>Select one</option>
                  @foreach($protypes as $row)
                  <option value="{{$row->type_id}}">{{$row->type_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Price</label>
                <input type="number" id="inputProjectLeader" class="form-control" max="2000000000" name='price'>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Image</label>
                <input type="file" name="image" id="image" class='form-control'>
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="summernote" class="form-control" name='description' rows="4"></textarea>


                <div class="form-group">
                  <label for="inputStatus">Feature</label>
                  <select id="inputStatus" class="form-control custom-select" name='feature'>
                    <option selected disabled>Feature</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Quantity</label>
                  <input type="number" id="inputProjectLeader" class="form-control" name='quantity'>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <input type="submit" value="Submit" name="submit" class="btn btn-success float-right">
              </div>
            </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection