// JavaScript Document
function validate_form(form)
		{
			valid=true;
			if(form.signupForm.customerID.value=="" )
			{
				alert ("You must fill 'customer ID'.");
				valid=false;
			}
			/*else if ((document.signupForm.customerID.value.length < 13) || (document.signupForm.customerID.value.length > 13))
			{
        			alert ("Customer ID is the wrong length not use (13).");
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
				alert ("You must fill 'mothersName'.");
				valid=false;
			}*/
			return valid;
		}