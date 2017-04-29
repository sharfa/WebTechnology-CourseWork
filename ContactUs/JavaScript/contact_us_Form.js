

function confirmSubmit(){


	var submitForm = window.confirm("Are you sure you want to submit the form?");
	var value = true;
	var name = document.myForm.name.value;
	var email = document.myForm.email.value; 
        var comment = document.myForm.message.value;
        var update = document.myForm.update.value;
        var rate = document.myForm.rate.value;

	
	
		
window.confirm(" Summary \n Name : " + name + "\n E-mail : " + email + "\n Message : " + comment + "\n Receive updates via mail : " + update + "\n Rating : " + rate)
                

function confirmReset(){
			     	var resetForm = window.confirm("Are you sure you want to reset the form?")
			     	if (resetForm == true){
			     	    return true;
					}
					else{
			     	    return false;	
					}
	   }
		       
}