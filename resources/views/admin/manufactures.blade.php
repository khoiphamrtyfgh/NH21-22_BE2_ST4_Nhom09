@extends('admin.header')
@section('main-content2')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manufactures</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/index')}}">Home</a></li>
            <li class="breadcrumb-item active">Manufactures</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Manufactures</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">
                Manu_id
              </th>
              <th style="width: 20%">
                Manu_name
              </th>
              <th style="width: 5% " class="text-center">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $row)
            <tr>
              <td>{{$row->manu_id}}</td>
              <td> {{$row->manu_name}}</td>
              <td class="project-actions text-right">

                <a class="btn btn-info btn-sm" href="{{ url('admin/editmanufacture/'.$row->manu_id) }}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
                </a>
                <form action="{{ url('manufacture/'.$row->manu_id)}}" method="post">
                  @method('DELETE')
                  @csrf

                  <button type="submit" value="{{$row->manu_id}}" name="manu_id"><i class="fas fa-trash"></i>Delete</button>

                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection