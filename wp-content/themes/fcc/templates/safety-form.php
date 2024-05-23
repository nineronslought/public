<?php
/*
Template Name: Safety Form
*/

if (!session_id()) {
    session_start();
}
get_header();
?>
<?php the_content(); ?>

<?php
$checklist = [
    '1' => 'Identification (driver\'s license, immigration documents, school ID, military ID)',
    '2' => 'Cell phone',
    '3' => 'Cell Phone Charger',
    '4' => 'Medication',
    '5' => 'Cash',
    '6' => 'ATM Card',
    '7' => 'House Key',
    '8' => 'Car Key',
    '9' => 'Change of Clothes',
    '10' => 'Comfort Items (pictures, etc)',
    '11' => 'Baby Supplies (formula, diapers, clothes, wipes)',
    '12' => 'Pet Supplies (food, vaccination records, other supplies)',
    '13' => 'Children\'s Clothes',
    '14' => 'Children\'s Favorite Toys or Comfort Items',
    '15' => 'Copy of Protection Order',
    '16' => 'Child\'s Birth Certificate',
    '17' => 'Health Insurance Card',
];
$pet_checklist = [
    '1' => 'Food',
    '2' => 'Medicine',
    '3' => 'Ownership documents (receipts from purchase or adoption, receipts for purchases, license, vaccination records with your name)',
    '4' => 'Vaccination Records',
    '5' => 'Leash',
    '6' => 'Toys',
    '7' => 'Pet carrier',
    '8' => 'Bedding',
    '9' => 'Medical equipment',
    '10' => 'ID Tags or Rabies Tags for dogs and cats (this can help with ownership)',
];
?>

