<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<title>DKTE Society's Textile and Engineering Institute, Ichalkaranji </title>




<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>




<div class="row">


 <div class="col-sm-12">
 <center>
<img  src="index_files/updated_header.jpg" width="80%"  class="img-rounded" /> 
</center>
</div>


 

</div>



<style type="text/css">
<!--
.style1 {font-weight: bold; font-family:Calibri;}
a:link    {color:blue;}
a:visited {color:blue;}
a:hover   {color:red;}
a:active  {color:yellow;} 
.anchor{font-size:10;}

-->
</style>
<style type="text/css">
  <style>
 
 td{font-family:Calibri}
 
 </style>
 


 <style>
 
 td{font-family:Calibri}
 .st1{font-family:Calibri; font-size:15px; color:#0000CC}
 table, th, td
{
border-collapse:collapse;
}
 
 </style>
<center>
<span class="style1"><a href="RegAck.php" >
  Home</a> &nbsp; 
  





<a href="ContactUs.php"  >
ContactUs</a>&nbsp; 


<a href="logout.php"  >
Logout</a>&nbsp; 
</span>
</center>

 
 <div class="container">



<script language="javaScript" type="text/javascript" src="validation.js"></script>


<form action="StuReg.php"method="post" name="Reg" onSubmit="return ValidateForm(this)">

<h2>Buspass Registration form</h2>

<input name="Enroll_Id" class="Enroll_Id" size="" type="HIDDEN">










 



<div class="form-group">
    <label for="PRN_No">PRN No.: </label>
    <input type="text" name="PRN_No" class="form-control"  placeholder="PRN No" required>
  </div>





 



<div class="form-group">
    <label for="Name_Student">Student Name: </label>
    <input type="text" name="Name_Student" class="form-control"  placeholder="Name Student" required>
  </div>



<div class="form-group">
    <label for="Rout_No">Route Name: </label>
	<SELECT name="Rout_No" size="" type="text" class="form-control">
		<option> </option> 

		<option value="Sangli">Sangli </option> 



		<option value="Miraj">Miraj </option> 



		<option value="Jaysingpur ">Jaysingpur </option> 



		<option value="Kolhapur">Kolhapur </option> 



		
	<option>Other</option> 
</SELECT>
  
  </div>





 



<div class="form-group">
    <label for="Bus_Stage_Name">Bus Stage Name: </label>
      <input type="text" name="Bus_Stage_Name" class="form-control"  placeholder="Bus_Stage_Name" required>
  </div>



<div class="form-group">
    <label for="Date_of_Birth">Date of Birth: (mm/dd/yyyy) </label>
    <input type="date" name="Date_of_Birth" class="form-control"  placeholder="Date of Birth" required>
  </div>
 


<div class="form-group">
    <label for="Remarks1">Gender </label>
    <select name="Remarks1" class="form-control" required>
     <option></option>
	 <option>Male</option>
      <option>Female</option>
	</select>
  </div>




 



<div class="form-group">
    <label for="Remarks2">Select College </label>
	<select name="Remarks2" class="form-control" placeholder="college name" required>
	<option></option>
	<option VALUE="DKTE,Ichalkarnji">DKTE,Ichalkarnji</option>
	 <option VALUE="YCP">YCP</option>
	</select>
   
  </div>



<div class="form-group">
    <label for="Course">Course: </label>
    <select name="Course" class="form-control" required>
<option></option>
	<option>B.Tech</option>
	<option>B.Pharmacy</option>
	<option>Pharm D</option>
	<option>MBA</option>
	<option>MCA</option>
	<option>M.Tech</option>
	<option>M.Pharmacy</option>
	</select>
	


  </div>





 



<div class="form-group">
    <label for="Branch" width="100%">Branch: </label>

	<SELECT name="Branch" class="form-control" required>
		<option></option>
	<option>CIVIL</option>
      <option>CSE</option>
       <option>ECE</option>
      <option>EEE</option>
      <option>MECH</option>
      <option>MBA</option>
      <option>Textile</option>
	  
	</SELECT>
	
    
  </div>





 



<div class="form-group">
        
    <label for="Year">Year: </label>

    <select name="Year" class="form-control" required>
     <option></option>
	<option>1st Year</option>
    <option>2nd Year</option>
    <option>3rd Year</option>
    <option>4th Year</option>
	
	</select>
	
	
    
  
    
  </div>





 



<div class="form-group">
    <label for="Academic_Year">Academic Year: </label>

	
    <input type="text" name="Academic_Year" class="form-control" value="2021-22" readonly=""  placeholder="Academic Year" required>
  </div>





 



<div class="form-group">
    <label for="Parent_Name">Parent Name: </label>
    <input type="text" name="Parent_Name" class="form-control"  placeholder="Parent Name" required>
  </div>





 



<div class="form-group">
    <label for="HouseNo">HouseNo: </label>
    <input type="text" name="HouseNo" class="form-control"  placeholder="HouseNo" required>
  </div>





 



<div class="form-group">
    <label for="Street_Village">Street Village: </label>
    <input type="text" name="Street_Village" class="form-control"  placeholder="Street Village" required>
  </div>





 



<div class="form-group">
    <label for="Mandal">Mandal: </label>
    <input type="text" name="Mandal" class="form-control"  placeholder="Mandal" required>
  </div>





 



<div class="form-group">
    <label for="District">District: </label>
	<select name="District" class="form-control" required>
<option></option>
	<option>

	</select>
    
  </div>





 



<div class="form-group">
    <label for="State">State: </label>
   <select name="State" class="form-control" required>
	<option>Maharashtra</option>
	</select>	
  </div>





 



<div class="form-group">
    <label for="Pincode">Pincode: </label>
    <input type="number" name="Pincode" class="form-control"  placeholder="Pincode" required>
  </div>





 



<div class="form-group">
    <label for="Email_Id">Email Id: </label>
    <input type="email" pattern="[^ @]*@[^ @]*" name="Email_Id" class="form-control"  placeholder="Email Id" required>
  </div>





 



<div class="form-group">
    <label for="Student_Phno">Student Phno: </label>
    <input type="number" min="5999999999" max="9999999999" name="Student_Phno" class="form-control"  placeholder="Student Phno" required>
  </div>





 



<div class="form-group">
    <label for="Parent_Phno">Parent Phno: </label>
    <input type="number" min="5999999999" max="9999999999" name="Parent_Phno" class="form-control"  placeholder="Parent Phno" required>
  </div>





 







 



<div class="form-group">
    <label for="Blood_Group">Blood Group: </label>
    
  
     <select name="Blood_Group" class="form-control" required>
	<OPTION></OPTION>
<OPTION VALUE="A +VE">A +VE</OPTION>
<OPTION VALUE="A -VE">A -VE</OPTION>
<OPTION VALUE="B +VE">B +VE</OPTION>
<OPTION VALUE="B -VE">B -VE</OPTION>
<OPTION VALUE="O +VE">O +VE</OPTION>
<OPTION VALUE="O -VE">O -VE</OPTION>
<OPTION VALUE="AB +VE">AB +VE</OPTION>
<OPTION VALUE="AB -VE">AB -VE</OPTION>
<OPTION VALUE="Don't Know">Don't Know</OPTION>
	</select>
	
  </div>





 

    <input type="hidden" name="Account_Status" class="form-control"  placeholder="Account Status" >






 




    <input type="hidden" name="Bus_Fee" class="form-control"  placeholder="Bus Fee" >
 





 



    <input type="hidden" name="Date_of_Registration" class="form-control"  placeholder="Date of Registration">
 





 


    <input type="hidden" name="ip_Address" class="form-control"  placeholder="ip Address">






 








 






 




    <input type="hidden" name="Remarks3" class="form-control"  placeholder="Remarks3">






 


    <input type="hidden" name="Remarks4" class="form-control"  placeholder="Remarks4">
 





 




    <input type="hidden" name="Remarks5" class="form-control"  placeholder="Remarks5">





 


<div class="form-group">
    <label for="Aadhar Number">Aadhar Number </label>


    <input type="number" name="Remarks6" class="form-control"  placeholder="Aadhar No">
</div>
  



  <center><input name="submit" type="submit" class="form-control btn-success" value="Submit"></center>

  <hr>

  
</form>
</div>
 










