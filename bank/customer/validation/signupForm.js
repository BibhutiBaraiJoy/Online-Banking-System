function validate_form()
		{
			valid=true;
			if(document.signupForm.customerID.value=="" )
			{
				alert ("You must fill 'customer ID'.");
				valid=false;
			}
			else if(document.signupForm.customerName.value=="" )
			{
				alert ("You must fill 'customer Name'.");
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
			else if(document.signupForm.husbandWifeName.value=="" )
			{
				alert ("You must fill 'husband/wife Name'.");
				valid=false;
			}
			
			else if(document.signupForm.nationality.value=="" )
			{
				alert ("You must fill 'nationality'.");
				valid=false;
			}
			else if(document.signupForm.dateOfBirth.value=="" )
			{
				alert ("You must fill 'date of birth'.");
				valid=false;
			}
			
			else if(document.signupForm.sex.value=="" )
			{
				alert ("You must fill 'sex'.");
				valid=false;
			}
			else if(document.signupForm.religion.value=="" )
			{
				alert ("You must fill 'religion'.");
				valid=false;
			}
			else if(document.signupForm.profession.value=="" )
			{
				alert ("You must fill 'profession'.");
				valid=false;
			}
			else if(document.signupForm.openingDate.value=="" )
			{
				alert ("You must fill 'opening Date'.");
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
			else if(document.signupForm.referenceName.value=="" )
			{
				alert ("You must fill 'reference Name'.");
				valid=false;
			}
			else if(document.signupForm.referenceAccountType.value=="" )
			{
				alert ("You must fill 'reference Account Type'.");
				valid=false;
			}
			else if(document.signupForm.nomineeAccountNo.value=="" )
			{
				alert ("You must fill 'nominee Account No'.");
				valid=false;
			}
			else if(document.signupForm.nomineeName.value=="" )
			{
				alert ("You must fill 'nominee Name'.");
				valid=false;
			}
			else if(document.signupForm.nomineeAccountType.value=="" )
			{
				alert ("You must fill 'nominee Account Type'.");
				valid=false;
			}
			else if(document.signupForm.relation.value=="" )
			{
				alert ("You must fill 'relation'.");
				valid=false;
			}
			else if(document.signupForm.nomineeNationalIdNo.value=="" )
			{
				alert ("You must fill 'nominee National Id No'.");
				valid=false;
			}
			else if(document.signupForm.mailingAddress.value=="" )
			{
				alert ("You must fill 'mailing Address'.");
				valid=false;
			}
			else if(document.signupForm.parmanentAddress.value=="" )
			{
				alert ("You must fill 'parmanent Address'.");
				valid=false;
			}
			else if(document.signupForm.zipCode.value=="" )
			{
				alert ("You must fill 'zip Code'.");
				valid=false;
			}
			else if(document.signupForm.city.value=="" )
			{
				alert ("You must fill 'city'.");
				valid=false;
			}
			else if(document.signupForm.country.value=="" )
			{
				alert ("You must fill 'country'.");
				valid=false;
			}
			else if(document.signupForm.contactNo.value=="" )
			{
				alert ("You must fill 'contact No'.");
				valid=false;
			}
			else if(document.signupForm.email.value=="" )
			{
				alert ("You must fill 'email'.");
				valid=false;
			}
     		return valid;
		}