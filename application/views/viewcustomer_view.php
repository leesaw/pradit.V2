<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('header_view'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/datepicker.css" >
<style type="text/css">
.datepicker {z-index: 1151 !important;}
</style>
</head>

<body>
<div id="wrapper">
	<?php $this->load->view('menu'); ?>
	
	
	
	<div id="page-wrapper">
		<div class="row">
            <div class="col-lg-8">
                <h3 class="page-header">ข้อมูลลูกค้า</h3>
            </div>
        </div>
		
		<div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
					<div class="panel-heading"><strong>แสดงข้อมูลลูกค้า</strong></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
								<?php if(is_array($cus_array)) {
									foreach($cus_array as $loop){
										$cusid = $loop->id;
								?>
                                    <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">รหัสลูกค้า</label>
                                            <input type="text" class="form-control" name="customerid" id="customerid" value="<?php echo $loop->customerID; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
									<div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess">คำนำหน้า</label>
                                        <input type="text" class="form-control" name="title" id="title" value="<?php echo $loop->title; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
							
							<div class="col-md-8">
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">ชื่อลูกค้า</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $loop->name; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">ที่อยู่</label>
                                            <textarea class="form-control" name="address" id="address" rows="3" style="font-weight: bold;" readonly><?php echo $loop->address; ?></textarea>
                                    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
									<div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess">จังหวัด</label>
                                        <input type="text" class="form-control" name="province" id="province" value="<?php echo $loop->province_name; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
							<div class="col-md-3">
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">รหัสไปรษณีย์</label>
											<input type="text" class="form-control" name="zipcode" id="zipcode" value="<?php echo $loop->zipcode; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
							<div class="col-md-4">
									<div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess">ภาค</label>
                                        <input type="text" class="form-control" name="part" id="part" value="<?php echo $loop->part; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
									
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">เบอร์โทรศัพท์</label>
											<input type="text" class="form-control" name="telephone" id="telephone" value="<?php echo $loop->telephone; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
							<div class="col-md-4">
									
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">FAX</label>
											
                                            <input type="text" class="form-control" name="fax" id="fax" value="<?php echo $loop->fax; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
							<div class="col-md-4">
									
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">มือถือ</label>
											
                                            <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $loop->mobile; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">ชื่อผู้ติดต่อ</label>
                                            <input type="text" class="form-control" name="contactname" id="contactname" value="<?php echo $loop->contactName; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
							<div class="col-md-4">
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">วงเงินอนุมัติ (Credit)</label>
                                            <input type="text" class="form-control" name="credit" id="credit" value="<?php echo $loop->credit; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">เลขประจำตัวผู้เสียภาษี</label>
                                            <input type="text" class="form-control" name="taxid" id="taxid" value="<?php echo $loop->taxID; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
							<div class="col-md-3">
									<div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess">เงื่อนไขการชำระเงิน</label>
                                        <input type="text" class="form-control" name="status" id="status" value="<?php 
										if($loop->status==0) echo "-";
										elseif($loop->status==1) echo "สด";
										elseif($loop->status==2) echo "เชื่อ";
										?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
							<div class="col-md-3">
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">จำนวนวันเครดิต</label>
                                            <input type="text" class="form-control" name="creditday" id="creditday" value="<?php echo $loop->creditDay; ?>" style="font-weight: bold;" readonly>
                                    </div>
  
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">ราคาสินค้า</label>
                                            <input type="text" class="form-control" name="saleprice" id="saleprice"
											<?php if ($loop->salePrice == 1) echo 'value="ไม่มี VAT"';
												  else if ($loop->salePrice == 2) echo 'value="รวม VAT"';
												  else if ($loop->salePrice == 3) echo 'value="ส่วนลด"';
												  else { echo ""; }
											?> style="font-weight: bold;" readonly>
                                    </div>
							</div>
							<div class="col-md-4">
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">ส่วนลด</label>
                                            <input type="text" class="form-control" name="discount" id="discount" value="<?php echo $loop->discount." %"; ?>" style="font-weight: bold;" readonly>
                                    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
									<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">หมายเหตุ</label>
											<textarea class="form-control" name="note" id="note" rows="3" style="font-weight: bold;" readonly><?php echo $loop->note; ?></textarea>
                                    </div>
							</div>
						</div>
						<?php } } ?>
						<div class="row">
							<div class="col-md-6">
									<button type="button" class="btn btn-warning" onClick="window.location.href='<?php echo site_url("managecustomer"); ?>'"> กลับไปหน้าจัดการข้อมูลลูกค้า </button>
							</div>
							<div class="col-md-6">
							<a data-toggle="modal" data-target="#myModal" class="btn btn-primary" data-title="View" data-toggle="tooltip" data-target="#view" data-placement="top" rel="tooltip" title="เลือกช่วงวันที่" data-backdrop="static" data-keyboard="false">Export Excel สินค้าที่ซื้อ</a>
						
									<!-- datepicker modal-->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									
									<div class="modal-dialog modal-md">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title">	                 	
													<strong>เลือกช่วงวันที่ต้องการ</strong> 
												</h4>
											</div>            <!-- /modal-header -->
											<div class="modal-body">
												<form class="form-inline" role="form" action="<?php echo site_url("managestock/excelbetweendate_customer"); ?>" method="POST" >
												<div class="form-group">
													<label for="">เริ่ม: </label>
													<input type="hidden" name="cusid" value="<?php echo $cusid; ?>">
													<input type="text" class="form-control" id="startdate" name="startdate" />
												</div>
												<div class="form-group">
													<label for=""> สิ้นสุด :</label>
													<input type="text" class="form-control" id="enddate" name="enddate" />
												</div>
													
											</div>            <!-- /modal-body -->
										
											<div class="modal-footer">
													<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> ตกลง</button>			
													<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ปิด</button>
											</div> 	
											</form>								
										</div>
									</div>
								</div>
							</div>
						</div>
								
									
						</form>

					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<?php $this->load->view('js_footer'); ?>
<script src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-datepicker-thai.js"></script>
<script src="<?php echo base_url(); ?>js/locales/bootstrap-datepicker.th.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function()
    {
		get_datepicker("#startdate");
		get_datepicker("#enddate");
    });
	
function get_datepicker(id)
{

	$(id).datepicker({ language:'th-th',format:'dd/mm/yyyy'
		    });

}
</script>
<script>
$(".alert-message").alert();
window.setTimeout(function() { $(".alert-message").alert('close'); }, 2000);
</script>
</body>
</html>