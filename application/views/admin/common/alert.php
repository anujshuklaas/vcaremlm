<?php if($this->session->flashdata('success')){?>
	<div class="alert alert-success alert-dismissible">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  <strong>Success!</strong> <?=$this->session->flashdata('success')?>.
	</div>
<?php }else if($this->session->flashdata('error')){ ?>
        <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong> <?=$this->session->flashdata('error')?>.
        </div>
<?php } ?>