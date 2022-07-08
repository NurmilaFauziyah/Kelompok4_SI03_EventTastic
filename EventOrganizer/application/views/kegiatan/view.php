<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard/index')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/kegiatan')?>">Event</a></li>
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
          <h3 class="card-title">Detail Kegiatan</h3>

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
                    <tr><td>Id Kegiatan</td><td><?=$event->id?></td></tr>
                    <tr><td>Judul Kegiatan</td><td><?=$event->judul?></td></tr>
                    <tr><td>Jenis Kegiatan</td><td><?=$event->jenis_id?></td></tr>
                    <tr><td>Kapasitas Peserta</td><td><?=$event->kapasitas?></td></tr>
                    <tr><td>Harga Tiket</td><td><?=$event->harga_tiket?></td></tr>
                    <tr><td>Tempat</td><td><?=$event->tempat?></td></tr>
                    <tr><td>Tanggal</td><td><?=$event->tanggal?></td></tr>
                    <tr><td>Narasumber</td><td><?=$event->narasumber?></td></tr>
                    <tr><td>PIC</td><td><?=$event->pic?></td></tr>
                </tbody>
              </table>
            </div>
            <div class="col-sm-4">
              <?php
              $filegambar = base_url('/uploads/'.$event->foto_flyer);
              //echo $filegambar;
              $array = get_headers($filegambar);
              $string = $array[0];
              if(strpos($string,"200"))
              {
                //echo 'url exists';
                echo '<img width="70%" src="'.$filegambar.'"class="img-thumbnail" alt="foto"/>';
              }
              else
              {
                //echo 'url does not exist';
                echo '<img src="'.base_url('/uploads/noimage.jpg').'" alt="foto"/>';
              }
              ?>
              <br/>
              Nama File : <?=$event->foto_flyer?>
              <br/>
              <?php
              echo form_open_multipart('kegiatan/upload');
              ?>
              <input type="hidden" name="id" value="<?=$event->id?>"/>
              <input type="file" name="fotoevent" size="20"/>
              <input type="submit" class="btn btn-success mt-3" value="Upload"/>

              <?php echo form_close()?>
            </div>
        </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>