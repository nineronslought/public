<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and save form data in session variables
    $_SESSION["safety_form_data"]["whocallrelationship"] = isset($_POST["whocallrelationship"]) ? $_POST["whocallrelationship"] : NULL;
    $_SESSION["safety_form_data"]["friends"] = isset($_POST["friends"]) ? $_POST["friends"] : NULL;
    $_SESSION["safety_form_data"]["codeword"] = isset($_POST["codeword"]) ? $_POST["codeword"] : NULL;
    $_SESSION["safety_form_data"]["dofeelsafe"] = isset($_POST["dofeelsafe"]) ? $_POST["dofeelsafe"] : NULL;
    $_SESSION["safety_form_data"]["leavesituation"] = isset($_POST["leavesituation"]) ? $_POST["leavesituation"] : NULL;
    $_SESSION["safety_form_data"]["feelingdown"] = isset($_POST["feelingdown"]) ? $_POST["feelingdown"] : NULL;
    $_SESSION["safety_form_data"]["wherestaysafe"] = isset($_POST["wherestaysafe"]) ? $_POST["wherestaysafe"] : NULL;
    $_SESSION["safety_form_data"]["teenagerOtherInfo"] = isset($_POST["teenagerOtherInfo"]) ? $_POST["teenagerOtherInfo"] : NULL;
    $_SESSION["safety_form_data"]["Step"] = 9;
    if (!isset($_POST["btnSubmit"])) {
        wp_redirect(home_url() . '/safety-planning-tool?step=9');
    }
}

if ((isset($_GET['back']) && $_GET['back'] === 'true') && (isset($data["teenager"]) && $data['teenager'] === '0')) {
    wp_redirect(home_url() . '/safety-planning-tool?back=true&step=7');
} elseif (isset($data["teenager"]) && $data['teenager'] === '0') {
    $_SESSION["safety_form_data"]["whocallrelationship"] = "";
    $_SESSION["safety_form_data"]["friends"] = "";
    $_SESSION["safety_form_data"]["codeword"] = "";
    $_SESSION["safety_form_data"]["dofeelsafe"] = "";
    $_SESSION["safety_form_data"]["leavesituation"] = "";
    $_SESSION["safety_form_data"]["feelingdown"] = "";
    $_SESSION["safety_form_data"]["wherestaysafe"] = "";
    $_SESSION["safety_form_data"]["teenagerOtherInfo"] = "";
    $_SESSION["safety_form_data"]["Step"] = 9;
    wp_redirect(home_url() . '/safety-planning-tool?step=9');
}
?>

<div class="container">
    <h2>Safety for Teenagers</h2>
    <p>
    This section will help you plan for your safety as a teenager. Think through the questions and provide honest answers to the best of your ability. For some of these questions, we use the word "boyfriend or girlfriend" to indicate the person causing you harm. However, these questions can apply to any person causing you harm, including family members, friends, or others.
    </p>

    <hr>
    <label for="whocallrelationship" class="form-label">
        What family member can you tell about what is going on in your relationship?
    </label>
    <textarea class="form-control" id="whocallrelationship" name="whocallrelationship" rows="2"><?php echo ($data['whocallrelationship']) ?></textarea>

    <label for="friends" class="form-label">
        Which friends can you trust and ask for help?
    </label>
    <textarea class="form-control" id="friends" name="friends" rows="2"><?php echo ($data['friends']) ?></textarea>

    <label for="codeword" class="form-label">
        What code word or phrase can you share with the people you trust so that when you use it they know to call for
        help for you?
    </label>
    <textarea class="form-control" id="codeword" name="codeword" rows="2"><?php echo ($data['codeword']) ?></textarea>

    <label for="dofeelsafe" class="form-label">
        There might be times when you're home alone. What can you do to feel safe? Who could you invite over so you're
        not alone?
    </label>
    <textarea class="form-control" id="dofeelsafe" name="dofeelsafe" rows="2"><?php echo ($data['dofeelsafe']) ?></textarea>

    <label for="leavesituation" class="form-label">
        If you're with your boyfriend or girlfriend and not feeling safe, what can you do or say to leave the situation?
    </label>
    <textarea class="form-control" id="leavesituation" name="leavesituation" rows="2"><?php echo ($data['leavesituation']) ?></textarea>

    <label for="feelingdown" class="form-label">
        What are some things you could do when you're feeling down?
        <em>Unhealthy/abusive relationships can take a toll on your mental health. Try to think of things you could do
            that make you happy. Talking with friends or exercise are healthy things to do. </em>
    </label>
    <textarea class="form-control" id="feelingdown" name="feelingdown" rows="2"><?php echo ($data['feelingdown']) ?></textarea>


    <label for="wherestaysafe" class="form-label">
        If you need to leave in an emergency, where could you go to stay safe?
        <em>Consider a friend's house, somewhere public, or some other place where you feel safe. Consider places that
            are unknown to your boyfriend or girlfriend. </em>
    </label>
    <textarea class="form-control" id="wherestaysafe" name="wherestaysafe" rows="2"><?php echo ($data['wherestaysafe']) ?></textarea>

    <label for="teenagerOtherInfo" class="form-label">Is there any other information you want to write down to help with your safety? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
    <textarea class="form-control" id="teenagerOtherInfo" name="teenagerOtherInfo" rows="2"><?php echo ($data['teenagerOtherInfo']) ?></textarea>

</div>