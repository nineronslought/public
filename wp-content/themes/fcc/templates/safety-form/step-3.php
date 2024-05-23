<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and save form data in session variables
    $_SESSION["safety_form_data"]["workroute"] = isset($_POST["workroute"]) ? $_POST["workroute"] : NULL;
    $_SESSION["safety_form_data"]["enteralone"] = isset($_POST["enteralone"]) ? $_POST["enteralone"] : NULL;
    $_SESSION["safety_form_data"]["wheresafe"] = isset($_POST["wheresafe"]) ? $_POST["wheresafe"] : NULL;
    $_SESSION["safety_form_data"]["workpickup"] = isset($_POST["workpickup"]) ? $_POST["workpickup"] : NULL;
    $_SESSION["safety_form_data"]["workOtherInfo"] = isset($_POST["workOtherInfo"]) ? $_POST["workOtherInfo"] : NULL;

    $_SESSION["safety_form_data"]["Step"] = 5;
    if (!isset($_POST["btnSubmit"])) {
        wp_redirect(home_url() . '/safety-planning-tool?step=5');
    }
}
if ((isset($_GET['back']) && $_GET['back'] === 'true') && (isset($data["job"]) && $data['job'] === '0')) {
    wp_redirect(home_url() . '/safety-planning-tool?back=true&step=3');
} elseif (isset($data["job"]) && $data['job'] === '0') {
    $_SESSION["safety_form_data"]["workroute"] = "";
    $_SESSION["safety_form_data"]["enteralone"] = "";
    $_SESSION["safety_form_data"]["wheresafe"] = "";
    $_SESSION["safety_form_data"]["workpickup"] = "";
    $_SESSION["safety_form_data"]["workOtherInfo"] = "";
    $_SESSION["safety_form_data"]["Step"] = 5;
    wp_redirect(home_url() . '/safety-planning-tool?step=5');
}
?>

<div class="container">
    <h2>Safety at Work </h2>
    <p>
        This section will help you plan for safety while you're at work. Think through the questions and provide honest answers to the best of your ability. For some of these questions, we use the word "partner" to indicate the person causing you harm. However, these questions can apply to any person causing you harm.
    </p>


    <label for="workroute" class="form-label">
        What route can you take to avoid seeing your partner or ex-partner on your way to and from work? <em>This should
            be different than the route you typically take. Consider a couple of alternative routes.</em>
    </label>
    <textarea class="form-control" id="workroute" name="workroute" rows="2"><?php echo ($data['workroute']) ?></textarea>

    <label for="enteralone" class="form-label">
        Can you arrive and leave at times so that you're not entering and exiting your workplace alone?
    </label>
    <textarea class="form-control" id="enteralone" name="enteralone" rows="2"><?php echo ($data['enteralone']) ?></textarea>

    <label for="wheresafe" class="form-label">
        If your partner or ex-partner shows up at your workplace, where can you go to feel safe?
    </label>
    <textarea class="form-control" id="wheresafe" name="wheresafe" rows="2"><?php echo ($data['wheresafe']) ?></textarea>

    <label for="workpickup" class="form-label">
        If need to leave work immediately, who can you ask to pick you up, meet you, or take you from work? </label>
    <textarea class="form-control" id="workpickup" name="workpickup" rows="2"><?php echo ($data['workpickup']) ?></textarea>

    <label for="workOtherInfo" class="form-label">Is there any other information you want to write down to help with your safety at work? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
    <textarea class="form-control" id="workOtherInfo" name="workOtherInfo" rows="2"><?php echo ($data['workOtherInfo']) ?></textarea>

</div>