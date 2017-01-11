function frmValidation(action)
     {
          var theform = document.forms[0];
          if(action == "login")
		  {
			  
			  if(theform.username.value == ""||theform.username.value == "Username")
			  {
				  
				 alert("Please enter user name.");  
				 return false;
				  
				  }
			  else if(theform.password.value == ""||theform.password.value == "Password")
			  {
				  
				 alert("Please enter password.");  
				 return false;
				  
				  }
				 else{
					 
					   return true;
					 } 
			  
			  
			  }
	 }


function addRow()
     {
          // grab the element, i.e. the table your editing, in this we're calling it 
          // 'mySampleTable' and it is reffered to in the table further down on the page 
          // with a unique of id of you guessed it, 'mySampleTable'
          var tbl = document.getElementById('mySampleTable');
          // grab how many rows are in the table
		  var lastRow = tbl.rows.length;

          // if there's no header row in the table (there should be, code at least one 
          //manually!), then iteration = lastRow + 1
          var iteration = lastRow;
          // creates a new row
          
		  var row = tbl.insertRow(lastRow);
		  
          var celldesignation = row.insertCell(0);
          var designation = document.createElement('input');
          designation.type = 'text';
          designation.name = 'name[]' //+ iteration;
          designation.id = 'name' + iteration;
          designation.size = 20;
          celldesignation.appendChild(designation);
		  
          
		  
		   var cellnomineerel = row.insertCell(1);
          var nomineerel = document.createElement('input');
          nomineerel.type = 'text';
          nomineerel.name = 'relation[]' //+ iteration;
          nomineerel.id = 'relation' + iteration;
          nomineerel.size = 20;
          cellnomineerel.appendChild(nomineerel);
          
		  var cellorgcountry = row.insertCell(2);
          var orgcountry = document.createElement('textarea');
          orgcountry.name = 'address[]' + iteration;
          orgcountry.id = 'address' + iteration;
          cellorgcountry.appendChild(orgcountry);
          
		  
		  var cellRight = row.insertCell(3);
          var el = document.createElement('input');
          el.type = 'text';
          el.name = 'amount[]' + iteration;
          el.id = 'amount' + iteration;
          el.size = 10;
          cellRight.appendChild(el);
          
		  var cellclear = row.insertCell(4);
          var nombd = document.createElement('input');
          nombd.type = 'text';
          //clear.name = '';
		  nombd.name = 'nomineebd[]';// + iteration;
          nombd.id = 'nomineebd' + iteration;
          cellclear.appendChild(nombd);
		  //////////////////////////////////start todate  
          var celltodate = row.insertCell(5);
          var memnom = document.createElement('input');
          memnom.type = 'file';
          memnom.name = 'nomineephoto[]';
          //behalf.id = 'behalf';// + iteration;
          memnom.size = 10;
		  celltodate.appendChild(memnom);
		  //celltodate.appendChild(divTag);
          
		  /*var celldiv = row.insertCell(6);
           var hidden = document.createElement('input');
               hidden.type = 'hidden';
               hidden.name = 'number' + iteration;
               hidden.value = 'name' + iteration;
         celldiv.appendChild(mydiv);*/
          
     }

   
	 function removeRow()
     {
          // grab the element again!
          var tbl = document.getElementById('mySampleTable');
          // grab the length!
          var lastRow = tbl.rows.length;
          // delete the last row if there is more than one row!
          if (lastRow > 2) tbl.deleteRow(lastRow - 1);
     }

