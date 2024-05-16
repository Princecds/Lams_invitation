<!-- <script src="https://unpkg.com/htmx.org@1.9.12" crossorigin="anonymous"></script> -->

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
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div id="reponse">

            </div>
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
                                    <tr>
                                        <th>#</th>
                                        <th>Full_Name</th>
                                        <th>Email_id</th>
                                        <th>Phone_no</th>
                                        <th>Entry Date</th>
                                        <th>Action</th>
                                        <!-- <th></th> -->
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
                                        <td><?php echo $dep_val['EMAIL_ID']; ?></td>
                                        <td><?php echo $dep_val['PHONE_NO']; ?></td>
                                        <td><?php echo $dep_val['CREATED_ON']; ?></td>
                                        <!-- <td><?php echo $dep_val['MODIFIED_ON']; ?></td> -->
                                        <!-- <td><a
                                                href="<?php echo base_url(); ?>invitation.php/New_user/rename/<?php echo $dep_val['ID']; ?>"><i
                                                    class="fas fa-pencil-alt mr-1"></i></a> | <a
                                                href="<?php echo base_url(); ?>invitation.php/New_user/delete/<?php echo $dep_val['ID']; ?>"><i
                                                    class="fas fa-trash-alt mr-1"></i></a></td> -->
                                        <td>
                                            <div class="dropdown no-arrow">
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

                                                    <a hx-get="<?php echo base_url('invitation.php/New_user/delete/'.$dep_val['ID']); ?>" 
                                                        hx-target="#reponse" class="dropdown-item"
                                                        hx-confirm="Are you sure you wish to Deactivate this account?" 
                                                        <i
                                                        class="fas fa-trash-alt mr-1"></i>Deactivate&nbsp;&nbsp;&nbsp;
                                                    </a>

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
                                    <!--<th>Status</th>-->
                                    <th>Entry Date</th>
                                    <th>Action</th>
                                    <!-- <th></th> -->
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
                                    <td>

                                    </td>

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
    $('.statuswidget').change(function() {
        var dep_st = $(this).val();
        var attr_id = $(this).attr('id');
        $.ajax({
            url: '<?=base_url()?>invitation.php/New_user/statuschange',
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
            url: '<?=base_url()?>invitation.php/New_user/deletedstatuschange',
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