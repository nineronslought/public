<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["btnSubmit"])) {

        $data = $_SESSION["safety_form_data"];

        global $wpdb;

        // Your form processing logic here
        // Convert session data to JSON
        $jsonData = json_encode($data);
        // Insert data into the custom table
        $table_name = 'safety_form'; // Replace 'safety_form' with your actual table name
        $wpdb->insert(
            $table_name,
            array(
                'session_id' => session_id(),
                'json_data' => $jsonData
            ),
            array('%s', '%s')
        );
        // Optional: Clear or unset session data after submitting
        // unset($_SESSION['your_session_variable']);
        // Redirect or do whatever you need after submission

        include get_template_directory() . '/safety-form/email.php';
        // Prepare the email
        $to = $data['email']; // The email address to send to
        $subject = 'Your Safety Plan';
        $body = include_once('email.php');
        // Append other form data to the body
        $headers = array('Content-Type: text/html; charset=UTF-8');

        // Send the email
        wp_mail($to, $subject, $email_template, $headers);

        unset($_SESSION["safety_form_data"]);

        wp_redirect(home_url('/safety-planning-tool?id='.session_id())); // Replace '/success-page' with your actual success page URL
        exit();

    }
}
?>
