<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard/index')?>">Home</a></li>
              <li class="breadcrumb-item">Users</li>

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
          <h3 class="card-title">Edit Akun</h3>

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
                $hidden = ['idedit'=>$useredit->id];
            ?>
            <?php echo form_open('user/save','',$hidden)?>
                        <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Username</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="username" readonly value="<?=$useredit->username?>" name="username" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-envelope"></i>
                    </div>
                    </div> 
                    <input id="email" readonly value="<?=$useredit->email?>" name="email" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-4 col-form-label">Password</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-key"></i>
                    </div>
                    </div> 
                    <input id="password" readonly value="<?=$useredit->password?>" name="password" type="password" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
    <label for="created_at" class="col-4 col-form-label">Created at</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="created_at" readonly value="<?=$useredit->created_at?>" name="created_at" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="last_login" class="col-4 col-form-label">Last Login</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="last_login" readonly value="<?=$useredit->last_login?>" name="last_login" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Status</label> 
    <div class="col-8">
    <?php
            $checked_aktif = ($useredit->status=="1")?"checked":"";
            $checked_nonaktif = ($useredit->status=="0")?"checked":"";
        ?>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="status" id="status_0" type="radio" class="custom-control-input" value="1" <?=$checked_aktif?>> 
        <label for="status_0" class="custom-control-label">Aktif</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="status" id="status_1" type="radio" class="custom-control-input" value="0" <?=$checked_nonaktif?>> 
        <label for="status_1" class="custom-control-label">Non Aktif</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Role</label> 
    <div class="col-8">
    <?php
            $checked_admin = ($useredit->role=="administrator")?"checked":"";
            $checked_public = ($useredit->role=="public")?"checked":"";
        ?>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="role" id="role_0" type="radio" class="custom-control-input" value="administrator" required="required" <?=$checked_admin?>> 
        <label for="role_0" class="custom-control-label">Admin</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="role" id="role_1" type="radio" class="custom-control-input" value="public" required="required" <?=$checked_public?>> 
        <label for="role_1" class="custom-control-label">Publik</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary" style="background-color:#EB3656; color:ffffff;">Update</button>
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