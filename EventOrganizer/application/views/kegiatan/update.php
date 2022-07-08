<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard/index')?>">Home</a></li>
              <li class="breadcrumb-item">Event</li>

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
          <h3 class="card-title">Buat Kegiatan</h3>

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
            <?php
                $hidden = ['idedit'=>$eventedit->id];
            ?>
            <?php echo form_open('kegiatan/save','',$hidden)?>
            <div class="form-group row">
    <label for="judul" class="col-4 col-form-label">Judul Kegiatan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="judul" name="judul" value="<?=$eventedit->judul?>" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_id" class="col-4 col-form-label">Jenis Kegiatan</label> 
    <div class="col-8">
        <?php
            $checked_1 = ($eventedit->jenis_id=="1")?"checked":"";
            $checked_2 = ($eventedit->jenis_id=="2")?"checked":"";
            $checked_3 = ($eventedit->jenis_id=="3")?"checked":"";
            $checked_4 = ($eventedit->jenis_id=="4")?"checked":"";
            $checked_5 = ($eventedit->jenis_id=="5")?"checked":"";
        ?>
      <select id="jenis_id" name="jenis_id" class="custom-select" required="required">
        <option value="1" <?=$checked_1?>>Seminar</option>
        <option value="2" <?=$checked_2?>>Workshop</option>
        <option value="3" <?=$checked_3?>>Event Olah Raga</option>
        <option value="4" <?=$checked_4?>>Bazaar</option>
        <option value="5" <?=$checked_5?>>Pelatihan</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="kapasitas" class="col-4 col-form-label">Kapasitas Peserta</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user-plus"></i>
          </div>
        </div> 
        <input id="kapasitas" name="kapasitas" value="<?=$eventedit->kapasitas?>" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-sticky-note"></i>
          </div>
        </div> 
        <input id="harga_tiket" name="harga_tiket" value="<?=$eventedit->harga_tiket?>" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Kegiatan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" type="text" value="<?=$eventedit->tanggal?>" class="form-control" required="required" placeholder="yyyy-mm-dd">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat Kegiatan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-plane"></i>
          </div>
        </div> 
        <input id="tempat" name="tempat" value="<?=$eventedit->tempat?>" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="narasumber" class="col-4 col-form-label">Narasumber</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user-md"></i>
          </div>
        </div> 
        <input id="narasumber" name="narasumber" value="<?=$eventedit->narasumber?>" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="pic" class="col-4 col-form-label">PIC</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="pic" name="pic" value="<?=$eventedit->pic?>" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>