function ajaxfunction(action)
{

if(action == "pckadd")
{
var ajaxshowdivid = "showpckid";	
var project =document.getElementById('project').value;
var queryString = "?project=" + project + "&action=" + action;
}
else if(action == "districtadd")
{
var ajaxshowdivid = "showdistrictid";	
var divisionid =document.getElementById('divisionid').value;
var queryString = "?divisionid=" + divisionid + "&action=" + action;
}
else if(action == "thanaadd")
{
var ajaxshowdivid = "showthanaid";	
var thanaid =document.getElementById('thanaid').value;
var queryString = "?thanaid=" + thanaid + "&action=" + action;
}
else if(action == "unionadd")
{
var ajaxshowdivid = "showunionid";	
var thanaId =document.getElementById('thanaId').value;
var queryString = "?thanaId=" + thanaId + "&action=" + action;
}
else if(action == "worddistadd")
{
var ajaxshowdivid = "showthanaid";	
var districtid =document.getElementById('districtid').value;
var queryString = "?thanaid=" + thanaid + "&action=" + action;
}
else if(action == "wordthanaadd")
{
var ajaxshowdivid = "showunionid";	
var thanaid =document.getElementById('thanaId').value;
var queryString = "?thanaid=" + thanaid + "&action=" + action;
}
else if(action == "wordwordadd")
{
var ajaxshowdivid = "showwordid";	
var unionId =document.getElementById('unionId').value;
var queryString = "?unionId=" + unionId + "&action=" + action;
}
else if(action == "fucslprofitexpireddatecal")///fucsl profit and expired date calculation
{
var ajaxshowdivid = "fucslprofitcalid";	
var itemsid =document.getElementById('itemsid').value;
var probperiod =document.getElementById('probperiod').value;
var joiningdate =document.getElementById('joiningdate').value;
var depositamt = document.getElementById('depositamtid').value;
var queryString = "?probperiod=" + probperiod + "&joiningdate=" + joiningdate + "&itemsid=" + itemsid + "&depositamt=" + depositamt + "&action=" + action;
}
else if(action == "notpaiddepositadd")/////deposit payment 
{
var ajaxshowdivid = "shownotpaiddepositamt";	
var memberid =document.getElementById('memberid').value;
var queryString = "?memberid=" + memberid + "&action=" + action;
}
else if(action == "addcomm")/////deposit payment 
{
var ajaxshowdivid = "shownotpaiddepositamt";	
var memberid =document.getElementById('memberid').value;
//var itemsid =document.getElementById('itemsid').value;
var queryString = "?memberid=" + memberid + "&action=" + action;
}
else if(action == "memberitemsforcomm")/////deposit payment 
{
var ajaxshowdivid = "showmemberitem";	
var introducerof =document.getElementById('introducerof').value;
var queryString = "?introducerof=" + introducerof + "&action=" + action;
}


if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   document.getElementById(ajaxshowdivid).innerHTML=xmlhttp.responseText;

    }
  }


xmlhttp.open("GET","commonajaxfunction.php"+queryString,true);
xmlhttp.send();
}





function cooparativeitems()
{
/*if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }*/
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
var memberid =document.getElementById('memberid').value;
if(memberid == "")
{
alert("Please enter member ID");
exit;
}
var itemsid =document.getElementById('itemsid').value;
if(itemsid == "")
{
alert("Please select items");
exit;
}
var queryString = "?memberid=" + memberid + "&itemsid=" + itemsid;
xmlhttp.open("GET","cooparativeitemsajax.php"+queryString,true);
xmlhttp.send();
}





function saveFunction(action)
{
	
	
	if(action=="itemsadd")
	{
				   var depositamtid = parseInt(document.getElementById('depositamtid').value,10);
				   if(depositamtid==0)
				   {
					   alert("Please enter deposit amount");
					   return false;
					   }
					   
					   var joiningdate = parseInt(document.getElementById('joiningdate').value,10);
				   if(joiningdate=="")
				   {
					   alert("Please enter date");
					   return false;
					   }
					   
					   
				   var probperiod = parseInt(document.getElementById('probperiod').value,10);
				   if(probperiod=="")
				   {
					   alert("Please select deposit duration");
					   return false;
					   }
				   
	  }
	
			
			if (confirm("Do you want to save?")) 
			{
			  return true;
			}
			else
			{
			  return false;
			}
}




function idcard()
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
var employeepin = document.getElementById('employeepin').value;
if(employeepin == "")
{
alert("Please enter employee id.");
exit;
}

var idcardtypeid = document.getElementById('idcardtypeid').value;
if(idcardtypeid == "")
{
alert("Please enter id card type");
exit;
}


var queryString = "?employeepin=" + employeepin;
xmlhttp.open("GET","idcardajax.php"+queryString,true);
xmlhttp.send();
}



function printpage()
{ 

 $(document).ready(function(){
    $(".detail").hide();
  });


  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=650, height=600, left=100, top=25"; 
  var content_vlue = document.getElementById("printdiv").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()"><center>');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</center></body></html>'); 
   docprint.document.close(); 
   docprint.focus();
   
   document.idcardfrm.submit(); 
   
}





function transection(action)
{


if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
var memberid =document.getElementById('memberid').value;
if(memberid == "")
{
alert("Please enter member ID");
exit;
}

var itemsid =document.getElementById('itemsid').value;
if(itemsid == "")
{
alert("Please select item");
exit;
}
var transectiontype =document.getElementById('transectiontype').value;
if(action == "addcomm")
{
	var introducerof =document.getElementById('introducerof').value;
	var queryString = "?memberid=" + memberid + "&transectiontype=" + transectiontype+"&itemsid="+itemsid+"&introducerof="+introducerof;
	}
else{
	var queryString = "?memberid=" + memberid + "&transectiontype=" + transectiontype+"&itemsid="+itemsid;
	}	



xmlhttp.open("GET","transectionajax.php"+queryString,true);
xmlhttp.send();
}