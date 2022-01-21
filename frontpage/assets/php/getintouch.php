<?php
$errorMSG = "";
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}
// MSG SUBJECT
if (empty($_POST["emailSubject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $emailSubject = $_POST["emailSubject"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}
// SELECT
if (empty($_POST["select"])) {
    $errorMSG = "Select is required ";
} else {
    $select = $_POST["select"];
}
// TERMS
if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}
$EmailTo = "";
//$subject = $name ."::". $emailSubject;
$subject = $emailSubject;
// prepare email body text
$body 	= "
	<html>
		<head>
			<title></title>
			<style>
				* {
					margin: 0;
					padding: 0;
					}
				body {
					background-color: #EEEEEE;
					}
				table {
					margin-top: 15px;
					margin-bottom: 15px;
					}
				table, tr, th, td {
					border: 1px solid lightGray;
					border-collapse: collapse;
					}
				th {
					font-size: 15px;
					font-weight: normal;
					line-height: 25px;
					padding: 5px;
					text-align: left;
					color: darkred;
					}
				td {
					font-size: 15px;
					font-weight: normal;
					line-height: 25px;
					padding: 5px;
					text-align: left;
					color: black;
					}
			</style>
		</head>
		<body>
			<div style='width: 960px; margin: 0px; background-color: white; padding: 0px;'>
				<p style='font-size: 16px; color: black'>$message</p>
				<table>
					<thead>
						<tr>
							<th>💎</th>
							<td style='color: navy;'>Sender Details</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Name</th>
							<td>$name</td>
						</tr>
						<tr>
							<th>E-mail</th>
							<td>$email</td>
						</tr>
						<tr>
							<th>None</th>
							<td>$select</td>
						</tr>
						<tr>
							<th>Terms</th>
							<td>$terms</td>
						</tr>
					</tbody>
				</table>
			</div>
		</body>
	</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "
";
$headers .= "Content-type:text/html;charset=UTF-8" . "
";
// More headers
$headers .= "From: ⭐ ". $email . "" . "
";
$headers .= "Reply-To: " . $email . "(" . $name . ")" . "
";
$success = mail($EmailTo,$subject,$body,$headers);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>