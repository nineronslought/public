<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["safety_form_data"]["Step"] = 2;
    wp_redirect(home_url() . '/safety-planning-tool?step=2');
}

?>
<div class="container">

    <h2>Safety Tips</h2>
    <h3>Planning for Your Safety</h3>

    <p>A safety plan is a tool for anyone who is experiencing domestic violence. It's a document that outlines specific steps you can take to stay safe in different situations, such as when you're at home, at work, at school, with children or pets, and more. Each plan is unique to the person filling it out because it is based on your life. You can use this online tool to help you create your individualized safety plan.</p>

    <h3>Before Getting Started</h3>

    <p>Before you start filling out your personalized safety plan, we want to make sure it's safe for you to do so. Since you're completing an online form, make sure you are in a safe location and that your computer is safe to use. Sometimes, partners monitor computer usage. If you suspect this is happening, consider using a different computer. Keep in mind that work and school computer usage might be monitored by the employer or school, so only use those computers if you feel comfortable doing so.</p>

    <p>If you don't feel safe filling out the form at all, you can still look through the questions and think about your answers.</p>

    <h3>Other Tips</h3>

    <p>Remember to answer the questions honestly and accurately. When you finish filling out your safety plan, you can either print it or have a copy emailed to you. Again, if your email is being monitored, consider printing a copy instead. You should keep your printed copy in a safe place that your partner can't access. You could also consider giving a copy to someone you trust. You know what's best in your situation, so trust yourself and do what's right for you.</p>

    <h3>When You're Finished</h3>

    <p>When you finish completing the safety plan, we want you to know that we don't store your information. We don't receive a copy of your safety plan or store it because we want to ensure your confidnetiality and privacy. If you leave the safety planning tool, you will need to start over when you return. This is intended to protect your confidentiality so that the safety plan isn't visible on the screen should someone visit the same link after you.</p>

</div>