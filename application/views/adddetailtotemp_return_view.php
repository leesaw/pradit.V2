<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('header_view'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.fancybox.css" >
</head>

<body>

		<div class="row">
            <div class="col-lg-5">
                <div class="panel panel-default">
					<div class="panel-heading"><strong>เลือกสาขา และ สถานะสินค้า</strong></div>
					<?php if ($this->session->flashdata('showresult') == 'success') echo '<div class="alert-message alert alert-success"> ระบบทำการเพิ่มข้อมูลเรียบร้อยแล้ว</div>'; 
						  else if ($this->session->flashdata('showresult') == 'fail') echo '<div class="alert-message alert alert-danger"> ไม่มี Barcode นี้ในระบบ</div>';
					
					?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <?php 
									$attributes = array('class' =>'myform', 'id' => 'myform');
									echo form_open('managestock/savetemptostock_return', $attributes); ?>
                                    <div class="form-group">
                                    	<label>เข้าสต็อก สาขา *</label>
                                        <select class="form-control" name="branchid" id="branchid">
										<?php 	if(is_array($branch_array)) {
												foreach($branch_array as $loop){
													echo "<option value='".$loop->id."'>".$loop->name."</option>";
										 } } ?>
                                        </select>
                                    </div>

							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
                                    <div class="form-group">
                                            <label>เลขที่ใบส่งของชั่วคราว ของสินค้าที่คืน</label>
											<input type="text" class="form-control" name="billid" id="billid">
                                    </div>
							</div>
						</div>
		
						<div class="row">
							<div class="col-lg-4">
                                    <div class="form-group">
                                            <label>รายละเอียด</label>
											<textarea class="form-control" name="detail" id="detail" rows="2"></textarea>
                                    </div>
							</div>
						</div>
		
						<div class="row">
							<div class="col-lg-6">
									<button type="submit" class="btn btn-primary btn-lg">  บันทึก  </button></a>
									<button type="button" id="cancel" class="btn btn-warning btn-lg">  ยกเลิก  </button></a>
							</div>
						</div>
								
						<?php echo form_close(); ?>


					</div>
				</div>
			</div>	
		</div>

<br><br><br><br><br><br>
<?php $this->load->view('js_footer'); ?>
<script src="<?php echo base_url(); ?>/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>/js/bootbox.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.fancybox.js"></script>
<script type="text/javascript">
$(document).ready(function() {
     $("#cancel").click(function() {
             parent.$.fancybox.close();
     });
	 
});
</script>
</body>
</html>