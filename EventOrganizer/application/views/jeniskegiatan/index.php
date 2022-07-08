  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Referensi Jenis Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Types of Events</li>
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
          <h3 class="card-title">Data Jenis Kegiatan</h3>

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
        <a class="btn" href="<?php echo base_url('index.php/jeniskegiatan/create');?>" style="background-color:#EB3656; color: white;"><b>Create</b></a>
        <table class="table table-bordered mt-3 text-nowrap text-center">
            <thead style="background-color:#EB3656; color: white;">
                <tr>
                    <th>Id</th>
                    <th>Jenis Kegiatan</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach($list_typeevent as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row->nama?></td>
                        <td><a class="btn btn-primary btn-sm" href = "<?php echo base_url("index.php/jeniskegiatan/view?id=$row->id");?>"><i class="fas fa-eye"></i> View</a></td>
                        <td>
                            <a class="btn btn-info btn-sm" href = "<?php echo base_url("index.php/jeniskegiatan/edit?id=$row->id");?>"><i class="fas fa-pencil-alt"></i> Edit</a>
                            <a class="btn btn-danger btn-sm" href = "<?php echo base_url("index.php/jeniskegiatan/delete?id=$row->id");?>"onclick = "if(!confirm('Anda yakin hapus jenis kegiatan dengan id : <?=$row->id?>?')) {return false}">
                            <i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                    }
                ?>
            </tbody>
        </table>      
</div>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


