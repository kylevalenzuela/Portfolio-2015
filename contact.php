<?php
/* Template Name: Contact */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$formName = trim($_POST["fname"]);
$formEmail = trim($_POST["femail"]);
$formMessage = trim($_POST["fmessage"]);

if ($formName == "" OR $formEmail == "" OR $formMessage == ""){
	echo "You must add something"; exit;
}

foreach($_POST as $value) {
	if(stripos($value, 'Content-Type:') !== FALSE) {
		exit;
	}
}
require_once("inc/phpmailer/class.phpmailer.php");
//include("inc/phpmailer/class.smtp.php");
$fmail = new PHPMailer();

if (!$fmail->ValidateAddress($formEmail)){ ?>
	<div class="section-5-pass">
		<div class="section-5-image">
			<div class="section-5-wrap">
				<div class="section-5-header">
					<h4><em style="color: red; text-decoration: italic;">Invalid Email. Try again. I believe in you!</em></h4>
				</div>
				<div class="form-wrap">
					<form id="nl-form" class="nl-form" action="http://kylevalenzuela.com/contact/" method="post">
						<p>Hello Kyle, my name is <input type="text" name="fname" placeholder="Name"> 
		                and my email is <input type="text" name="femail" placeholder="Email">.
		                I would just like to say...</p>
		                <p><textarea class="section-message" type="text" name="fmessage" placeholder="I would like a quote on a design project!"></textarea></p>
		                <div style="display: none;"><input type="text" name="address" id="address"></div> 
					    <div class="nl-submit-wrap">
					    	<button class="nl-submit" type="submit" value="Send">Send</button>
					    </div>
						<div class="nl-overlay"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php exit; }

$email_body = "";
$email_body = $email_body . "Name= " . $formName . "<br>";
$email_body = $email_body . "Email= " . $formEmail . "<br>";
$email_body = $email_body . "Message= " . $formMessage . "<br>";

$fmail->IsSMTP();          
$fmail->Host = 'smtp.gmail.com';  
$fmail->SMTPAuth = true; 
$fmail->SMTPSecure = 'tls';      
$fmail->Username = 'kitehack87@gmail.com';             
$fmail->Password = 'tacobell1987';   
$fmail->SMTPDebug = 1;
$fmail->Port = 587;

$fmail->SetFrom($formEmail, $formName);
$address = "valenzuela.kyle@gmail.com";
$fmail->AddAddress($address, "Kyle");
$fmail->Subject    = "KyleValenzuela.com Form Submission | " . $formName;
$fmail->MsgHTML($email_body);
if(!$fmail->Send()) {
  echo "Mailer Error: " . $fmail->ErrorInfo; exit;
} 
header("Location: http://kylevalenzuela.com/thanks?status=yus");
exit;
}
?>


