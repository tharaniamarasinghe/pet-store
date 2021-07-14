function validateForm() {

            var email=document.myForm.email.value;
            var atpos=email.indexOf("@");
            var dotpos=email.lastIndexOf(".");
            
            if(email!="")
			{
                if (atpos<1 || (dotpos-atpos)<2)
				{
                    alert("Enter a valid email");
                    document.myForm.email.focus();
                    document.myForm.email.value=null;
                }
				else{
					alert("Your message is sucessfully submitted");
				}
            }   
            else {
                alert("Please provide an email");
                document.myForm.email.focus();
            }
        }