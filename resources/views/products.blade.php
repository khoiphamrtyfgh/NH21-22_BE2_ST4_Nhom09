@extends('layoutsp')
@section('main-content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>

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
                <h3 class="card-title">Product</h3>

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
                                ID
                            </th>
                            <th style="width: 20%">
                                Name Product
                            </th>
                            <th style="width: 10%">
                                Image
                            </th>
                            <th style="width:10%">
                                Price
                            </th>
                            <th style="width: 8%" class="text-center">
                                Manufacure
                            </th>
                            <th style="width: 8%" class="text-center">
                                Protype
                            </th>
                            <th style="width: 20%">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>




                        @foreach($data as $row)

                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>
                                {{ $row->name }}
                            </td>
                            <td>

                                <img style="width:60px" src="{{ asset('img/'. $row->image) }}" alt="">
                            </td>
                            <td>
                                <div class="project_progress">{{ $row->price}} VND</div>
                            </td>
                            <td> {{ $row->manufacture->manu_name}} </td>
                            <td> {{ $row->protype->type_name }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="addproduct.php">
                                    <i class="fas fa-folder">
                                    </i>
                                    Add
                                </a>
                                <a class="btn btn-info btn-sm" href="update.php?id=">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="del.php?id=">
                                    <i class="fas fa-trash">
                                    </i>
                                    <form action="{{ url('product/'.$row->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        
                                        <button type="submit">Delete</button>
                                    </form>
                                    <!-- Deleteuu -->
                                </a>
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