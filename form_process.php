<?php

// define variables and set to empty values
$name_error = $email_error = $inputSubject_error = $message_error = '';
$name = $email = $inputSubject = $message = $success = $error = '';
$success = false;

// sender email
$emailfrom = '<your-email-here>';

// form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if lastname field is empty
    if (empty($_POST["inputName"])) {
        // Display error
        $name_error = "Required Field";
    } else {
        $name = $_POST["inputName"];
    }

    // Check if email field is empty
    if (empty($_POST["inputEmail"])) {
        // Display error
        $email_error = "Required Field";
    } else {
        $email = $_POST["inputEmail"];
    }

    // Check if firstname field is empty
    if (empty($_POST["inputSubject"])) {
        // Display error
        $inputSubject_error = "Required Field";
    } else {
        $inputSubject = $_POST["inputSubject"];
    }

    // Check if company field is empty
    if (empty($_POST["inputMessage"])) {
        // Display error
        $message_error = "Required Field";
    } else {
        $message = $_POST["inputMessage"];
    }


    // if there are not errors, then send the message
    if ($name_error == '' and $email_error == '' and $inputSubject_error == '' and $message_error == '') {
        if (isset($_POST['submit'])) {
            // Check if the ReCaptcha field contain a value
            if(empty($_POST['recaptcha-response'])){
                header('Location: index.php');
            } else {
                // URL
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=<secret-key>&response={$_POST['recaptcha-response']}";

                // Check if curl is installed
                if (function_exists('curl_version')) {
                    $curl = curl_init($url);
                    curl_setopt($curl, CURLOPT_HEADER, false);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    $response = curl_exec($curl);
                } else {
                    $response = file_get_contents($url);
                }

                // Check if it return a response
                if (empty($response) || is_null($response)) {
                    header('Location: index.php');
                } else {
                    $data = json_decode($response);
                    // if ReCaptcha is decoded, check if the others fields are not empty
                    if ($data->success) {
                        //print_r($response); // <-- for Development only

                        // connect to the database
                        $db = mysqli_connect('<database>', '<user>', '<password>', '<table>');

                        // Register all inputs into database
                        $query = "INSERT INTO lrmdevform (name, email, subject, message) 
                        VALUES ('$name', '$email', '$inputSubject', '$message')";
                        mysqli_query($db, $query);

                        // inputs field
                        $name = $_POST['inputName'];
                        $email = $_POST['inputEmail'];
                        $inputSubject = $_POST['inputSubject'];
                        $message = $_POST['inputMessage'];

                        $to = 'contact@lucasrouillermonay.dev'; // <-- sender email
                        $subject = 'Form Submit';
                        $message_content = 'Fullname: ' . $name . "<br>" . 'E-Mail: ' . $email . "<br>"
                            . 'Subject: ' . $inputSubject . "<br>" . 'Message: ' . $message;
                        $headers = 'MIME-Version: 1.0' . "\r\n" .
                            'Content-type: text/html; charset=UTF-8' . "\r\n" .
                            'Content-Transfer-Encoding: 8bit' . "\r\n" .
                            'From: ' . $emailfrom . "\r\n" . 'Reply-To: ' . $email . "\r\n";

                        if (mail($to, $subject, $message_content, $headers)) {
                            $success = "Thanks you! Your message has been successfully sent, I will comeback to you closely";
                            // reset form values to empty strings
                            $name = $email = $inputSubject = $message = '';

                        } else {
                            $error = "There was an error sending this form, please try again";
                            // reset form values to empty strings
                            $name = $email = $inputSubject = $message = '';
                        }
                    } else {
                        //header('Location: index.php');
                        // reset form values to empty strings
                        $name = $email = $inputSubject = $message = '';
                    }
                }
            }
        }
    } else {
        $error = "Please verify theses required field";

        $errorInputs = [
            "inputName" => $name_error,
            "inputEmail" => $email_error,
            "inputSubject" => $inputSubject_error,
            "inputMessage" => $message_error,
        ];
    }
    unset($_POST);
}

?>
