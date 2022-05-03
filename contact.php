<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $company = $_POST['company'];
	$messages = $_POST['messages'];
 
	mail('your gmail address', $name, $email, $address, $company);
?>
    <a href="index-3.html.html" style="dispaly: block; text-align: center;"><span>Back To Home</span></a>
</div>

