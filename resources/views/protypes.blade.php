@extends('layoutsp')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Protype</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Protype</li>

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
        <h3 class="card-title">Protype</h3>

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
                type name
              </th>
              <th style="width: 20%">
                id type
              </th>
              <th style="width: 30%">
                Action
              </th>

            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($getAllProtype as $value) { ?>

              <tr>
                <td><a href="protypes.php?id=<?php echo $value['type_id'];  ?>"> <?php echo $value['type_name'];  ?></a>

                </td>

                <td>
                  <?php echo $value['type_id']; ?>
                </td>
                <?php
                //  $value['type_id']=$_GET['id'];
                // if(isset($_GET['id']))
                // {
                //   echo "san pham".$value['type_id'];
                // }
                //  else
                //  {
                //    echo "0";
                //  }
                ?>



                <td>
                  <a class="btn btn-primary btn-sm" href="addprotype.php">
                    <i class="fas fa-folder">
                    </i>
                    Add
                  </a>
                  <a class="btn btn-info btn-sm" href="editprotype.php?id=<?php echo $value['type_id']; ?>">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="delprotype.php?id=<?php echo $value['type_id'];  ?>">
                    <i class="fas fa-trash">
                    </i>

                    Delete
                  </a>
                </td>

              <?php
            }
              ?>


              </tr>



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