<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
?>
	<div class="col-md-9 col-lg-10" id="content">
	<div class="row">
	<div class="canvas col-md-12" id="main-canvas">
	<form accept-charset="UTF-8" action="report_gen.php" class="form-horizontal"
			id="purchase-main-form" method="post"  >
				
				
			<section class="form col-sm-9" id="purchase">
<div class="row">
						<div class="page-header">

<h1>Reports</h1>
</div>
					</div>
						<div class="row">
							<div class="page-content col-sm-12">
			 
 
									<div class="form-group col-sm-8 item-qty">
									<label for="asset_id_div"> Sort assets report by   </label> 
											<select class="form-control" id="sort_select" name="sort_by">
															<option value="">- Sort by -</option>
																														<option value="name">Asset name</option>
																														<option value="location">Asset location</option>
																															<option value="custodian" >Custodian</option>
																															<option value="vendor">Manufacturer</option>
 																															<option value="istemara_expiry">Istemara Expiry </option>
 																															<option value="preventive_maintenance">Preventive Maintenance </option>
																															<option value="insurance_expiry">Insurance Expiry</option>
																															<option value="tuv_sticker">TUV Sticker</option>
																															<option value="client_sticker">Client Sticker</option>
																															<option value="mot_license_expiry">MOT License Expiry </option>
														</select>
								</div>
								 	<div class="form-group col-sm-8 item-qty">
							
									<select class="form-control" id="order_select" name="order" >
																															<option value="ASC">Ascending</option>
																															<option value="DESC">Descending </option>
														</select>
														 								</div>
								</div>
							</div>
 <input class="btn btn-default btn-primary"  type="submit" name="generate" value="Generate Report"  >
	 <a href="dashboard.php"><input class="btn btn-default  "  type="button"  value="Cancel"   style=" margin-left:10px;font-weight:bold;"></a>
							</section>
							</form>
						</div>
					
			<div class="clear">
			</div>
	
	</div>
	</div>
	
 

<?php 
include_once 'footer-pop.php';

  
