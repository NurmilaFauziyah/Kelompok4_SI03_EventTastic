<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pendaftar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard/index')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/pendaftaran')?>">Registration</a></li>
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
          <h3 class="card-title">Detail Pendaftaran</h3>

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
                  <tr><td>Id Pendaftaran</td><td><?=$daftar->id?></td></tr>
                  <tr><td>Tanggal Daftar</td><td><?=$daftar->tanggal_daftar?></td></tr>
                  <tr><td>Alasan</td><td><?=$daftar->alasan?></td></tr>
                  <tr><td>Id User</td><td><?=$daftar->users_id?></td></tr>
                  <tr><td>Id Kegiatan</td><td><?=$daftar->kegiatan_id?></td></tr>
                  <tr><td>Id Kategori Peserta</td><td><?=$daftar->kategori_peserta_id?></td></tr>
                  <tr><td>Sertifikat</td><td><?=$daftar->nosertifikat?></td></tr>
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