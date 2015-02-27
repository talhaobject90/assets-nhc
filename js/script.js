


$(document).ready(function() {
	
	// for table pagination
	    jQuery('.pagination_table').dataTable();
 
	
	/*
	 * #007
	 * To set set username /password form with identical validation
	 * 
	 */
	$('#identicalForm').bootstrapValidator({
        feedbackIcons: {
            
        },
        fields: {
            password: {
                validators: {
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
	
	// END OF 007 ================================================
	
	// script for mandatory fields 
	jQuery("#asset_category").change(function(){
		var assetcat = jQuery("#asset_category").val();
		if(assetcat == 'Vehicles'){
jQuery("#istemara_expiry_date").attr("required" ,"required");
jQuery("#insurance_expiry_date").attr("required" ,"required");
jQuery("#preventive_maintenance_date").attr("required" ,"required");
jQuery("#tuv_sticker_date").attr("required" ,"required");
jQuery("#client_sticker_date").attr("required" ,"required");
jQuery("#mot_license_expiry_date").attr("required" ,"required");
jQuery("#mvpi_expiry_date").attr("required" ,"required");
	}
		
		if(assetcat == 'Equipment'  || assetcat == 'Tools'){
			
			jQuery("#istemara_expiry_date").removeAttr("required");
			jQuery("#insurance_expiry_date").removeAttr("required");
			jQuery("#preventive_maintenance_date").removeAttr("required");
			jQuery("#client_sticker_date").removeAttr("required");
			jQuery("#mot_license_expiry_date").removeAttr("required");
			jQuery("#mvpi_expiry_date").removeAttr("required");
			
			jQuery("#tuv_sticker_date").attr("required" ,"required");
		}
	})
	//=========================================================
	
	
	// SCRIPT TO RELOAD THE IFRAME CONTENT;
	
	jQuery("#uploads_iframe_button").click(function(){
		url = jQuery("#uploads_iframe").attr('src')
		window.frames["uploads_iframe"].location = url;
	})
	//============================================
	
 

 
    
    
    
     // CODE FOR ASSIGNING DATE PICKER 
    
    
    is=$("#istemara_expiry_date").val(); // Load value into datepicker text box
    $("#istemara_expiry_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",is) // assigns as datepicker
    
   
    insu=$("#insurance_expiry_date").val();
    $("#insurance_expiry_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",insu)
    
     prev=$("#preventive_maintenance_date").val();
    $("#preventive_maintenance_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",prev)
    
     tuv=$("#tuv_sticker_date").val();
    $("#tuv_sticker_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",tuv)
    
     client=$("#client_sticker_date").val();
    $("#client_sticker_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",client)
    
     motl=$("#mot_license_expiry_date").val();
    $("#mot_license_expiry_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",motl)
    
     mvpi=$("#mvpi_expiry_date").val();
     $("#mvpi_expiry_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",mvpi)
    
    
    acqu=$("#date_acquired_date").val();
    $("#date_acquired_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",acqu)
    
    sold=$("#date_sold_date").val();
    $("#date_sold_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",sold)
    
    //===============================================================
    
    
    // To clear selected file for upload
    $("#remove_button").click(function(event){
    	event.preventDefault();
    	  $("#fileToUpload").replaceWith('<input type="file" name="fileToUpload" id="fileToUpload" ><br>');
    	});
    	//========================================
    
    
    $(".client_sticker_date").datepicker({format:"yyyy/mm/d"}).datepicker("setDate",client)
    
    
    
    
    

    
     
     
    
    
    
});