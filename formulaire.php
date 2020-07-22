<?php 

    /*Ecrire des variables vides avant car si déclarées comme en bas elles ne sont pas déclarées avant l'envoi du formualaire*/
    
    $firstNameErr = '';
    $lastNameErr = '';
    $mailErr = '';
    $countryErr = '';

    $nameError = ''; 
    $mailError = '';

    // VALIDATION
    //Is use to avert hacking the form
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Validation rules: 
    //Names string and space
    //Mail xx@xx.xx 
    //Message or comments must be textarea with multiline (number of rows)

    //Check if name is a string or a space

    function test_name($name){
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameError ='Sorry the name is invalid, it should be letters and space.';
            return $nameError; // mettre le return dans le if sinon la variable est indéfinie
        }
        
    }
    //Check if the mail is to the right format
    function test_mail($addmail){
        if (!filter_var($addmail, FILTER_VALIDATE_EMAIL)) {
            $mailError = 'Sorry the mail address is invalid, it should respect this format xx@xx.xx .';
            return $mailError; // mettre le return dans le if sinon la variable est indéfinie 
        }
        
    }
    $firstName = test_input($_POST["firstName"]);
    $lastName = test_input($_POST["lastName"]);
    $mail = test_input($_POST["mail"]);
    $country = test_input($_POST["country"]);
    $gender = test_input($_POST["gender"]);
    $messageFree = test_input($_POST["messageFree"]);

     
    $firstNameErr = test_name($firstName);
    $lastNameErr = test_name($lastName);
    $mailErr = test_mail($mail);
    $countryErr = test_name($country);

//----------------------------HONEYPOT-------------------------------------------------------------------------

//check if form was sent
/* $name = '';

if($_POST){

	$to = 'some@email.com';
	$subject = 'Testing HoneyPot';
	$header = "From: $name <$name>";

	$name = $_POST["honeyname"]; // Pourquoi ne sont'elles pas définies
	$email = $_POST["honeyemail"];
	$message = $_POST["honeymessage"];

	//honey pot field
	$honeypot = $_POST["honeyfirstname"];

	//check if the honeypot field is filled out. If not, send a mail.
	if( ! empty( $honeypot ) ){
		return; //you may add code here to echo an error etc.
	}else{
		mail( $to, $subject, $message, $header );
	}
} */

// Inputs send mail--------------------------------------------------------------------------------------------

    
    /* $text = str_replace("\n.", "\n..", $text);
    $to      = 'personne@example.com';
    $subject = 'le sujet';
    $Message = "Your inputs:" . "<br>" . $firstName . "<br>" . $lastName . "<br>" . $mail . "<br>" . $country . "<br>" . $gender . "<br>" . $messageFree;
    $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $Message, $headers); */
    
?>