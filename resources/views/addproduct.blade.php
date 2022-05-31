
@extends('layout')
@section('main-content')
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="{{ url('add') }}" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">name</label>
                <input type="text" name ='name' id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                
                <textarea id="summernote" name ="desc" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">protype</label>
                <select id="inputStatus" class="form-control custom-select" name="type">
                
                    
                  <option selected disabled>Select one</option>
               
                  <option value = 8; ?>> 
                  
                </option>
                  
                </select>
                
              </div>
              <div class="form-group">
                <label for="inputStatus">manufacture</label>
                <select id="inputStatus" class="form-control custom-select" name="manu">
                
                    
                  <option selected disabled>Select one</option>
                  
                  <option value = 3>
                 
                 </option>
                 
                </select>
                
              </div>
             <?php
            /*  <div class="form-group">
                <label for="inputClientCompany">description</label>
                <input type="text" name ='desc'  id="inputClientCompany" class="form-control">
              </div>
              */
              ?>
              <div class="form-group">
                <label for="inputClientCompany">Price</label>
                <input type="text" name = "price" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">image</label>
               
                <input type="file" name="image" id="fileToUpload" class="form-control"> 
  
                  <?php // <input type="text" name ="image" id="inputProjectLeader" class="form-control"> ?> 
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" name= "submit" value="Create new Product" class="btn btn-success float-right">
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  @endsection
  <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>