
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?=$pageTitle?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?=$pageTitle?></h3>
              <a href="<?=base_url()?>category/addEditCategory" class="btn btn-warning" style="float: right;"><i class="fas fa-plus"></i> Add Category</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Gender</th>
                  <th>Status</th>
                  <th>Added Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        if($users->num_rows())
                        {
                            $i=1;
                            foreach($users->result() as $row):
                                
                                $productsId=$row->id;
                                if($row->status==1)
                                {
                                    $StatusText='<label class="label label-success">Active</label>';
                                    $Buttons='<a href="javascript:void(0)" onclick="return updateStatus('.$productsId.',0);" class="btn btn-danger"><i class="fas fa-thumbs-down"> </i></a>';
                                }else{
                                    $StatusText='<label class="label label-danger">Deactive</label>';
                                    $Buttons='<a href="javascript:void(0)" onclick="return updateStatus('.$productsId.',1);" class="btn btn-primary"><i class="fas fa-thumbs-up"> </i></a>';
                                }
                                
                                $Buttons .='&nbsp;<a href="'.base_url().'category/addEditCategory/'.$productsId.'" class="btn btn-success"><i class="fas fa-pencil-alt"> </i></a>';
                               $image=explode(',',$row->images)[0];
                                
                                $imageUrl='<img src="'.base_url().'assets/images/category/'.$image.'" style="width:150px;height:100px;"/>';
                    ?>
                    
                        <tr>
                            <td><?=$i?></td>
                            <td><?=$row->srNum?></td>
                            <td><?=$row->name?></td>
                            <td><?=$imageUrl?></td>
                            <td><?=$StatusText?></td>
                            <td><?='<b>Date : </b>'.date('d M, Y',strtotime($row->createdDate)).'<br><b>Time : </b>'.date('H:i',strtotime($row->createdDate))?></td>
                            <td><?=$Buttons?></td>
                          </tr>
                    
                    <?php
                    $i++;
                            endforeach;
                        }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Sr. No.</th>
                  <th>Cat. Code</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Added Date</th>
                  <th>Action</th>
                </tr>
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <?php $this->load->view('common/footer'); ?>
  <?php $this->load->view('common/datatables'); ?>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
    function updateStatus(userId,status)
    {
        if(status=='1')
        {
            var textMessage="Are you sure want to activate this record?";
            var text='activated';
        }else{
            var textMessage="Are you sure want to deactivate this record?";
            var text='deactivated';
        }
        swal({
          title: 'Warning!',
          text: textMessage,
          icon: 'warning',
          buttons:true,
        }).then((willDelete) => {
            if(willDelete)
            {
                waitForProcess();
                $.post('<?=base_url()?>dashboard/updateStatus',{
                  userId:userId,
                  status:status,
                  text:'categories',
                },function(data){
                    var res=data.split('^');
                    if(res[1]=='success')
                    {
                        alertMeggase('Success!','Selected record has been '+text+' successfuly.','success','yes');
                    }else{
                        alertMeggase('Error!','Something went wrong, Please try again.','error','no');
                    }
                });
            }
        });
    }
</script>