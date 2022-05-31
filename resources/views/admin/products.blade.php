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
            <li class="breadcrumb-item active">Products</li>
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
        <h3 class="card-title">Products</h3>

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
                Manu name
              </th>
              <th style="width: 5%" class="text-center">
                Type name
              </th>
              <th style="width: 15%" class="text-center">
                Price
              </th>
              <th>
                Image
              </th>
              <th style="width: 30%" class="text-center">
                Description
              </th>
              <th style="width: 8%" class="text-center">
                Feature
              </th>
              <th style="width: 8%" class="text-center">
                Created at
              </th>
              <th style="width: 8%" class="text-center">
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
              <td>

                {{$row->id}}
              </td>
              <td>

                {{$row->name}}
              </td>
              <td class="project_progress">
                {{$row->manu_id}}

              </td>
              <td class="project_state">
                {{$row->type_id}}
              </td>
              <td class="project_state">
                <?php //echo number_format($value['price']) 
                ?>
                {{number_format($row->price)}} VND
              </td>
              <td>
                <img style="width:50px" src="../img/{{$row->image}}" alt="" srcset="">
              </td>
              <td>

                <?php
                if (strlen($row->description) > 70) {
                  echo substr($row->description, 0, 50) . "...";
                } else
                  echo substr($row->description, 0, 50);
                ?>

              </td>
              <td class="project_progress">
                {{$row->feature}}
              </td>
              <td class="project_state">
                {{$row->created_at}}
              </td>
              <td class="project_state">
                {{$row->updated_at}}
              </td>
              <td class="project-actions text-right">


                <a class="btn btn-info btn-sm" href="{{ url('admin/editproduct/'.$row->id) }}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
                </a>
                <form action="{{ url('product/'.$row->id)}}" method="post">
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