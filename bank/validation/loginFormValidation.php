function validate_form1()
		{
			valid=true;
			if(document.login1.customerID.value=="" )
			{
				alert ("You must fill 'customer ID'.");
				valid=false;
			}
			 else if(document.login1.password.value=="" )
			{
				alert ("You must fill 'password'.");
				valid=false;
			}
			
		 return valid;
		}