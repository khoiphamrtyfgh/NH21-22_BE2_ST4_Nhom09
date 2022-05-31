@extends('admin.header')
@section('main-content2')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>User edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/index')}}">Home</a></li>
            <li class="breadcrumb-item active">User edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="{{ url('admin/users/'.$user->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">User edit</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputClientCompany">Id</label>
                <input type="text" id="inputClientCompany" class="form-control" name='id' value="{{ $user->id}}" active>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Name</label>
                <input type="text" id="inputClientCompany" class="form-control" name='name' value="{{ $user->name}}">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Email</label>
                <input type="text" id="inputClientCompany" class="form-control" name='email' value="{{ $user->email}}" active>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Password</label>
                <input type="text" id="inputClientCompany" class="form-control" name='password' value="{{ $user->password}}">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Remember Token</label>
                <input type="text" id="inputClientCompany" class="form-control" name='remember_token' value="{{ $user->remember_token}}">
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