<main class="content bg-color">
    <!-- Form - Basic Info -->
    <section class="safety-form">
        <?php if (isset($_GET['id']) && !empty($_GET['id'])) {
            global $wpdb;
            $query = "SELECT id, session_id, json_data, date_created 
                      FROM safety_form 
                      WHERE session_id = '" . $_GET['id'] . "' 
                      AND date_created > NOW() - INTERVAL 24 HOUR 
                      ORDER BY date_created DESC 
                      LIMIT 1";
            $result = $wpdb->get_row($query);
            $data = json_decode($result->json_data, true);

            if (null !== $result) {
                include_once(get_template_directory() . '/templates/safety-form/step-8.php');
            } else {
                echo '<h3>This link has expired or not available. Return to <a href="\">Home</a></h3>';
                exit;
            }
        } else {
            if (!isset($_SESSION["safety_form_data"])) {
                $_SESSION["safety_form_data"] = array();
                $_SESSION["safety_form_data"]["Step"] = 1;
                $step = 1;
                $prev_step = 0;
                wp_redirect(home_url() . '/safety-planning-tool');
            } elseif (isset($_GET['step'])) {
                $step = $_GET['step'];
                $prev_step = $step - 1;
            } else {
                $step = $_SESSION["safety_form_data"]["Step"];
                $prev_step = $step - 1;
            }
            $data = $_SESSION["safety_form_data"];
        ?>
            <form method="post" id="step-form">
                <div class="container">
                    <div class="pagenumber">
                        <div class="prev-arrows">
                            <h4>Form <?php echo $step; ?> of 8</h4>
                            <?php if ($step != 1) { ?>
                                <a href="<?php echo home_url() . '/safety-planning-tool?back=true&step=' . $prev_step ?>" class="btn-prev">
                                    <i class="fa-solid fa-arrow-left"></i> Previous
                                </a>
                            <?php } ?>
                            |
                            <?php if ($step != 8) { ?>
                                <a href="#" class="btn-next">
                                    Next <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="col">
                            <?php if ($step != 8) { ?>
                                <h4>Out of Time?</h4>
                            <?php } ?>
                            <div class="wp-block-button">
                                <!--                            <a class="wp-block-button__link btn-text" href="">Submit Form Now</a>-->
                                <button type="submit" id="btnSubmit" name="btnSubmit" class="wp-block-button__link btn-text visible">Submit Form Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <?php
                switch ($step) {
                    case 2:
                        include_once(get_template_directory() . '/templates/safety-form/step-1.php');
                        break;
                    case 3:
                        include_once(get_template_directory() . '/templates/safety-form/step-2.php');
                        break;
                    case 4:
                        include_once(get_template_directory() . '/templates/safety-form/step-3.php');
                        break;
                    case 5:
                        include_once(get_template_directory() . '/templates/safety-form/step-4.php');
                        break;
                    case 6:
                        include_once(get_template_directory() . '/templates/safety-form/step-5.php');
                        break;
                    case 7:
                        include_once(get_template_directory() . '/templates/safety-form/step-6.php');
                        break;
                    case 8:
                        include_once(get_template_directory() . '/templates/safety-form/step-7.php');
                        break;
                    case 9:
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

                        include get_template_directory() . '/templates/safety-form/email.php';
                        // Prepare the email
                        $to = $data['email']; // The email address to send to
                        $subject = 'Your Safety Plan';
                        $body = include_once('email.php');
                        // Append other form data to the body
                        $headers = array('Content-Type: text/html; charset=UTF-8');

                        // Send the email
                        wp_mail($to, $subject, $email_template, $headers);

                        unset($_SESSION["safety_form_data"]);
                        wp_redirect(home_url('/safety-planning-tool?id=' . session_id())); // Replace '/success-page' with your actual success page URL
                        exit();
                        break;
                    default:
                        include_once(get_template_directory() . '/templates/safety-form/start.php');
                        break;
                }

                include_once(get_template_directory() . '/templates/safety-form/submit.php');

                ?>
                <hr />
                <div class="container"> <!-- Submit Buttons -->
                    <div class="pagenumber">
                        <div class="prev-arrows">
                            <h4>Form <?php echo $step; ?> of 8</h4>
                            <?php if ($step != 1) { ?>
                                <a href="<?php echo home_url() . '/safety-planning-tool?back=true&step=' . $prev_step ?>" class="btn-prev">
                                    <i class="fa-solid fa-arrow-left"></i> Previous
                                </a>
                            <?php } ?>
                            |
                            <?php if ($step != 8) { ?>
                                <a href="#" class="btn-next">
                                    Next <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="col">
                            <?php if ($step != 8) { ?>
                                <h4>Out of Time?</h4>
                            <?php } ?>
                            <div class="wp-block-button">
                                <!--                            <a class="wp-block-button__link btn-text" href="">Submit Form Now</a>-->
                                <button type="submit" id="btnSubmit" name="btnSubmit" class="wp-block-button__link btn-text visible">Submit Form Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Submit -->
            </form>
        <?php } ?>
    </section> <!-- End Form Basic Info -->
</main>

<?php
get_footer();
?>

<script>
    // jQuery to handle the click event on the hyperlink
    $(document).ready(function() {
        $('.error').hide();
        $('.btn-next').on('click', function(e) {
            $('#email').next().hide();
            $('#invalid_email').hide();
            var formStep = <?php echo json_encode($data['Step']); ?>;

            if (formStep === 2) {
                var email = $('#email').val();
                if (email.trim() !== '') {
                    // var emailRegex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                    // if (!emailRegex.test(email.value)) {
                    //     $('#invalid_email').show();
                    //     return false;
                    // }

                    // if (email == '') {
                    //     $('#email').next().show();
                    //     return false;
                    // }
                    if (IsEmail(email) == false) {
                        $('#invalid_email').show();
                        return false;
                    }

                    function IsEmail(email) {
                        var regex =
                            /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if (!regex.test(email)) {
                            return false;
                        } else {
                            return true;
                        }
                    }
                }
            }

            e.preventDefault(); // Prevent the default hyperlink action
            $('#step-form').submit(); // Submit the form
        });
    });
</script>