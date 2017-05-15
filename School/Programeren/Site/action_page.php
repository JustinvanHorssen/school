<?php  
	$un = htmlspecialchars(filter_input(INPUT_POST, "password"));
	$unl = strlen($un);
	$permision = true;
	$problem_list = "<font style='
	    color: red;
    top: 15px;
    position: relative;
    left: 105px;
}'>";

	//length
	if ($unl <= 6) 
	{
		
	}
	else
	{
		$permision = false;
		$problem_list .= "Pasword is to long <br>";
	}


	//check uppercase
	if (strtolower($un) != $un)// its so simple!
	{
		
	}
	else
	{

		$permision = false;
		$problem_list .= "No uppercase <br>";
	}

		
	//check	lowercase
	if (strtoupper($un) != $un)// its so simple!
	{
		
	}
	else
	{
		$permision = false;
		$problem_list .= "no lowercase <br>";

	}

	if(1 === preg_match('~[0-9]~', $un))
	{
    	
	}

	else
	{
		$permision = false;
		$problem_list .= "no numbers<br>";
	}
	

	//check permision
	if ($permision)
	{
		echo "upload login";
	}

	else
	{
		echo $problem_list."</font>";

	}




?>