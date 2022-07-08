<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Pendaftaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Registration</li>
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
          <h3 class="card-title">Data Pendaftar</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
          </button>
          </div>
        </div>
        <div class="card-body table-responsive">
        <a class="btn" href="<?php echo base_url('index.php/pendaftaran/create');?>" style="background-color:#EB3656; color: white;"><b>Register</b></a>

        <table class="table table-striped mt-3 text-nowrap text-center">
    <thead style="text-align:center; background-color:#EB3656; color: white;">
        <tr><th>id</th><th>Tanggal Daftar</th></th><th>Alasan</th>
            <th>Kategori Peserta</th> 
            <th>No. Sertifikat</th>
            <th>View</th><th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    $nomor = 3;
    foreach($list_daftar as $obj){
    ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->tanggal_daftar?></td>
            <td><?=$obj->alasan?></td>
            <td style="text-align: center;"><?=$obj->kategori_peserta_id?></td>
            <td><?=$obj->nosertifikat?></td>
            <td><a class="btn btn-primary btn-sm" href = "<?php echo base_url("index.php/pendaftaran/view?id=$obj->id");?>"><i class="fas fa-eye"></i> View</a></td>
            <td>
              <a class="btn btn-info btn-sm" href = "<?php echo base_url("index.php/pendaftaran/edit?id=$obj->id");?>"><i class="fas fa-pencil-alt"></i> Edit </a>
              <a class="btn btn-danger btn-sm" href = "<?php echo base_url("index.php/pendaftaran/delete?id=$obj->id");?>" onclick="if(!confirm('Anda Yakin Menghapus Pendaftaran dengan id = <?=$obj->id?>?')) {return false}">
              <i class="fas fa-trash"></i> Delete</a>
            </td>
        </tr>
    <?php 
    $nomor++;   
    }?>
    </tbody>
</table>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>