<?php

//sleep(5);

$response = [
    'post' => $_POST
];

// define variables and set to empty values
$name_error = $email_error = $subject_error = $message_error = '';
$name = $email = $inputSubject = $message = '';

// form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $response['server'] = 'true';

    // Check if lastname field is empty
    if (empty($_POST["name"])) {
        // Display error
        $name_error = "Champs requis";
    } else {
        $name = $_POST["name"];
    }

    // Check if email field is empty
    if (empty($_POST["email"])) {
        // Display error
        $email_error = "Champs requis";
    } else {
        $email = $_POST["email"];
    }

    // Check if firstname field is empty
    if (empty($_POST["subject"])) {
        // Display error
        $subject_error = "Champs requis";
    } else {
        $inputSubject = $_POST["subject"];
    }

    // Check if company field is empty
    if (empty($_POST["message"])) {
        // Display error
        $message_error = "Champs requis";
    } else {
        $message = $_POST["message"];
    }


    // if there are not errors, then send the message
    if ($name_error == '' and $email_error == '' and $subject_error == '' and $message_error == '') {
        if (isset($_POST['submit'])) {

            // Check if the ReCaptcha field contain a value
            if(empty($_POST['recaptcha-response'])){
                header('Location: index.php');
            } else {
                // URL
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=6LeOHPoZAAAAADMvBkI0VUc1hn_UUpENVrLP7kKw&response={$_POST['recaptcha-response']}";

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
                        print_r($response); // <-- for Development only

                        // connect to the database
                        $db = mysqli_connect('', '', '', '');

                        // Register all inputs into database
                        $query = "INSERT INTO lrmdevform (nom, email, sujet, message) 
                        VALUES ('$name', '$email', '$inputSubject', '$message')";
                        mysqli_query($db, $query);

                        // Inputs field
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $inputSubject = $_POST['subject'];
                        $message = $_POST['message'];

                        $to = 'contact@lucasrouillermonay.dev'; // <-- sender email
                        $subject = 'Soumission formulaire';
                        $message_content = 'Nom: ' . $name . "<br>" . 'Email: ' . $email . "<br>"
                            . 'Sujet: ' . $inputSubject . "<br>" . 'Message: ' . $message;
                        $headers = 'MIME-Version: 1.0' . "\r\n" .
                            'Content-type: text/html; charset=UTF-8' . "\r\n" .
                            'Content-Transfer-Encoding: 8bit' . "\r\n" .
                            'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";

                        if (mail($to, $subject, $message_content, $headers)) {
                            $response["success"] = "Your form has been successfully send! I come back to you lately.";
                            // reset form values to empty strings
                            $name = $email = $inputSubject = $message = '';

                        } else {
                            $response["error"] = "There was an error sending your form, please try again.";
                            // reset form values to empty strings
                            $name = $email = $inputSubject = $message = '';
                        }

                    } else {
                        $response["success"] = "Your personals informations has been successfully send!";
                    }
                }
            }
        }
    } else {
        $response["error"] = "Please check that all informations are correct.";

        $response["errorInputs"] = [
            [
                'id' => 'name',
                'errorMessage' => $name_error
            ],
            [
                'id' => 'email',
                'errorMessage' => $email_error
            ],
            [
                'id' => 'subject',
                'errorMessage' => $subject_error
            ],
            [
                'id' => 'message',
                'errorMessage' => $message_error
            ]
        ];
    }
}

echo json_encode($response, JSON_UNESCAPED_UNICODE)

?>