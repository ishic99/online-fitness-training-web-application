
    function validateForm()
	{

        if (document.getElementById('user').value == "seller" && document.getElementById('pwd').value == "seller")
		{
		
            window.open("sellerinterface.html");
        }
        else {
            alert("Login was unsuccessful, please check your username and password");
        }
      }
	  
	