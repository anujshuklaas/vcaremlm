
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=admin_url()?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<?php
    $row=$admin->result()[0];
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="col-md-12">
                    <?php $this->load->view('admin/common/alert'); ?>
                </div>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form role="form" action="<?=admin_url()?>main/saveProfileDetails" id="serviceForm" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                    <div class="form-group row" style="display: none;">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Username</label>
                     
                          <input type="hidden" name="userId" value="<?php if($row){echo $row->id;} ?>">
                          <input type="text" class="form-control" name="username" value="<?php if($row){echo $row->username;} ?>" >
                      
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name"  value="<?php if($row){echo $row->name;} ?>" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php if($row){echo $row->email;} ?>" placeholder="Enter Email">
                  </div>
                    
                    <div class="form-group">
                    <label for="exampleInputPassword1">Mobile No.</label>
                    <input type="text" class="form-control" name="mobile"  value="<?php if($row){echo $row->mobile;} ?>"  placeholder="Enter Mobile No.">
                  </div>
                   
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date Of Birth</label>
                        <input type="text" name="dob" class="form-control"  value="<?php if($row && $row->dob){echo date('d/m/Y',strtotime($row->dob));} ?>">
                    </div>
                    

                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Gender</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type='radio' name="gender" value="Male" <?php if($row && $row->gender=='Male'){echo 'checked';} ?> class="form-control1" /> Male<br>
                            <input type='radio' name="gender" value="Female" <?php if($row && $row->gender=='Female'){echo 'checked';} ?> class="form-control1" /> Female
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="<?php if($row){echo $row->address;} ?>" >
                    </div>
                        <input type="hidden" name="oldImage" value="<?php if($row){echo $row->image;} ?>">
                        
                    
                    
                  <div class="form-group">
                    <label for="exampleInputFile">Profile Pic</label>
                    <div class="input-group">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="batchImage" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="button" onclick="return saveProfile();"  class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
              </form>
            </div>
            

          </div>
          <!--/.col (left) -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <?php $this->load->view('admin/common/footer'); ?>
 
<script>
    $('#myDatepicker1').datetimepicker({
        format: 'DD-MM-YYYY'
    });
    
    function saveProfile()
    {
        if(!$('input[name="username"]').val())
        {
            alertMeggase('Error!','Please enter the username name.','error','no');
            return false;
        }else if(!$('input[name="name"]').val())
        {
            alertMeggase('Error!','Please enter the your name.','error','no');
            return false;
        }else if(!$('input[name="email"]').val())
        {
            alertMeggase('Error!','Please enter the email.','error','no');
            return false;
        }else if($('input[name="email"]').val()!='' && !IsEmail($('input[name="email"]').val()))
        {
            alertMeggase('Error!','Please enter the valid email.','error','no');
            return false;
        }else if(!$('input[name="mobile"]').val())
        {
            alertMeggase('Error!','Please enter the mobile no.','error','no');
            return false;
        }else if(!$('input[name="gender"]:checked').val())
        {
            alertMeggase('Error!','Please choose the gender.','error','no');
            return false;
        }else{        
            checkAdminUserNameIfExists($('input[name="email"]').val(),'yes');
        }
    }
    
    function checkAdminUserNameIfExists(username,action)
    {
        $.post('<?=admin_url()."checkUserNameIfExists"?>',{
            userId:'<?=$this->uri->segment(3)?>',
            username:username,
        },function(data){
            var res=data.split('^');
            if(res[1]=='exist')
            {
                alertMeggase('Error!','This email id is already registered with us.','error','no');
                return false;
            }else{
                if(action=='yes')
                {
                    $('#serviceForm').submit();
                }
            }
        });
    }
    
</script>
