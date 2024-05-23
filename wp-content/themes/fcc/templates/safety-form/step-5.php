<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and save form data in session variables
    $_SESSION["safety_form_data"]["emergencycontact"] = isset($_POST["emergencycontact"]) ? $_POST["emergencycontact"] : NULL;
    $_SESSION["safety_form_data"]["childrensituation"] = isset($_POST["childrensituation"]) ? $_POST["childrensituation"] : NULL;
    $_SESSION["safety_form_data"]["wordforhelp"] = isset($_POST["wordforhelp"]) ? $_POST["wordforhelp"] : NULL;
    $_SESSION["safety_form_data"]["childgo"] = isset($_POST["childgo"]) ? $_POST["childgo"] : NULL;
    $_SESSION["safety_form_data"]["safeplace"] = isset($_POST["safeplace"]) ? $_POST["safeplace"] : NULL;
    $_SESSION["safety_form_data"]["childrenOtherInfo"] = isset($_POST["childrenOtherInfo"]) ? $_POST["childrenOtherInfo"] : NULL;
    $_SESSION["safety_form_data"]["Step"] = 7;
    if (!isset($_POST["btnSubmit"])) {
        wp_redirect(home_url() . '/safety-planning-tool?step=7');
    }
}

if ((isset($_GET['back']) && $_GET['back'] === 'true') && (isset($data["children"]) && $data['children'] === '0')) {
    wp_redirect(home_url() . '/safety-planning-tool?back=true&step=5');
} elseif (isset($data["children"]) && $data['children'] === '0') {
    $_SESSION["safety_form_data"]["emergencycontact"] = "";
    $_SESSION["safety_form_data"]["childrensituation"] = "";
    $_SESSION["safety_form_data"]["wordforhelp"] = "";
    $_SESSION["safety_form_data"]["childgo"] = "";
    $_SESSION["safety_form_data"]["safeplace"] = "";
    $_SESSION["safety_form_data"]["childrenOtherInfo"] = "";
    $_SESSION["safety_form_data"]["Step"] = 7;
    wp_redirect(home_url() . '/safety-planning-tool?step=7');
}
?>
<div class="container">

    <h2>Safety with Children </h2>
    <p>
    This section will help you plan for safety with your children. Think through the questions and provide honest answers to the best of your ability. A couple of things to keep in mind with children. It's important to teach them not to intervene in unsafe situations. It's also important to ensure they know how to call 911.
    </p>

    <label for="emergencycontact" class="form-label">
        Who can your children contact during an emergency? List the name and phone number for each contact.
        <em> List all of the people your children can contact. This should include family, friends, neighbors, emergency
            services, local agencies, and others. </em>
    </label>
    <textarea class="form-control" id="emergencycontact" name="emergencycontact"
              rows="2"><?php echo($data['emergencycontact']) ?></textarea>

    <label for="childrensituation" class="form-label">
        What should your children do when situations begin to escalate?
        <em> Do you want them to leave the home and go to a neighbor's house? Should they call someone? Is there a safe
            room in the house? Think about what you want them to do to stay safe. That can include staying safe from
            witnessing and hearing emotional abuse.
        </em>
    </label>
    <textarea class="form-control" id="childrensituation" name="childrensituation"
              rows="2"><?php echo($data['childrensituation']) ?></textarea>

    <label for="wordforhelp" class="form-label">
        What word or phrase can you use to let your children know that they should call for help? Include what they
        should do and who they should call when you use the code or phrase.
    </label>
    <textarea class="form-control" id="wordforhelp" name="wordforhelp"
              rows="2"><?php echo($data['wordforhelp']) ?></textarea>

    <label for="childgo" class="form-label">
        What rooms in the house can your children go to when they're afraid or need to seek safety? What rooms should
        your children avoid?
        <em>Children should avoid rooms that could include weapons or no escape, such as bathrooms and kitchens. </em>
    </label>
    <textarea class="form-control" id="childgo" name="childgo" rows="2"><?php echo($data['childgo']) ?></textarea>

    <label for="safeplace" class="form-label">
        Where is a safe place your children could go if they're in danger?
        <em>This could be a neighbor's house, a space in the house, police department, etc. It should be somewhere your
            children can get to safely on their own. </em>
    </label>
    <textarea class="form-control" id="safeplace" name="safeplace" rows="2"><?php echo($data['safeplace']) ?></textarea>

    <label for="childrenOtherInfo" class="form-label">Is there any other information you want to write down to help with your safety with children? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
    <textarea class="form-control" id="childrenOtherInfo" name="childrenOtherInfo" rows="2"><?php echo ($data['childrenOtherInfo']) ?></textarea>

</div>
