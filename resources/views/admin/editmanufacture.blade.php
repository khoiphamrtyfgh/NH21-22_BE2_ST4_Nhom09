@extends('admin.header')
@section('main-content2')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manufactures Edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manufactures Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="{{ url('admin/manufactures/'.$manufacture->manu_id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Manufactures Edit</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputClientCompany">Manu id</label>
                <input type="text" id="inputClientCompany" class="form-control" name='manu_id' value="{{$manufacture->manu_id}}" active>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Manu name</label>
                <input type="text" id="inputClientCompany" class="form-control" name='manu_name' value="{{$manufacture->manu_name}}">
              </div>
            </div>
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