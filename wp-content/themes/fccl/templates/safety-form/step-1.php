<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and save form data in session variables
    $_SESSION["safety_form_data"]["job"] = isset($_POST["job"]) ? $_POST["job"] : null;
    $_SESSION["safety_form_data"]["school"] = isset($_POST["school"]) ? $_POST["school"] : null;
    $_SESSION["safety_form_data"]["teenager"] = isset($_POST["teenager"]) ? $_POST["teenager"] : null;
    $_SESSION["safety_form_data"]["children"] = isset($_POST["children"]) ? $_POST["children"] : null;
    $_SESSION["safety_form_data"]["pets"] = isset($_POST["pets"]) ? $_POST["pets"] : null;
    $_SESSION["safety_form_data"]["email"] = isset($_POST["email"]) ? $_POST["email"] : null;
    $_SESSION["safety_form_data"]["Step"] = 3;

    if (!isset($_POST["btnSubmit"])) {
        wp_redirect(home_url() . '/safety-planning-tool?step=3');
    }
}

?>
<div class="container">
    <h2>Basic Information</h2>
    <!-- <p>
        I'd like to include some narrative text here before the questions. I'll provide this as soon as I
        have it.
    </p> -->


    <div class="form-group">
        <label>Do you work outside the home?</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="job" id="jobYes" value="1" <?php echo ($data['job'] === '1' ? 'checked="checked"' : '') ?>>
            <label class="form-check-label" for="jobYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="job" id="jobNo" value="0" <?php echo ($data['job'] === '0' ? 'checked="checked"' : '') ?>>
            <label class="form-check-label" for="jobNo">No</label>
        </div>
    </div>
    <div class="form-group">
        <label>Do you currently attend school in person?</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="school" id="schoolYes" value="1" <?php echo ($data['school'] === '1' ? 'checked="checked"' : '') ?>>
            <label class="form-check-label" for="schoolYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="school" id="schoolNo" value="0" <?php echo ($data['school'] === '0' ? 'checked="checked"' : '') ?>>
            <label class="form-check-label" for="schoolNo">No</label>
        </div>
    </div>
    <div class="form-group">
        <label>Are you a teenager?</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="teenager" id="teenagerYes" value="1" <?php echo ($data['teenager'] === '1' ? 'checked="checked"' : '') ?>>
            <label class="form-check-label" for="teenagerYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="teenager" id="teenagerNo" value="0" <?php echo ($data['teenager'] === '0' ? 'checked="checked"' : '') ?>>
            <label class="form-check-label" for="teenagerNo">No</label>
        </div>
    </div>
    <div class="form-group">
        <label>Do you have children (or are you currently pregnant)?</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="children" id="childrenYes" value="1" <?php echo ($data['children'] === '1' ? 'checked="checked"' : '') ?>>
            <label class="form-check-label" for="childrenYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="children" id="childrenNo" value="0" <?php echo ($data['children'] === '0' ? 'checked="checked"' : '') ?>>
            <label class="form-check-label" for="childrenNo">No</label>
        </div>
    </div>
    <div class="form-group">
        <label>Do you have pets?</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pets" id="petsYes" value="1" <?php echo ($data['pets'] === '1' ? 'checked="checked"' : '') ?>>
            <label class="form-check-label" for="petsYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pets" id="petsNo" value="0" <?php echo ($data['pets'] === '0' ? 'checked="checked"' : '') ?>>
            <label class="form-check-label" for="petsNo">No</label>
        </div>
    </div>
    <div class="form-group">
        <label>Email Address
        </label>
        <p>We'll email a private link to your safety plan to this email address. If your partner
            monitors your email, use an email address of a trusted friend or family member. This link
            will expire after 24 hours and your private data will be deleted from our site. We never
            store your information.<br><strong>If you do not want your safety plan emailed to you, you'll be able to print or save a copy at the end. Entering an email address is optional.</strong>
        </p>

        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php echo ($data['email']) ?>">
        <!-- <span class="error">
            Please enter your email.
        </span> -->
        <span class="error" id="invalid_email">
            Email is invalid.
        </span>
    </div>
    <input type="hidden" id="next-step" name="next-step" value="2">
</div>

<style>
    .error {
        padding: 5px;
        color: red;
    }
</style>