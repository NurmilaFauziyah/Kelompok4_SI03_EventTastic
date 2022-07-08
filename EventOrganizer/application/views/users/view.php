<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard/index')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/user')?>">Users</a></li>
              <li class="breadcrumb-item active">View</li>

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
          <h3 class="card-title">Detail Pengguna</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

          <div class="row mb-2">
            <div class="col-sm-8">
              <table class="table table-striped">
                <tbody>
                  <tr><td>Id User</td><td><?=$pengguna->id?></td></tr>
                  <tr><td>Username</td><td><?=$pengguna->username?></td></tr>
                  <tr><td>Password</td><td><?=$pengguna->password?></td></tr>
                  <tr><td>Email</td><td><?=$pengguna->email?></td></tr>
                  <tr><td>Created at</td><td><?=$pengguna->created_at?></td></tr>
                  <tr><td>Last Login</td><td><?=$pengguna->last_login?></td></tr>
                  <tr><td>Status</td><td><?=$pengguna->status?></td></tr>
                  <tr><td>Role</td><td><?=$pengguna->role?></td></tr>
                </tbody>
              </table>
            </div>
        </div>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>