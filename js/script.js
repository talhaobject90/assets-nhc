


$(document).ready(function() {
	
	/*
	 * This code is not used actually
	 * 
	 */

    $("#add_expiry_button").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "ajax.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){
        	alert(response);
            //$("#responsecontainer").html(response); 
            //alert(response);
        }

    });
});
    
    
    
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
    
    
    acqu=$("#date_acquired_date").val();
    $("#date_acquired_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",acqu)
    
    sold=$("#date_sold_date").val();
    $("#date_sold_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",sold)
    
    
    
    
     
    
    
    
});