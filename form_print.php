
<?php 

include_once('header-pop.php');
include_once('db_connect.php');


if(isset($_POST['print_ticket']))
{
	
	$view_id = $_POST['view_id'];
	$expiry_type = $_POST['expiry_type'];
	$expiry_date = $_POST['expiry_date'];
	
	
	
	
	
      $edit_query = "SELECT `".$assets_table."`.`id`,
  												`".$assets_table."`.`name`, 
  														`".$assets_table."`.`vehicle_number`,  
  																`".$assets_table."`.`location`
  		
  		  FROM `".$assets_table."` INNER JOIN `".$tickets_table."` ON `".$tickets_table."`.`asset_id` = `".$assets_table."`.`id` AND `".$tickets_table."`.`id` =".$view_id.";";
$edit_query = mysql_query($edit_query);
while($rows = mysql_fetch_array($edit_query)) {
	
	$asset_det['id'] = $rows['id'];
	$asset_det['name'] = $rows['name'];
	$asset_det['vehicle_number'] = $rows['vehicle_number'];
	$asset_det['location'] = $rows['location'];
}


?>
<script type="text/javascript">
$(document).ready(function(){
	$(".button-back").click(function(){
		
		var url=$(".view_id").val();
		
		window.location.replace('ticket_view.php?view='+url);
		
	});
});
 </script>

<style>

.print_container img
{
	width:800px;margin:0 auto;height:auto;border:1px solid black;
}

.print_container h2
{
	margin:0 auto;
	font-weight: bold;
	font-size: 25px;
}
.second-table
{
	width:100%;
	
}
.second-table td
{
	width:200px !important;
	border:1px solid black !important;
}
.second-table td
{
	text-align:center;
}
.second-table textarea
{
width:100%;
height:100px;
}
.border
{
	border:1px solid black !important;
}
.border td
{
border:none !important;
border-left: 1px solid black !important;
border-right: 1px solid black !important;
}
.border b
{
float:left;	
}
.border span
{
float:right;	
}

@media print {
* { -webkit-print-color-adjust: exact; }
    .print_form input
    {
    border:none !important;
    }
    .print_form textarea
    {
    border:none !important;
    }
    .background
	{
	 background: black;
	color:#fff !important;
	font-weight:bold;
	}
	.button-success,.button-back
	{
	display:none !important;
	}
	.header-image
	{
	display:none !important;
	}
}
.background
{
background-color:black !important;
color:#fff !important;
font-weight:bold;
}
.button-success,.button-back
{
color: white;
border-radius: 4px;
text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
}
.button-success,.button-back {
background: rgb(28, 184, 65); /* this is a green */
width: 125px;
height: 30px;
        }
.container
{
max-width:100%;
}      
  
</style>

<div style="" class="print_container">
<div style="margin:0 auto;width:800px;">
<img class="form-control header-image" src="images/logo.jpg" style="width:800px;">
</div>
<hr/>
<form method="post" name="print_form" class="print_form">
<input type="hidden" name="hidden" value="<?php echo $view_id; ?>" class="view_id">

<h2 style="margin:0 auto;margin-left:240px;font-weight: bold;font-size: 25px;text-transform:uppercase;"><?php echo $expiry_type;?> TICKET</h2>
<div class="instruction">
<p><b>Instructions: (1)</b> This VEHICLE /EQUIPMENT is due for Istemara Expiry renewal (2) This ticket shall remain until the action is completed and the system is updated with the new date. </p>
</div>
<table class="print-table">
<tr style="background-color:black;color:white" class="background">
<th colspan="4" style="color:#fff !important">
SECTION 1 - TO BE COMPLETED BY REQUESTER
</th>
</tr>
<tr>
<td>1. ASSET NAME:</td>
<td><input type="text" name="asset_name" value="<?php echo $asset_det['name'];?>" ></td>
<td>(Please select appropriate Check box)<br/>
5. MAINTENANCE  REQUIREMENT(if applicable):
</td>
</tr>
<tr>
<td rowspan="2">2. ASSET ID:</td>
<td rowspan="2"><input type="text" name="asset_id" value="<?php echo $asset_det['id'];?>" ></td>
<td>REPLACEMENT</td>
<td><input type="checkbox" name="replacement" value="" ></td>
<tr>

<td>TEMPORARY</td>
<td><input type="checkbox" name="temporary" value="" ></td>
</tr>

</tr>
<tr>
<td rowspan="3">3. PLATE NUMBER:</td>
<td rowspan="3"><input type="text" name="plate_number" value="<?php echo $asset_det['vehicle_number'];?>" ></td>
<tr>
<td>PERMANENT</td>
<td><input type="checkbox" name="permanant" value="" ></td>
</tr>
<tr>
<td>TRANSFER</td>
<td><input type="checkbox" name="transfer" value="" ></td>
</tr>
</tr>
<tr>
<td>4. ASSET LOCATION:</td>
<td><input type="text" name="asset_location" value="<?php echo $asset_det['location'];?>" ></td>
<td>6. EXPIRY DATE:</td>
<td><input type="text" name="asset_location" value="<?php echo $expiry_date;?>" class=""></td>
</tr>
<tr>
<th colspan="4">7. TABLE A: Complete Table A and ensure to provide the specific craft(s) and in accordance with site requirement. Please use another sheet if necessary.</th>
</tr>
</table>
<table class="second-table">
<tr class="background">
<td rowspan="2" style="color:#fff !important;border:1px solid #fff !important;">S NO.</td>
<td rowspan="2" style="color:#fff !important;border:1px solid #fff !important;">ACTION REQUIRED</td>
<td colspan="2" style="color:#fff !important;border:1px solid #fff !important;">REQUIRED</td>
<td colspan="2" style="color:#fff !important;border:1px solid #fff !important;">ACTION COMPLETED</td>
<td rowspan="2" style="color:#fff !important;border:1px solid #fff !important;">REMARKS</td>
</tr>
<tr class="background">
<td style="color:#fff !important;border:1px solid #fff !important;">YES</td>
<td style="color:#fff !important;border:1px solid #fff !important;">NO</td>
<td style="color:#fff !important;border:1px solid #fff !important;">FROM</td>
<td style="color:#fff !important;border:1px solid #fff !important;">TO</td>
</tr>

<tr>
<td>1</td>
<td><input type="text" name="text1" value=""  maxlength="20"></td>
<td><input type="checkbox" name="check1" value="yes"></td>
<td><input type="checkbox" name="check1" value="no"></td>
<td><input class="client_sticker_date"  name="client_sticker" value="" type="text"></td>
<td><input class="client_sticker_date" name="client_sticker" value="" type="text"></td>
<td><input type="text" name="text2" value="" maxlength="20"></td>
</tr>
<tr>
<td>2</td>
<td><input type="text" name="text1" value="" maxlength="20"></td>
<td><input type="checkbox" name="check1" value="yes"></td>
<td><input type="checkbox" name="check1" value="no"></td>
<td><input class="client_sticker_date" name="client_sticker" value="" type="text"></td>
<td><input class="client_sticker_date" name="client_sticker" value="" type="text"></td>
<td><input type="text" name="text2" value="" maxlength="20"></td>
</tr>
<tr>
<td>3</td>
<td><input type="text" name="text1" value="" maxlength="20"></td>
<td><input type="checkbox" name="check1" value="yes"></td>
<td><input type="checkbox" name="check1" value="no"></td>
<td><input class="client_sticker_date" name="client_sticker" value="" type="text"></td>
<td><input class="client_sticker_date" name="client_sticker" value="" type="text"></td>
<td><input type="text" name="text2" value="" maxlength="20"></td>
</tr>
<tr>
<td>4</td>
<td><input type="text" name="text1" value="" maxlength="20"></td>
<td><input type="checkbox" name="check1" value="yes"></td>
<td><input type="checkbox" name="check1" value="no"></td>
<td><input class="client_sticker_date" name="client_sticker" value="" type="text"></td>
<td><input class="client_sticker_date" name="client_sticker" value="" type="text"></td>
<td><input type="text" name="text2" value="" maxlength="20"></td>
</tr>
<tr>
<th colspan="8">8. REASON (Please specify, justify and explain why it is necessary to replacement): </th>
</tr>
<tr>
<td colspan="9"><textarea>
</textarea></td>
</tr>
</table>

<table>
<tr>
<th colspan="8">9. SYSTEM UPDATED BY:</th>
</tr>
<tr>
<td>NAME</td>
<td><input type="text" name="update_name" value="" maxlength="20" style="width:300px"></td>
</tr>
<tr>
<td>DATE</td>
<td><input type="text" name="update_date" value="" class="client_sticker_date"></td>
</tr>
<tr>
<td>SIGNATURE</td>
<td><input type="text" name="update_signature" value="" maxlength="20" style="width:300px"></td>
</tr>
</table>
<table class="second-table border">
<tr style="background-color:black;color:white" class="background">
<th colspan="4" style="border:1px solid black;color:#fff !important;">
SECTION 2 - VERIFIED BY:
</th>
</tr>
<tr>
<td style="font-weight:bold">CENTRAL PLANNING</td>
<td style="font-weight:bold">PROJECT ENGINEER</td>
<td style="font-weight:bold">MANAGER IN CHARGE</td>
</tr>
<tr>
<td><b>NAME</b><span><input type="text" name="update_name" value="" maxlength="20" style=""></span></td>
<td rowspan="3"><textarea maxlength="50" style=""></textarea></td>
<td><input type="text" name="text1" value="" maxlength="20"></td>
</tr>
<tr>
<td><b>DATE</b><span><input type="text" name="update_name" value="" maxlength="20" style="" class=""></span></td>
<td><input type="text" name="text1" value="" maxlength="20"></td>
</tr>
<tr>
<td><b>SIGNATURE</b><span><input type="text" name="update_name" value="" maxlength="20" style=""></span></td>
<td><input type="text" name="text1" value="" maxlength="20"></td>
</tr>

</table>
<div style="height:50px;"></div>

<div style="margin:0 auto;width:425px;">
<a href="www.nhc-ksa.com" colspan="3" style="text-align:center;width:100%;margin-left:115px;font-weight:bold">
www.nhc-ksa.com
</a><br/>

<span colspan="3" style="text-align:center;width:100%;font-weight:bold">
Jeddah, K S A  Tel:  + 966 012 6140266   Fax:  + 966 012 6522770
</span><br/>
<input type="button" name="print" value="print" onclick="window.print();" style="margin-left:65px;" class="button-success">
<input type="button" name="back" value="Back" onclick="" style="margin-left:15px;" class="button-back">
</div>


</form>

</div>
<div style="height:25px;">
</div>
<?php 


}
  include_once('footer-pop.php');
?>