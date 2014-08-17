<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
</head>

<body bgcolor="#BFDFDF">
<fieldset>
	<legend><b>Registration Information</b></legend>
    <table>
        <tr ><td  style="font-size: 50px; color: #008040; font-weight: bold; text-align: center;">Welcome to Registration Page</td></tr>
        <tr><td style="font-size: 15px; color: red;"> ***All information must be fillup*** </td></tr>
    </table>   
<ul><form  name="signupForm" method="post" action="registrationConformation.php" style="font-size:15px" onsubmit="return validate_form();">
	<fieldset>
		<legend><br /><b>Customer Details Information</b></legend></legend><br/>
	<table summary="Demonstration form">
  	<tbody>
	
  	<tr>
   	 	<td><label for="customerName">Customer Full Name: </label></td>
    	<td><input type="text" name="customerName" size="35" maxlength="50" /></td>
 	 </tr>  
	 
	  <tr>
  	 	 <td><label for="fathersName">Fatrher's Name:</label></td>
   		 <td><input type="text" name="fathersName" size="35" maxlength="50" /></td>
	 </tr> 
	 <tr>
  	 	 <td><label for="mothersName">Mother's Name:</label></td>
   		 <td><input type="text" name="mothersName" size="35" maxlength="50" /></td>
	 </tr> 
	 <tr>
  	 	 <td><label for="husbandName">Husband Name:</label></td>
   		 <td><input type="text" name="husbandName" size="35" maxlength="50" /></td>
		 <td>(If no husband enter N/A )</td>
	 </tr> 
     <tr>
  	 	 <td><label for="occupation">Occupation:</label></td>
   		 <td><input type="text" name="occupation" size="35" maxlength="25" /></td>
	 </tr> 
  
	 <tr>
  	 	 <td><label for="dateOfBirth">Date of Birth:</label></td>
   		 <td><input type="text" name="dateOfBirth" size="35" maxlength="25" /></td>
		 <td>( YYYY-MM-DD )</td>
	 </tr> 
	 
     <tr>
  	 	 <td><label for="bloodGroup">Blood Group:</label></td>
   		 <td><input type="text" name="bloodGroup" size="35" maxlength="25" /></td>
	 </tr> 
     
	 <tr>
  	 	 <td><label for="sex">Sex:</label></td>
   		 <td>
		    <select name="sex">
		   <option value="" selected="selected"> Choose Yours
		   <option value="Male">Male
		   <option value="Female">Female
		  </td>
		 
	 </tr>
     
     <tr>
  	 	 <td><label for="nationality">Nationality:</label></td>
   		 <td><input type="text" name="nationality" size="35" maxlength="25" /></td>
	 </tr>
	 
	 <tr>
  	 	 <td><label for="nationalIdNo">National ID No : </label></td>
   		 <td><input type="text" name="nationalIdNo" size="35" maxlength="25" /></td>
	 </tr> 
	    
	   	 </tbody>
	</table>
	   </fieldset><br/>
	   
	   
	<fieldset>
            <legend><br/><b>User Id and Password</b></legend>
           <table>		
           <tr>
    	       <td><label for="customerID">Customer ID:</label></td>
   		       <td><input type="text" name="customerID" size="35" maxlength="50" /></td>
            </tr>   
	 
	       <tr>
  	 	       <td><label for="password">Password :</label></td>
   		       <td><input type="password" name="password" size="35" maxlength="100" /></td>
               <td style="color: red;"><label for="password">Password length greater than 6 digit :</label></td>
	       </tr>
           <tr>
  	 	       <td><label for="conformPassword">Conform Password :</label></td>
   		       <td><input type="password" name="conformPassword" size="35" maxlength="100" /></td>
	       </tr>
        </table>
    </fieldset> 
    
	   
	 <fieldset>
	 	<legend><br/><b>AccountInformation</b></legend></legend><br/>
	   <table summary="Demonstration form">
  		<tbody>
	  
	  <tr>
  	 
 	
	  <tr>
  	 	 <td><label for="accountType">Account Type:</label></td>
   		 
		 <td>
		    <select  name="accountType">
		   <option value="" selected="selected"> Select your account type 
		   <option value="Current">Current
		   <option value="Saving">Saving
		   <option value="Deposite">Deposite
		   <option value="Fixed Deposite">Fixed Deposite
		   
		   </select>
		  </td>
	 </tr>
	 
    <tr>
  	 	 <td><label for="referenceAccountNo">Reference Account No :</label></td>
   		 <td><input type="text" name="referenceAccountNo" size="35" maxlength="100" /></td>
	 </tr>
  	 
	 <tr>
  	 	 <td><label for="referenceCustomerID">Reference Customer ID :</label></td>
   		 <td><input type="text" name="referenceCustomerID" size="35" maxlength="100" /></td>
	 </tr>
		
		 </tbody>
	</table>
	</fieldset>	<br/>
	   
	   
 <fieldset>
	<legend><br/><b>Contact Information</b></legend><br/>
    <!--<table summary="Demonstration form">
        <tbody>-->
	       <fieldset>
                <legend><br/><b>Present Address</b></legend></legend><br/>
                <!--<table summary="Demonstration form">
                <tbody>-->
                <table summary="Demonstration form">
                    <tr>
                        <td><label for="presentCountry">Country:</label></td>
                        <td>
                        <select  name="presentCountry">
		                  <option value="" selected="selected"> Choose Yours
		                  <option value="Argentina">Argentina
		                  <option value="Armenia">Armenia
		                  <option value="Aruba">Aruba
                          <option value="Bangladesh">Bangladesh
		                  <option value="India">India
		                  <option value="Japan">Japan
		                  <option value="China">China
		                  <option value="Pakistan">Pakistan
                        </select>
		              </td>
	               </tr> 
                   <tr>
                        <td><label for="presentCity">City:</label></td>
                        <td>
		                  <select  name="presentCity">
		                      <option value="" selected="selected" > Choose Yours
		                      <option value="Dhaka">Dhaka
                              <option value="Gopalgonja">Gopalgonj
		                      <option value="Barisal">Barisal
		                      <option value="Sylhet">Sylhet
		                      <option value="Madaripur">Madaripur
		                      <option value="Faridpur">Faridpur
		                      <option value="Bogra">Bogra
		                      <option value="Gazipur">Gazipur
		   
		                  </select>
		              </td>
	               </tr> 
                   <tr>
  	 	               <td><label for="presentPS">Police Station :</label></td>
	                   <td><input type="text" name="presentPS" size="35" maxlength="100" /></td>
                    </tr>
                    <tr>
  	 	               <td><label for="presentZipCode">Zip Code:</label></td>
   		               <td><input type="text" name="presentZipCode" size="35" maxlength="10" /></td>
                    </tr>
                    <tr>
  	 	               <td><label for="presentS">Street  :</label></td>
	                   <td><input type="text" name="presentS" size="35" maxlength="100" /></td>
                    </tr>
                    
                </table>
            </fieldset><br/>
            
            <fieldset>
            <legend><br/><b>Permanent Address</b></legend><br/>
            <table summary="Demonstration form">
                <tbody>
                    <tr>
                        <td><label for="permanentCountry">Country:</label></td>
                        <td>
                        <select  name="permanentCountry">
		                  <option value="" selected="selected"> Choose Yours
		                  <option value="Argentina">Argentina
		                  <option value="Armenia">Armenia
		                  <option value="Aruba">Aruba
                          <option value="Bangladesh">Bangladesh
		                  <option value="India">India
		                  <option value="Japan">Japan
		                  <option value="China">China
		                  <option value="Pakistan">Pakistan
                        </select>
		              </td>
	               </tr> 
                   <tr>
                        <td><label for="permanentCity">City:</label></td>
                        <td>
		                  <select  name="permanentCity">
		                      <option value="" selected="selected" > Choose Yours
		                      <option value="Dhaka">Dhaka
                              <option value="Gopalgonja">Gopalgonj
		                      <option value="Barisal">Barisal
		                      <option value="Sylhet">Sylhet
		                      <option value="Madaripur">Madaripur
		                      <option value="Faridpur">Faridpur
		                      <option value="Bogra">Bogra
		                      <option value="Gazipur">Gazipur
		   
		                  </select>
                        </td>
	               </tr> 
                   <tr>
  	 	               <td><label for="permanentPS">Police Station :</label></td>
	                   <td><input type="text" name="permanentPS" size="35" maxlength="100" /></td>
                    </tr>
                    <tr>
  	 	               <td><label for="permanentZipCode">Zip Code:</label></td>
   		               <td><input type="text" name="permanentZipCode" size="35" maxlength="10" /></td>
                    </tr> 
                    <tr>
  	 	               <td><label for="permanentStreet">Street :</label></td>
	                    <td><input type="text" name="permanentStreet" size="35" maxlength="100" /></td>
                    </tr>
                    	
                </tbody>
	       </table>
	       </fieldset>	<br/>
           <fieldset>
            <legend><br/><b>Others</b></legend>
           <table>		
	       <tr>
  	 	       <td><label for="contactNo">Contact No. :</label></td>
   		       <td><input type="text" name="contactNo" size="35" maxlength="100" /></td>
	       </tr>
           <tr>
  	 	       <td><label for="emailID">Email ID :</label></td>
   		       <td><input type="text" name="emailID" size="35" maxlength="100" /></td>
	       </tr>
        </table>
        </fieldset>
        </tbody>
    </table>
</fieldset>	<br />
    
    <a href="index.php" style="font-size: 20px;">Back  </a>
	<input type="submit" name="submit" value="Sign Up"/>
	<input type="reset" name="reset" value="Reset"/><br/>
	</form></ul>
     </tbody>
	</table>
</fieldset>	<br />
	
	<script type="text/javascript">
		<?php include("validation/registrationFormValidation.php"); ?>	
	</script>
</body>
</html>
