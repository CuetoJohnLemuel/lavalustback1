<?php include 'inc/header.php'?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

  </nav>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include 'inc/sidebar.php'?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Applicant ID</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Sex</th>
                    <th></th>
                    <th>Action</th>
                  </tr>
                  <tbody>
                <?php foreach($user_data as $user_data):?>
                <tr>
                    <td><?=$user_data['applicant_id'];?></td>
                    <td><?=$user_data['full_name'];?></td>
                    <td><?=$user_data['address'];?></td>
                    <td><?=$user_data['contact'];?></td>
                    <td><?=$user_data['email'];?></td>
                    <td><?=$user_data['category'];?></td>
                    <td><?=$user_data['status'];?></td>
                    <td><?=$user_data['sex'];?></td>
                    <td><?=$user_data['applicant_status'];?></td>

                    
                      <th class="text-center"><a href="removeapplicant/<?= $user_data['id']?>"><button class="bg-dark">Remove</button></a></th>
               
                    <!-- <td><a href="<site_url('edit/'.$jobs['emp_id'].'');?>" class="btn btn-primary">Update</a></td>
                    <td><a href="<site_url('delete/'.$jobs['emp_id'].'');?>" class="btn btn-danger">Delete</a></td> -->
                </tr>
                <?php endforeach; ?>         
            </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include 'inc/footer.php'?>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
