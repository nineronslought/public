<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and save form data in session variables
    $_SESSION["safety_form_data"]["schoolroute"] = isset($_POST["schoolroute"]) ? $_POST["schoolroute"] : NULL;
    $_SESSION["safety_form_data"]["whombetweenclasses"] = isset($_POST["whombetweenclasses"]) ? $_POST["whombetweenclasses"] : NULL;
    $_SESSION["safety_form_data"]["schoolpickup"] = isset($_POST["schoolpickup"]) ? $_POST["schoolpickup"] : NULL;
    $_SESSION["safety_form_data"]["schoolOtherInfo"] = isset($_POST["schoolOtherInfo"]) ? $_POST["schoolOtherInfo"] : NULL;
    $_SESSION["safety_form_data"]["Step"] = 6;
    if (!isset($_POST["btnSubmit"])) {
        wp_redirect(home_url() . '/safety-planning-tool?step=6');
    }
}

if ((isset($_GET['back']) && $_GET['back'] === 'true') && (isset($data["school"]) && $data['school'] === '0')) {
    wp_redirect(home_url() . '/safety-planning-tool?back=true&step=4');
} elseif (isset($data["school"]) && $data['school'] === '0') {
    $_SESSION["safety_form_data"]["schoolroute"] = "";
    $_SESSION["safety_form_data"]["whombetweenclasses"] = "";
    $_SESSION["safety_form_data"]["schoolpickup"] = "";
    $_SESSION["safety_form_data"]["schoolOtherInfo"] = "";
    $_SESSION["safety_form_data"]["Step"] = 6;
    wp_redirect(home_url() . '/safety-planning-tool?step=6');
}
?>
<div class="container">
    <h2>Safety at School </h2>
    <p>
        This section will help you plan for safety while you're at school. Think through the questions and provide honest answers to the best of your ability. For some of these questions, we use the word "partner or ex-partner" to indicate the person causing you harm. However, these questions can apply to any person causing you harm.
    </p>


    <label for="schoolroute" class="form-label">
        What route can you take to get to school safely and avoid seeing your partner or ex-partner on your way?
        <em>This should be different than the route you typically take. Consider a couple of alternative routes.</em>
    </label>
    <textarea class="form-control" id="schoolroute" name="schoolroute" rows="2"><?php echo ($data['schoolroute']) ?></textarea>

    <label for="whombetweenclasses" class="form-label">
        If your partner or ex-partner attends school with you, whom can you spend time with between classes so that you
        aren't alone?
    </label>
    <textarea class="form-control" id="whombetweenclasses" name="whombetweenclasses" rows="2"><?php echo ($data['whombetweenclasses']) ?></textarea>

    <label for="schoolpickup" class="form-label">
        If you need to leave school immediately, whom can you call to pick you up or meet you somewhere?
    </label>
    <textarea class="form-control" id="schoolpickup" name="schoolpickup" rows="2"><?php echo ($data['schoolpickup']) ?></textarea>

    <label for="schoolOtherInfo" class="form-label">Is there any other information you want to write down to help with your safety at school? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
    <textarea class="form-control" id="schoolOtherInfo" name="schoolOtherInfo" rows="2"><?php echo ($data['schoolOtherInfo']) ?></textarea>

</div>