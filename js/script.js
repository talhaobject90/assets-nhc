


$(document).ready(function() {

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
    is=$("#istemara_expiry_date").val();
    $("#istemara_expiry_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",is)
    
   
    insu=$("#insurance_expiry_date").val();
    $("#insurance_expiry_date").datepicker({format:"yyyy/m/d"}).datepicker("setDate",insu)
    
    
    
});