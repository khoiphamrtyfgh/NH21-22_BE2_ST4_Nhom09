@extends('admin.header')
@section('main-content2')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/index')}}">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
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
        <h3 class="card-title">Users</h3>

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
              <th style="width: 2%">
                Id
              </th>
              <th style="width: 5%">
                Name
              </th>
              <th style="width: 5%">
                Email
              </th>
              <th style="width: 5%">
                Email verified at
              </th>
              <th style="width: 5%" class="text-center">
                Password
              </th>
              <th style="width: 15%" class="text-center">
                Remember Token
              </th>
              <th>
                Created at
              </th>
              <th>
                Updated at
              </th>
              <th style="width: 20%" class="text-center">
                Status
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $row)
            <tr>
              <td style="width: 2%" class="text-center">
                {{$row->id}}
              </td>
              <td style="width: 5%" class="text-center">
                {{$row->name}}
              </td>
              <td style="width: 5%" class="text-center">
                {{$row->email}}
              </td>
              <td style="width: 5%" class="text-center">
                {{$row->email_verified_at}}
              </td>
              <td style="width: 5%" class="text-center">
                {{$row->password}}
              </td>
              <td style="width: 15%" class="text-center">
                {{$row->remember_token}}
              </td>
              <td class="text-center">
                {{$row->created_at}}
              </td>
              <td class="text-center">
                {{$row->updated_at}}
              </td>
              <td class="project-actions text-right" style="width: 20%" class="text-center">
                <a class="btn btn-info btn-sm" href="{{ url('admin/edituser/'.$row->id) }}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
                </a>
                <form action="{{ url('user/'.$row->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                  <button type="submit"><i class="fas fa-trash">
                    </i>Delete</button>
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