
function makerequest(ref_id) {
	//alert(ref_id);
  var xhttp;
  if (ref_id.length == 0) { 
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
		 document.getElementById('c_button').disabled=false; 
	  }
	  if(xhttp.responseText=='Not Match Ref. ID'){
		 document.getElementById('c_button').disabled=true; 
	  }
    }
  }
  
   serverpage='ref_member_check.php?ref_id='+ref_id;
   //alert(serverpage);
	xhttp.open("GET",serverpage);
    xhttp.send();   
}
