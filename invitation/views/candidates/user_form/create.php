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
                          <li class="breadcrumb-item">
                              <a href="#">Masters</a>
                          </li>
                          <li class="breadcrumb-item ">Role</li>
                          <li class="breadcrumb-item active">Create Form</li>
                      </ol>
                  </div>
              </div>
          </div>
          <!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                      <!-- Horizontal Form -->
                      <div class="card card-info">
                          <div class="card-header">
                              <h3 class="card-title">User Registration Form</h3>
                          </div> <?php echo form_open(base_url().'invitation.php/User_form/create'); ?> <div
                              class="card-body">

                              <div class="form-group">
                                  <label for="full_name">Enter Full Name</label>
                                  <input type="text" name="full_name" autocomplete="off"
                                      class="form-control form-control-sm" id="exampleInputEmail1"
                                      value="<?php echo set_value('full_name');?>" placeholder="Enter Full Name">
                                  <?php echo form_error('full_name', '<div class="text-danger">', '</div>'); ?>
                              </div>
                              <div class="form-group">
                                  <label for="email_id">Email Id</label>
                                  <div class="input-group input-group-sm">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-envelope"></i>
                                          </span>
                                      </div>
                                      <input name="email_id" type="email" autocomplete="off" class="form-control"
                                          placeholder="Email" value="<?php echo set_value('email_id');?>">
                                  </div> <?php echo form_error('email_id', '<div class="text-danger">', '</div>'); ?>
                              </div>
                              <div class="form-group">
                                  <label for="user_Phone_no">Enter Phone no.</label>
                                  <input type="tel" name="user_Phone_no" autocomplete="off"
                                      class="form-control form-control-sm" id="exampleInputPassword1"
                                      placeholder="Fill Phone No." value="<?php echo set_value('user_Phone_no');?>">
                                  <?php echo form_error('user_Phone_no', '<div class="text-danger">', '</div>'); ?>
                              </div>
                              <div class="form-group">
                                  <label for="date_of_birth">Date of Birth</label>
                                  <input type="date" name="date_of_birth" autocomplete="off"
                                      class="form-control form-control-sm" id="exampleInputPassword1"
                                      placeholder="Fill Phone No." value="<?php echo set_value('date_of_birth');?>">
                                  <?php echo form_error('date_of_birth', '<div class="text-danger">', '</div>'); ?>
                              </div>
                              <div class="form-group">
                                  <label for="user_education">Enter Your Highest Education with Date</label>
                                  <textarea class="form-control" name="user_education" id="exampleInputPassword1"
                                      autocomplete="off" placeholder="Highest Education (Startdate-Enddate)"
                                      value="<?php echo set_value('user_education');?>"></textarea>
                                  <?php echo form_error('user_education', '<div class="text-danger">', '</div>'); ?>
                              </div>
                              <div class="form-group">
                                  <label for="user_address">Enter Full Address</label>
                                  <textarea class="form-control" name="user_address" placeholder="Provide Full Address"
                                      autocomplete="off" value="<?php echo set_value('user_address');?>"></textarea>
                                  <?php echo form_error('user_address', '<div class="text-danger">', '</div>'); ?>
                              </div>
                              <div class="form-check">
                                  <input type="checkbox" class="form-check-input" onclick="myFunction()"
                                      id="exampleCheck1"  name = "radio">
                                  <label class="form-check-label" for="exampleCheck1">I am fresher</label>
                              </div>
                          </div>
                          <div class="row p-2" id="experience">
                              <div class="form-group col-md-3">
                                  <label for="user_company_name">Enter Company Name</label>
                                  <input type="text" name="user_company_name" autocomplete="off"
                                      class="form-control form-control-sm" id="exampleInputPassword1"
                                      placeholder="Company Name" value="<?php echo set_value('user_company_name');?>">
                                  <?php echo form_error('user_company_name', '<div class="text-danger">', '</div>'); ?>
                              </div>
                              <div class="form-group col-md-3">
                                  <label for="user_join_date">Joining Date</label>
                                  <input type="date" name="user_join_date" autocomplete="off"
                                      class="form-control form-control-sm" id="exampleInputPassword1"
                                      placeholder="joining Date" value="<?php echo set_value('user_join_date');?>">
                                  <?php echo form_error('user_join_date', '<div class="text-danger">', '</div>'); ?>
                              </div>
                              <div class="form-group col-md-3">
                                  <label for="user_last_date">Last_date</label>
                                  <input type="date" name="user_last_date" autocomplete="off"
                                      class="form-control form-control-sm" id="exampleInputPassword1"
                                      placeholder="Last Date" value="<?php echo set_value('user_last_date');?>">
                                  <?php echo form_error('user_last_date', '<div class="text-danger">', '</div>'); ?>
                              </div>
                              <div class="form-group col-md-3">
                                  <label for="user_key_roll">Key Roll</label>
                                  <input type="text" name="user_key_roll" autocomplete="off"
                                      class="form-control form-control-sm" id="exampleInputPassword1"
                                      placeholder=" Provide Key Roll" value="<?php echo set_value('user_key_roll');?>">
                                  <?php echo form_error('user_key_roll', '<div class="text-danger">', '</div>'); ?>
                              </div>
                          </div>
                          <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                          </form>
                      </div>
                      <!-- /.card -->
                  </div>
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <script>
function myFunction() {
    var x = document.getElementById("experience");
    if (x.style.display === "none") {
        x.style.display = "";
    } else {
        x.style.display = "none";
    }
}
  </script>