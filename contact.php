<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $company = $_POST['company'];
	$messages = $_POST['messages'];
 
	mail('obaid.oc1@gmail.com', $name, $email, $address, $company);
?>
    <a href="index.html" style="dispaly: block; text-align: center;"><span>Back To Home</span></a>
</div>

