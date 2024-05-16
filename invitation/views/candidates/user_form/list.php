<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div id="reponse"></div>    

            <?php if ($this->session->flashdata('Email')) {?>
            <div class="alert  alert-dismissible fade show" role="alert" style="
               color: #1f2d3d;
               background-color: #efff8f;
               border-color: #78ed00;
               ">
                <?php echo $this->session->flashdata('Email'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?php } ?>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Of User</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <!-- <tr>
                                        <th></th>
                                        <th colspan="3"><center>User Profile</center></th>
                                        <th colspan="4"><center>Experience</center> </th>
                                        <th colspan="2"><center>Action</center></th>
                                    </tr> -->
                                    <tr>
                                        <th>#</th>
                                        <th>Full_Name</th>
                                        <th>Email_id</th>
                                        <th>Phone_no</th>
                                        <th>Experience</th>
                                        <th>Send Message</th>
                                        <!-- <th>Join Date</th>
                                        <th>Last Date</th>
                                        <th>Key Roll</th>
                                        <th>Approval</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                              $dep_id =1;
                              foreach($userList as $dep_key => $dep_val){
                                  ?>
                                    <tr>
                                        <td><?php echo $dep_id; ?></td>
                                        <td><?php echo $dep_val['FULL_NAME']; ?></td>
                                        <td class="useremail"><?php echo $dep_val['EMAIL_ID']; ?></td>
                                        <td><?php echo $dep_val['PHONE_NO']; ?></td>
                                        <td><?php echo ($dep_val['IS_FRESHER'] == 'on')?'No':'Yes'; ?></td>
                                       
                                        <td>
                                            <button type="button" data-toggle="modal" data-target="#modal-primary"
                                                class="btn btn-block bg-gradient-info btn-xs openpopupmessage">Message</button>
                                        </td>
                                        <!-- <td><a href="<?php echo base_url(); ?>invitation.php/New_user/rename/<?php echo $dep_val['ID']; ?>"><i
                                                    class="fas fa-pencil-alt mr-1"></i></a> | <a
                                                href="<?php echo base_url(); ?>invitation.php/User_form/delete/<?php echo $dep_val['ID']; ?>"><i
                                                    class="fas fa-trash-alt mr-1"></i></a>
                                        </td> -->
                                        <td><div class="dropdown no-arrow">
                                                <a class="dropdown" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">

                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modal-lg"
                                                        hx-get="<?php echo site_url('Htmx/AddorEditStudentDetails/'.$dep_val['ID']); ?>"
                                                        hx-trigger="click" hx-target="#replace">
                                                        View Details&nbsp;&nbsp;&nbsp;
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modal-lg"
                                                        hx-get="<?php echo site_url('Htmx/AddorEditStudentDetails/'.$dep_val['ID']); ?>"
                                                        hx-trigger="click" hx-target="#replace">
                                                        Edit&nbsp;&nbsp;&nbsp;
                                                    </a>

                                                    <a hx-get="<?php echo base_url('invitation.php/User_form/delete/'.$dep_val['ID']); ?>" 
                                                        hx-target="#reponse" class="dropdown-item"
                                                        hx-confirm="Are you sure you wish to Deactivate this account?" 
                                                        <i
                                                        class="fas fa-trash-alt mr-1"></i>Deactivate&nbsp;&nbsp;&nbsp;
                                                    </a>

                                                </div>
                                            </div></td>
                                    </tr>
                                    <?php
                              $dep_id++;
                              }
                              ?>
                                    <!--sending mail modal-->
                                    <div class="modal fade" id="modal-primary">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-light">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Send Mail to Customer</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="m-2">
                                                    <?php echo form_open(base_url().'invitation.php/user_form/emailsend'); ?>
                                                    <input type="text" name="email" class="form-control mb-4 modelemail"
                                                        readonly>
                                                    <input type="text" name="subject" class="form-control mb-4"
                                                        placeholder="Enter Mail Subject">
                                                    <textarea class="modal-body form-control" name="message"
                                                        placeholder="Send Content like Approval,Rejection and thier Key rolls and Responsbility"></textarea>
                                                    <!--</div>-->
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Send
                                                            email</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </tbody>
                                <tfoot>
                                <th>#</th>
                                        <th>Full_Name</th>
                                        <th>Email_id</th>
                                        <th>Phone_no</th>
                                        <th>Experience</th>
                                        <th>Send message</th>
                                        <!-- <th>Join Date</th>
                                        <th>Last Date</th>
                                        <th>Key Roll</th>
                                        <th>Approval</th> -->
                                        <th>Action</th>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Of Deleted User</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full_Name</th>
                                    <th>Email_id</th>
                                    <th>Phone_no</th>
                                    <th>Recall Again</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                           $ddep_id =1;
                           foreach($softuserList as $dep_key => $dep_val){
                               ?>
                                <tr>
                                    <td><?php echo $dep_id; ?></td>
                                    <td><?php echo $dep_val['FULL_NAME']; ?></td>
                                    <td><?php echo $dep_val['EMAIL_ID']; ?></td>
                                    <td><?php echo $dep_val['PHONE_NO']; ?></td>
                                    <td>
                                        <div class="form-group">
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" class="custom-control-input softstatuswidget"
                                                    id="customSwitch_<?php echo $dep_val['DELETE_STATUS']; ?>_<?php echo $dep_val['ID']; ?>"
                                                    <?php if($dep_val['DELETE_STATUS'] == 0){ echo 'checked'; }else{} ?>
                                                    value="<?php echo $dep_val['DELETE_STATUS']; ?>" />
                                                <label class="custom-control-label"
                                                    for="customSwitch_<?php echo $dep_val['DELETE_STATUS']; ?>_<?php echo $dep_val['ID']; ?>">Click
                                                    here to Restore the <?php echo $dep_val['FULL_NAME']; ?>
                                                    Status</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                           $dep_id++;
                           }
                           ?>
                            </tbody>
                            <tfoot>
                                <th>#</th>
                                <th>Full_Name</th>
                                <th>Email_id</th>
                                <th>Phone_no</th>
                                <th>Recall Again</th>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<script>
$(document).ready(function() {
    $('.openpopupmessage').bind('click', function() {
        var email = $(this).parent().parent().find('.useremail').text();
        $('.modelemail').val(email);
    })
    $('.statuswidget').change(function() {
        var dep_st = $(this).val();
        var attr_id = $(this).attr('id');
        $.ajax({
            url: '<?=base_url()?>invitation.php/User_form/statuschange',
            method: 'post',
            data: {
                ccst: dep_st,
                attr: attr_id
            },
            dataType: 'json',
            success: function(response) {
                var len = response.length;
                $('#' + attr_id).val(response.depst);
                alert('Status updated Successfully')
            }
        });
    });

    $('.softstatuswidget').change(function() {
        var dep_st = $(this).val();
        var attr_id = $(this).attr('id');
        $.ajax({
            url: '<?=base_url()?>invitation.php/User_form/deletedstatuschange',
            method: 'post',
            data: {
                ccst: dep_st,
                attr: attr_id
            },
            dataType: 'json',
            success: function(response) {
                var len = response.length;
                $('#' + attr_id).val(response.depst);
                alert('Status updated Successfully')
            }
        });
    });

})
</script>