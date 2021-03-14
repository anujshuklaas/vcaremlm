<link rel="stylesheet" href="<?=admin_assets_url()?>plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?=admin_assets_url()?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$pageTitle?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=admin_url()?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active"><?=$pageTitle?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<?php
if($settings->num_rows()==1)
{
    $row=$settings->result()[0];
}else{
    $row=0;
}
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
                <h3 class="card-title"><?=$pageTitle?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- Select2 -->
 
              <form role="form" action="<?=admin_url()?>saveGeneralSettingDetails" id="serviceForm" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                    <div class="form-group row" style="display: none;">                    
                          <input type="hidden" name="recordId" value="<?=$row->id?>">                      
                    </div>
                                            
                  <div class="form-group">
                    <label for="exampleInputEmail1">Project Name</label>
                    <input type="text" class="form-control" name="projectTitle"  value="<?php if($row){echo $row->projectTitle;} ?>" placeholder="Enter Project Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Contact Number</label>
                    <input type="text" class="form-control" name="contactNo" value="<?php if($row){echo $row->contactNo;} ?>" placeholder="Enter Contact Number">
                  </div>
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Branch Office</label>
                    <input type="text" class="form-control" name="branchOffice" value="<?php if($row){echo $row->branchOffice;} ?>" placeholder="Enter Address">
                  </div>
                    
                    <div class="form-group">
                    <label for="exampleInputPassword1">Head Office</label>
                    <input type="text" class="form-control" name="headOffice" value="<?php if($row){echo $row->headOffice;} ?>" placeholder="Enter UPI Id">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Email Id</label>
                    <input type="text" class="form-control" name="supportMail" value="<?php if($row){echo $row->supportMail;} ?>" placeholder="Enter Email Id">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Whatsup No</label>
                    <input type="text" class="form-control" name="whatsappNo" value="<?php if($row){echo $row->whatsappNo;} ?>" placeholder="Enter Whatsup No">
                  </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                          <button type="button" onclick="" class="btn btn-primary">Cancel </button>
                          <button type="submit" class="btn btn-success">Submit</button>
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
 <script src="<?=admin_assets_url()?>plugins/select2/js/select2.full.min.js"></script>
<script>
   $('.select2bs4').select2({
      theme: 'bootstrap4'
    })   
</script>
