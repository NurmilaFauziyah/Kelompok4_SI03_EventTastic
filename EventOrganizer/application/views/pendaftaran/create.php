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
              <li class="breadcrumb-item">Register</li>

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
          <h3 class="card-title">Pendaftaran Peserta</h3>

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
            <?php echo form_open('pendaftaran/save')?>
            <div class="form-group row">
              <label for="id_peserta" class="col-4 col-form-label">Id Peserta</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-user"></i>
                    </div>
                  </div> 
                  <input id="users_id" name="users_id" type="text" class="form-control" required="required">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="tanggal_daftar" class="col-4 col-form-label">Tanggal Daftar</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-calendar"></i>
                    </div>
                  </div> 
                  <input id="tanggal_daftar" name="tanggal_daftar" type="text" class="form-control" required="required">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="kategori_peserta_id" class="col-4 col-form-label">Pilih Kategori Peserta</label> 
              <div class="col-8">
                <select id="kategori_peserta_id" name="kategori_peserta_id" class="custom-select" required="required">
                  <option value="1">Pelajar</option>
                  <option value="2">Mahasiswa</option>
                  <option value="3">Karyawan Swasta</option>
                  <option value="4">Guru/Dosen</option>
                  <option value="5">Umum</option>
                  <option value="6">ASN</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="kegiatan_id" class="col-4 col-form-label">Pilih Kegiatan</label> 
              <div class="col-8">
                <select id="kegiatan_id" name="kegiatan_id" class="custom-select" required="required">
                  <option value="1">Seminar Sukses Kuliah di Luar Negeri</option>
                  <option value="2">How Strong Words of Mouth Can Influence Other</option>
                  <option value="3">How to Start Your Own Business</option>
                  <option value="4">Jakarta Gramedia Bazaar</option>
                  <option value="5">Futsal Competition</option>
                  <option value="6">Learn the Steps to Start a Business</option>
                  <option value="7">Make Our Business Grow Together</option>
                  <option value="8">Ramayana Bazaar 2022</option>
                  <option value="9">Fun Soccer Camp JKT</option>
                  <option value="10">Support Growth and Job Creation</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="alasan" class="col-4 col-form-label">Alasan</label> 
              <div class="col-8">
                <textarea id="alasan" name="alasan" cols="40" rows="5" class="form-control" required="required"></textarea>
              </div>
            </div> 
            <div class="form-group row">
              <label for="nosertifikat" class="col-4 col-form-label">No. Sertifikat</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-align-justify"></i>
                    </div>
                  </div> 
                  <input id="nosertifikat" name="nosertifikat" type="text" class="form-control">
                </div>
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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