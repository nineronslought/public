<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and save form data in session variables
    $_SESSION["safety_form_data"]["petprovider"] = isset($_POST["petprovider"]) ? $_POST["petprovider"] : NULL;
    $_SESSION["safety_form_data"]["nearestvet"] = isset($_POST["nearestvet"]) ? $_POST["nearestvet"] : NULL;
    $_SESSION["safety_form_data"]["ownership"] = isset($_POST["ownership"]) ? $_POST["ownership"] : NULL;
    $_SESSION["safety_form_data"]["takepet"] = isset($_POST["takepet"]) ? $_POST["takepet"] : NULL;
    $_SESSION["safety_form_data"]["pet_checklist"] = isset($_POST["pet_checklist"]) ? $_POST["pet_checklist"] : array();
    $_SESSION["safety_form_data"]["othervets"] = isset($_POST["othervets"]) ? $_POST["othervets"] : NULL;
    $_SESSION["safety_form_data"]["microchipped"] = isset($_POST["microchipped"]) ? $_POST["microchipped"] : NULL;
    $_SESSION["safety_form_data"]["petroute"] = isset($_POST["petroute"]) ? $_POST["petroute"] : NULL;
    $_SESSION["safety_form_data"]["petOtherInfo"] = isset($_POST["petOtherInfo"]) ? $_POST["petOtherInfo"] : NULL;
    $_SESSION["safety_form_data"]["Step"] = 8;
    if (!isset($_POST["btnSubmit"])) {
        wp_redirect(home_url() . '/safety-planning-tool?step=8');
    }
}

if ((isset($_GET['back']) && $_GET['back'] === 'true') && (isset($data["pets"]) && $data['pets'] === '0')) {
    wp_redirect(home_url() . '/safety-planning-tool?back=true&step=6');
} elseif (isset($data["pets"]) && $data['pets'] === '0') {
    $_SESSION["safety_form_data"]["petprovider"] = "";
    $_SESSION["safety_form_data"]["nearestvet"] = "";
    $_SESSION["safety_form_data"]["ownership"] = "";
    $_SESSION["safety_form_data"]["takepet"] = "";
    $_SESSION["safety_form_data"]["pet_checklist"] = "";
    $_SESSION["safety_form_data"]["othervets"] = "";
    $_SESSION["safety_form_data"]["microchipped"] = "";
    $_SESSION["safety_form_data"]["petroute"] = "";
    $_SESSION["safety_form_data"]["petOtherInfo"] = "";
    $_SESSION["safety_form_data"]["Step"] = 8;
    wp_redirect(home_url() . '/safety-planning-tool?step=8');
}
?>

<div class="container">
    <h2>Safety for Pets </h2>
    <p>
    This section will help you plan for safety with your pets. Think through the questions and provide honest answers to the best of your ability.
    </p>

    <label for="petprovider" class="form-label">
        Where can you store emergency provisions for your pet(s), and what should be included?
        <em>It's good to have emergency provisions stored for your pet(s) in case your partner withholds
            money from you.</em>
    </label>
    <textarea class="form-control" id="petprovider" name="petprovider"
              rows="2"><?php echo($data['petprovider']) ?></textarea>

    <label for="nearestvet" class="form-label">
        What is the name, address, and phone number of the nearest vet that provides 24-hour emergency
        services?
    </label>
    <textarea class="form-control" id="nearestvet" name="nearestvet"
              rows="2"><?php echo($data['nearestvet']) ?></textarea>

    <label for="ownership" class="form-label">
        Is your pet's ownership in your name? If yes, list documents that prove ownership and keep copies of
        those somewhere safe. If not, what steps do you need to take to establish ownership?
        <em> You can establish ownership by making sure your pet(s) are vaccinated and licensed where you
            live and in your name. If they are not in your name or at your address, take steps to have them
            changed.
        </em>
    </label>
    <textarea class="form-control" id="ownership" name="ownership" rows="2"><?php echo($data['ownership']) ?></textarea>

    <label for="takepet" class="form-label">
        Who could take your pet(s) if you need to leave your home immediately?
        <em> Think of trusted individuals, friends, family, or boarding facilities, including the vet. Make
            sure you have copies of your pet's vaccination records. It's also important to make sure this
            location isn't disclosed to your partner.
        </em>
    </label>
    <textarea class="form-control" id="takepet" name="takepet" rows="2"><?php echo($data['takepet']) ?></textarea>


    <div class="form-group">
        <label>If you need to leave with your pet(s), what do you need to take with you for
            them? </label><br>
    </div>

    <div class="form-grid">
        <?php
        // Ensure $data['pet_checklist'] is always an array
        $petChecklistItems = $data['pet_checklist'] ?? [];

        foreach ($pet_checklist as $key => $value) { ?>
            <div class="form-group">
                <label><?php echo $value; ?></label><br>
                <input type="checkbox" name="pet_checklist[]" value="<?php echo $key; ?>" <?php echo (in_array($key, $petChecklistItems) ? 'checked="checked"' : '') ?>>
            </div>
        <?php } ?>
    </div> <!-- End Form Grid  -->


    <label for="othervets" class="form-label">
        What are some alternative veterinarians you could use if you need to change due to your partner?
    </label>
    <textarea class="form-control" id="othervets" name="othervets" rows="2"><?php echo($data['othervets']) ?></textarea>

    <label for="microchipped" class="form-label">
        Is your pet microchipped? Who is listed as a contact? Do you need to change it?
    </label>
    <textarea class="form-control" id="microchipped" name="microchipped"
              rows="2"><?php echo($data['microchipped']) ?></textarea>


    <label for="petroute" class="form-label">
        If you need to walk your pet(s), what is the safest route? Is there anyone that could go with you?
    </label>
    <textarea class="form-control" id="petroute" name="petroute" rows="2"><?php echo($data['petroute']) ?></textarea>

    <label for="petOtherInfo" class="form-label">Is there any other information you want to write down to help with your safety with your pets? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
    <textarea class="form-control" id="petOtherInfo" name="petOtherInfo" rows="2"><?php echo ($data['petOtherInfo']) ?></textarea>

</div>
