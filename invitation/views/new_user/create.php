  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Create</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Masters</a></li>
                          <li class="breadcrumb-item ">Role</li>
                          <li class="breadcrumb-item active">Create Form</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>






      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <!-- left column -->
                  <div class="col-md-8">



                  

      <?php if ($this->session->flashdata('success')) {?>
      <div class="alert  alert-dismissible fade show" role="alert" style="
            color: #1f2d3d;
            background-color: #efff8f;
            border-color: #78ed00;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-info"></i> success!</h5>
            <?php echo $this->session->flashdata('success'); ?>
      </div>
      <?php } ?>

                      <!-- Horizontal Form -->
                      <div class="card card-info">
                          <div class="card-header">
                              <h3 class="card-title">New User</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <!--<form class="form-horizontal">-->


                          <!---->

                          <?php echo form_open(base_url().'invitation.php/New_user/create'); ?>
                          <div class="card-body">
                              <div class="form-group row">
                                  <label for="full_name" class="col-sm-2 col-form-label">Full Name</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" id="full_name"
                                          value="<?php echo set_value('Full_name'); ?>" name="full_name"
                                          placeholder="Enter Full Name">
                                      <?php echo form_error('full_name', '<div class="text-danger">', '</div>'); ?>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="email_id" class="col-sm-2 col-form-label">Email ID</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" id="email_id" name="email_id"
                                          placeholder="Enter Email Id" value="<?php echo set_value('email_id'); ?>">
                                      <?php echo form_error('email_id', '<div class="text-danger">', '</div>'); ?>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="phone_no" class="col-sm-2 col-form-label">Phone Number</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" id="phone_no" name="phone_no"
                                          placeholder="Enter Active Phonne No."
                                          value="<?php echo set_value('phone_no'); ?>">
                                      <?php echo form_error('phone_no No.', '<div class="text-danger">', '</div>'); ?>
                                  </div>
                              </div>
                              <!-- /.card-body -->
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-info">Save</button>
                                  <!--<button type="submit" class="btn btn-default float-right">Cancel</button>-->
                              </div>
                              <!-- /.card-footer -->
                              </form>
                          </div>
                          <!-- /.card -->

                      </div>
                      <div class="col-md-4"></div>
                      <!--/.col (left) -->
                  </div>
                  <!-- /.row -->
              </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>