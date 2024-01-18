<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and save form data in session variables
    $_SESSION["safety_form_data"]["trustedPeople"] = isset($_POST["trustedPeople"]) ? $_POST["trustedPeople"] : NULL;
    $_SESSION["safety_form_data"]["codeWord"] = isset($_POST["codeWord"]) ? $_POST["codeWord"] : NULL;
    $_SESSION["safety_form_data"]["safeLocation"] = isset($_POST["safeLocation"]) ? $_POST["safeLocation"] : NULL;
    $_SESSION["safety_form_data"]["safePlace"] = isset($_POST["safePlace"]) ? $_POST["safePlace"] : NULL;
    $_SESSION["safety_form_data"]["notifyWhenLeaving"] = isset($_POST["notifyWhenLeaving"]) ? $_POST["notifyWhenLeaving"] : NULL;
    $_SESSION["safety_form_data"]["emergencyRide"] = isset($_POST["emergencyRide"]) ? $_POST["emergencyRide"] : NULL;
    $_SESSION["safety_form_data"]["checklist"] = isset($_POST["checklist"]) ? $_POST["checklist"] : array();
    $_SESSION["safety_form_data"]["other"] = isset($_POST["other"]) ? $_POST["other"] : NULL;
    $_SESSION["safety_form_data"]["whom"] = isset($_POST["whom"]) ? $_POST["whom"] : NULL;
    $_SESSION["safety_form_data"]["homeOtherInfo"] = isset($_POST["homeOtherInfo"]) ? $_POST["homeOtherInfo"] : NULL;
    $_SESSION["safety_form_data"]["Step"] = 4;
    if (!isset($_POST["btnSubmit"])) {
        wp_redirect(home_url() . '/safety-planning-tool?step=4');
    }
}

// if ((isset($_GET['back']) && $_GET['back'] === 'true') && (isset($data["teenager"]) && $data['teenager'] === '1')) {
//     wp_redirect(home_url() . '/safety-planning-tool?back=true&step=2');
// } elseif (isset($data["teenager"]) && $data['teenager'] === '1') {
//     $_SESSION["safety_form_data"]["trustedPeople"] = "";
//     $_SESSION["safety_form_data"]["codeWord"] = "";
//     $_SESSION["safety_form_data"]["safeLocation"] = "";
//     $_SESSION["safety_form_data"]["safePlace"] = "";
//     $_SESSION["safety_form_data"]["notifyWhenLeaving"] = "";
//     $_SESSION["safety_form_data"]["emergencyRide"] = "";
//     $_SESSION["safety_form_data"]["checklist"] = "";
//     $_SESSION["safety_form_data"]["other"] = "";
//     $_SESSION["safety_form_data"]["whom"] = "";
//     $_SESSION["safety_form_data"]["Step"] = 4;
//     wp_redirect(home_url() . '/safety-planning-tool?step=4');
// }

?>
<div class="container">
    <h2>Safety at Home </h2>
    <p>
    This section will help you plan for safety in your own home. Think through the questions and provide honest answers to the best of your ability. For some of these questions, we use the word "partner" to indicate the person causing you harm. However, these questions can apply to any person causing you harm, including family members.
    </p>
    <label for="trustedPeople" class="form-label">List the people in your life that you trust telling about
        your situation or that you've already told about your situation.</label>
    <textarea class="form-control" id="trustedPeople" name="trustedPeople"
              rows="2"><?php echo($data['trustedPeople']) ?></textarea>

    <label for="codeWord" class="form-label">What code word or phrase can you use to ask your trusted
        individuals to call for help without your partner knowing?</label>
    <textarea class="form-control" id="codeWord" name="codeWord" rows="2"><?php echo($data['codeWord']) ?></textarea>


    <label for="safeLocation" class="form-label">
        When you feel an argument or fight coming on, where can you move to lower your risk?</label>
    <textarea class="form-control" id="safeLocation" name="safeLocation"
              rows="2"><?php echo($data['safeLocation']) ?></textarea>

    <label for="safePlace" class="form-label">If you're feeling unsafe being at home, where could you go to
        stay safe?</label>
    <textarea class="form-control" id="safePlace" name="safePlace" rows="2"><?php echo($data['safePlace']) ?></textarea>

    <label for="notifyWhenLeaving" class="form-label">If you leave with your partner, whom could you call or
        text to let them know where you are going?</label>
    <textarea class="form-control" id="notifyWhenLeaving" name="notifyWhenLeaving"
              rows="2"><?php echo($data['notifyWhenLeaving']) ?></textarea>

    <label for="emergencyRide" class="form-label">If your partner leaves you stranded and in need of a ride,
        whom could you call or text to pick you up?</label>
    <textarea class="form-control" id="emergencyRide" name="emergencyRide"
              rows="2"><?php echo($data['emergencyRide']) ?></textarea>

    <div class="form-group">
        <label>If you need to leave your home quickly, what items would you need to take with you?</label><br>
    </div>
    <div class="form-grid">
        <?php foreach ($checklist as $key => $value) { ?>
            <div class="form-group">
                <label><?php echo $value; ?></label><br>
                <input type="checkbox" name="checklist[]"
                       value="<?php echo $key; ?>" <?php echo(in_array($key, $data['checklist']) ? 'checked="checked"' : '') ?>>
            </div>
        <?php } ?>
    </div> <!-- End Form Grid  -->

    <div class="form-label">
        <label>Other</label>
        <textarea class="form-control" id="other" name="other" rows="2"><?php echo($data['other']) ?></textarea>
    </div>

    <div class="form-label">
        <label>Who Should You Tell This To

            <em>If your partner no longer lives with you, who should you tell this to so that they can call
                the police if they are observed at your house? </em>

            <em>Think of any neighbors, friends, or family that might observe your house at any time. It'd
                also be good to consider additional security measures, such as outside cameras or security
                lighting. </em>

        </label><br>
        <textarea class="form-control" id="whom" name="whom" rows="2"><?php echo($data['whom']) ?></textarea>
    </div>

    <label for="homeOtherInfo" class="form-label">Is there any other information you want to write down to help with your safety at home? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
    <textarea class="form-control" id="homeOtherInfo" name="homeOtherInfo"
              rows="2"><?php echo($data['homeOtherInfo']) ?></textarea>

</div>