function validate_form()
		{
		  var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
			valid=true;
			if(document.signupForm.customerName.value=="" )
			{
				alert ("You must fill 'customer Name'.");
                document.signupForm.customerName.style.background="yellow";
				valid=false;
			}
			
			else if(document.signupForm.fathersName.value=="" )
			{
				alert ("You must fill 'Father's Name'.");
				valid=false;
			}
			else if(document.signupForm.mothersName.value=="" )
			{
				alert ("You must fill 'mother's Name'.");
				valid=false;
			}
			else if(document.signupForm.husbandName.value=="" )
			{
				alert ("You must fill 'husband Name'.");
				valid=false;
			}
			else if(document.signupForm.occupation.value=="" )
			{
				alert ("You must fill 'Occupatiob'.");
				valid=false;
			}
            else if(document.signupForm.dateOfBirth.value=="" )
			{
				alert ("You must fill 'date of birth'.");
				valid=false;
			}
			else if(document.signupForm.nationality.value=="" )
			{
				alert ("You must fill 'nationality'.");
				valid=false;
			}
			else if(document.signupForm.bloodGroup.value=="" )
			{
				alert ("You must fill 'Blood Group'.");
				valid=false;
			}
			
			else if(document.signupForm.sex.value=="" )
			{
				alert ("You must fill 'sex'.");
				valid=false;
			}
            else if(document.signupForm.nationality.value=="" )
			{
				alert ("You must fill 'Nationality'.");
				valid=false;
			}
			else if(document.signupForm.nationalIdNo.value=="" )
			{
				alert ("You must fill 'national  ID No'.");
				valid=false;
			}
			else if(document.signupForm.customerID.value=="" )
			{
				alert ("You must fill 'customer ID'.");
				valid=false;
			}
            else if(document.signupForm.password.value=="" )
			{
				alert ("You must fill 'Password'.");
				valid=false;
			}

			else if(document.signupForm.password.value < 6 )
			{
				alert ("You can set 'Password' minimum '6' charecter.");
				valid=false;
			}
			else if(document.signupForm.conformPassword.value=="" )
			{
				alert ("You must fill 'conform Password'.");
				valid=false;
			}
			else if(document.signupForm.password.value != document.signupForm.conformPassword.value )
			{
				alert ("Your password not match.");
				valid=false;
			}
			else if(document.signupForm.accountType.value=="" )
			{
				alert ("You must fill 'account Type'.");
				valid=false;
			}
			else if(document.signupForm.referenceAccountNo.value=="" )
			{
				alert ("You must fill 'reference Account No'.");
				valid=false;
			}
			else if(document.signupForm.referenceCustomerID.value=="" )
			{
				alert ("You must fill 'Reference Customer ID'.");
				valid=false;
			}
			else if(document.signupForm.presentCountry.value=="" )
			{
				alert ("You must fill 'Country of Present Address'.");
				valid=false;
			}
            else if(document.signupForm.presentCity.value=="" )
			{
				alert ("You must fill 'City of Present Address'.");
				valid=false;
			}
            else if(document.signupForm.presentPS.value=="" )
			{
				alert ("You must fill 'Police Station of Present Address'.");
				valid=false;
			}
            else if(document.signupForm.presentZipCode.value=="" )
			{
				alert ("You must fill 'Zip Code of Present Address'.");
				valid=false;
			}
            else if(document.signupForm.presentStreet.value=="" )
			{
				alert ("You must fill 'Street of Present Address'.");
				valid=false;
			}
            else if(document.signupForm.permanentCountry.value=="" )
			{
				alert ("You must fill 'Country of Permanent Address'.");
				valid=false;
			}
            else if(document.signupForm.permanentCity.value=="" )
			{
				alert ("You must fill 'City of Permanent Address'.");
				valid=false;
			}
            else if(document.signupForm.permanentPS.value=="" )
			{
				alert ("You must fill 'Police Station of Permanent Address'.");
				valid=false;
			}
            else if(document.signupForm.permanentZipCode.value=="" )
			{
				alert ("You must fill 'Zip Code of Permanent Address'.");
				valid=false;
			}
            else if(document.signupForm.permanentStreet.value=="" )
			{
				alert ("You must fill 'Street of Permanent Address'.");
				valid=false;
			}
			else if(document.signupForm.contactNo.value=="" )
			{
				alert ("You must fill 'Contact No'.");
				valid=false;
			}
			else if(document.signupForm.emailID.value=="" )
			{
				alert ("You must fill 'Email ID'.");
				valid=false;
			}
            else if (document.signupForm.emailID.value.match(illegalChars))
			 {
			 	alert ("You entered iligal charecter for 'Email ID'.");
				valid=false;
    		 }
			
     		return valid;
		}