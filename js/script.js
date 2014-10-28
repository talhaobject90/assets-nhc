


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
});