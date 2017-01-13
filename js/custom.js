
function makerequest(email_address) {
	
  var xhttp;
  if (email_address.length == 0) { 
   var av = document.getElementById("res").innerHTML = "";
   //alert(av);
    return;
  }
  xhttp = new XMLHttpRequest();
  //alert(xhttp);
    xhttp.onreadystatechange = function() {
	  //alert(xhttp.readyState);
	  //alert(xhttp.status);
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("res").innerHTML = xhttp.responseText;
	  
	  if(xhttp.responseText=='Already exist!'){
		 document.getElementById('c_button').disabled=true; 
	  }
	  if(xhttp.responseText=='Avilable'){
		 document.getElementById('c_button').disabled=false; 
	  }
    }
  }
  
   serverpage='email_check.php?email='+email_address;
	xhttp.open("GET",serverpage);
    xhttp.send();   
}
