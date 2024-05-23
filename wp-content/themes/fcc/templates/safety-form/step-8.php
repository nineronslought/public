<style>
    @media print {
        #printButton {
            display: none;
        }
    }
</style>
<div class="container">
    <div class="pagenumber">
        <div class="prev-arrows">
            <h2 style="margin: 0 0 0 0;">Your Safety Plan</h2>
        </div>
        <div class="col">
            <div class="wp-block-button">
                <button id="printButton" name="printButton" class="wp-block-button__link btn-text visible">
                    Print/Download
                </button>
            </div>
        </div>
    </div>
    <br />
    <p>Kindly note, you may conveniently download Your Safety Plan by clicking on the Print/Download button which will get saved on your device. Please download it only if you feel it is safe to do so. Furthermore,
        we have sent a link to your email address to access your submission. Please be advised that this link is valid
        for 24 hours only.</p>
    <hr />
    

  
        <h2>Safety at Home </h2>
        <label class="form-label">List the people in your life that you trust telling about
            your situation or that you've already told about your situation.</label>
        <p> <?php echo (isset($data["trustedPeople"]) && !empty($data["trustedPeople"])) ? $data["trustedPeople"] : "N/A"; ?> </p>

        <label class="form-label">What code word or phrase can you use to ask your trusted
            individuals to call for help without your partner knowing?</label>
        <p> <?php echo (isset($data["codeWord"]) && !empty($data["codeWord"])) ? $data["codeWord"] : "N/A"; ?> </p>

        <label class="form-label ">
            When you feel an argument or fight coming on, where can you move to lower your risk?</label>
        <p> <?php echo (isset($data["safeLocation"]) && !empty($data["safeLocation"])) ? $data["safeLocation"] : "N/A"; ?> </p>

        <label class="form-label ">If you're feeling unsafe being at home, where could you go to
            stay safe?</label>
        <p> <?php echo (isset($data["safePlace"]) && !empty($data["safePlace"])) ? $data["safePlace"] : "N/A"; ?> </p>

        <label class="form-label ">If you leave with your partner, whom could you call or
            text to let them know where you are going?</label>
        <p> <?php echo (isset($data["notifyWhenLeaving"]) && !empty($data["notifyWhenLeaving"])) ? $data["notifyWhenLeaving"] : "N/A"; ?> </p>

        <label class="form-label ">If your partner leaves you stranded and in need of a ride,
            whom could you call or text to pick you up?</label>
        <p> <?php echo (isset($data["emergencyRide"]) && !empty($data["emergencyRide"])) ? $data["emergencyRide"] : "N/A"; ?> </p>

        <label class="form-label ">If you need to leave your home quickly, what items would you need to take with
            you?</label>
        <?php foreach ($data["checklist"] as $key => $value) {
            echo $checklist[$value] . '<br/>';
        } ?>

        <label class="form-label ">Other</label>
        <p> <?php echo (isset($data["other"]) && !empty($data["other"])) ? $data["other"] : "N/A"; ?> </p>

        <label class="form-label ">Who Should You Tell This To

            <em>If your partner no longer lives with you, who should you tell this to so that they can call
                the police if they are observed at your house? </em>

            <em>Think of any neighbors, friends, or family that might observe your house at any time. It'd
                also be good to consider additional security measures, such as outside cameras or security
                lighting. </em>
        </label>
        <p> <?php echo (isset($data["whom"]) && !empty($data["whom"])) ? $data["whom"] : "N/A"; ?> </p>

        <label class="form-label ">Is there any other information you want to write down to help with your safety at home? <em> Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation. </em></label>
        <p> <?php echo (isset($data["homeOtherInfo"]) && !empty($data["homeOtherInfo"])) ? $data["homeOtherInfo"] : "N/A"; ?> </p>

        <hr>


    <?php if (isset($data["job"]) && $data['job'] === '1') { ?>

        <h2>Safety at Work </h2>
        <label class="form-label">
            What route can you take to avoid seeing your partner or ex-partner on your way to and from work? <em>This should
                be different than the route you typically take. Consider a couple of alternative routes.</em>
        </label>
        <p> <?php echo (isset($data["workroute"]) && !empty($data["workroute"])) ? $data["workroute"] : "N/A"; ?> </p>

        <label class="form-label">
            Can you arrive and leave at times so that you're not entering and exiting your workplace alone?
        </label>
        <p> <?php echo (isset($data["enteralone"]) && !empty($data["enteralone"])) ? $data["enteralone"] : "N/A"; ?> </p>

        <label class="form-label">
            If your partner or ex-partner shows up at your workplace, where can you go to feel safe?
        </label>
        <p> <?php echo (isset($data["wheresafe"]) && !empty($data["wheresafe"])) ? $data["wheresafe"] : "N/A"; ?> </p>

        <label class="form-label">
            If need to leave work immediately, who can you ask to pick you up, meet you, or take you from work? </label>
        <p> <?php echo (isset($data["workpickup"]) && !empty($data["workpickup"])) ? $data["workpickup"] : "N/A"; ?> </p>

        <label class="form-label">
        Is there any other information you want to write down to help with your safety at work? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
        <p> <?php echo (isset($data["workOtherInfo"]) && !empty($data["workOtherInfo"])) ? $data["workOtherInfo"] : "N/A"; ?> </p>
        <hr>

    <?php } ?>

    <?php if (isset($data["school"]) && $data['school'] === '1') { ?>

        <h2>Safety at School </h2>

        <label class="form-label">
            What route can you take to get to school safely and avoid seeing your partner or ex-partner on your way?
            <em>This should be different than the route you typically take. Consider a couple of alternative routes.</em>
        </label>
        <p> <?php echo (isset($data["schoolroute"]) && !empty($data["schoolroute"])) ? $data["schoolroute"] : "N/A"; ?> </p>

        <label class="form-label">
            If your partner or ex-partner attends school with you, whom can you spend time with between classes so that you
            aren't alone?
        </label>
        <p> <?php echo (isset($data["whombetweenclasses"]) && !empty($data["whombetweenclasses"])) ? $data["whombetweenclasses"] : "N/A"; ?> </p>

        <label class="form-label">
            If you need to leave school immediately, whom can you call to pick you up or meet you somewhere?
        </label>
        <p> <?php echo (isset($data["schoolpickup"]) && !empty($data["schoolpickup"])) ? $data["schoolpickup"] : "N/A"; ?> </p>

        <label class="form-label">
        Is there any other information you want to write down to help with your safety at school? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
        <p> <?php echo (isset($data["schoolOtherInfo"]) && !empty($data["schoolOtherInfo"])) ? $data["schoolOtherInfo"] : "N/A"; ?> </p>
        
        <hr>

    <?php } ?>

    <?php if (isset($data["children"]) && $data['children'] === '1') { ?>

        <h2>Safety with Children </h2>

        <label class="form-label">
            Who can your children contact during an emergency? List the name and phone number for each contact.
            <em> List all of the people your children can contact. This should include family, friends, neighbors, emergency
                services, local agencies, and others. </em>
        </label>
        <p> <?php echo (isset($data["schoolpickup"]) && !empty($data["schoolpickup"])) ? $data["emergencycontact"] : "N/A"; ?> </p>

        <label class="form-label">
            What should your children do when situations begin to escalate?
            <em> Do you want them to leave the home and go to a neighbor's house? Should they call someone? Is there a safe
                room in the house? Think about what you want them to do to stay safe. That can include staying safe from
                witnessing and hearing emotional abuse.
            </em>
        </label>
        <p> <?php echo (isset($data["childrensituation"]) && !empty($data["childrensituation"])) ? $data["childrensituation"] : "N/A"; ?> </p>

        <label class="form-label">
            What word or phrase can you use to let your children know that they should call for help? Include what they
            should do and who they should call when you use the code or phrase.
        </label>
        <p> <?php echo (isset($data["wordforhelp"]) && !empty($data["wordforhelp"])) ? $data["wordforhelp"] : "N/A"; ?> </p>

        <label class="form-label">
            What rooms in the house can your children go to when they're afraid or need to seek safety? What rooms should
            your children avoid?
            <em>Children should avoid rooms that could include weapons or no escape, such as bathrooms and kitchens. </em>
        </label>
        <p> <?php echo (isset($data["childgo"]) && !empty($data["childgo"])) ? $data["childgo"] : "N/A"; ?> </p>

        <label class="form-label">
            Where is a safe place your children could go if they're in danger?
            <em>This could be a neighbor's house, a space in the house, police department, etc. It should be somewhere your
                children can get to safely on their own. </em>
        </label>
        <p> <?php echo (isset($data["safeplace"]) && !empty($data["safeplace"])) ? $data["safeplace"] : "N/A"; ?> </p>

        <label class="form-label">
        Is there any other information you want to write down to help with your safety with children? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
        <p> <?php echo (isset($data["childrenOtherInfo"]) && !empty($data["childrenOtherInfo"])) ? $data["childrenOtherInfo"] : "N/A"; ?> </p>
        
        <hr>

    <?php } ?>

    <?php if (isset($data["pets"]) && $data['pets'] === '1') { ?>

        <h2>Safety for Pets </h2>

        <label class="form-label">
            Where can you store emergency provisions for your pet(s), and what should be included?
            <em>It's good to have emergency provisions stored for your pet(s) in case your partner withholds
                money from you.</em>
        </label>
        <p> <?php echo (isset($data["petprovider"]) && !empty($data["petprovider"])) ? $data["petprovider"] : "N/A"; ?> </p>

        <label class="form-label">
            What is the name, address, and phone number of the nearest vet that provides 24-hour emergency
            services?
        </label>
        <p> <?php echo (isset($data["nearestvet"]) && !empty($data["nearestvet"])) ? $data["nearestvet"] : "N/A"; ?> </p>

        <label class="form-label">
            Is your pet's ownership in your name? If yes, list documents that prove ownership and keep copies of
            those somewhere safe. If not, what steps do you need to take to establish ownership?
            <em> You can establish ownership by making sure your pet(s) are vaccinated and licensed where you
                live and in your name. If they are not in your name or at your address, take steps to have them
                changed.
            </em>
        </label>
        <p> <?php echo (isset($data["ownership"]) && !empty($data["ownership"])) ? $data["ownership"] : "N/A"; ?> </p>

        <label class="form-label">
            Who could take your pet(s) if you need to leave your home immediately?
            <em> Think of trusted individuals, friends, family, or boarding facilities, including the vet. Make
                sure you have copies of your pet's vaccination records. It's also important to make sure this
                location isn't disclosed to your partner.
            </em>
        </label>
        <p> <?php echo (isset($data["takepet"]) && !empty($data["takepet"])) ? $data["takepet"] : "N/A"; ?> </p>

        <label class="form-label">If you need to leave with your pet(s), what do you need to take with you for
            them? </label>
        <?php foreach ($data["pet_checklist"] as $key => $value) {
            echo $pet_checklist[$value] . '<br/>';
        } ?>

        <label class="form-label">
            What are some alternative veterinarians you could use if you need to change due to your partner?
        </label>
        <p> <?php echo (isset($data["othervets"]) && !empty($data["othervets"])) ? $data["othervets"] : "N/A"; ?> </p>

        <label class="form-label">
            Is your pet microchipped? Who is listed as a contact? Do you need to change it?
        </label>
        <p> <?php echo (isset($data["microchipped"]) && !empty($data["microchipped"])) ? $data["microchipped"] : "N/A"; ?> </p>

        <label class="form-label">
            If you need to walk your pet(s), what is the safest route? Is there anyone that could go with you?
        </label>
        <p> <?php echo (isset($data["petroute"]) && !empty($data["petroute"])) ? $data["petroute"] : "N/A"; ?> </p>

        <label class="form-label">
        Is there any other information you want to write down to help with your safety with your pet? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
        <p> <?php echo (isset($data["petOtherInfo"]) && !empty($data["petOtherInfo"])) ? $data["petOtherInfo"] : "N/A"; ?> </p>
        
        <hr>

    <?php } ?>

    <?php if (isset($data["teenager"]) && $data['teenager'] === '1') { ?>
        <h2>Safety for Teenagers</h2>

        <label class="form-label">
            What family member can you tell about what is going on in your relationship?
        </label>
        <p> <?php echo (isset($data["whocallrelationship"]) && !empty($data["whocallrelationship"])) ? $data["whocallrelationship"] : "N/A"; ?> </p>

        <label class="form-label">
            Which friends can you trust and ask for help?
        </label>
        <p> <?php echo (isset($data["friends"]) && !empty($data["friends"])) ? $data["friends"] : "N/A"; ?> </p>

        <label class="form-label">
            What code word or phrase can you share with the people you trust so that when you use it they know to call for
            help for you?
        </label>
        <p> <?php echo (isset($data["codeword"]) && !empty($data["codeword"])) ? $data["codeword"] : "N/A"; ?> </p>

        <label class="form-label">
            There might be times when you're home alone. What can you do to feel safe? Who could you invite over so you're
            not alone?
        </label>
        <p> <?php echo (isset($data["dofeelsafe"]) && !empty($data["dofeelsafe"])) ? $data["dofeelsafe"] : "N/A"; ?> </p>

        <label class="form-label">
            If you're with your boyfriend or girlfriend and not feeling safe, what can you do or say to leave the situation?
        </label>
        <p> <?php echo (isset($data["leavesituation"]) && !empty($data["leavesituation"])) ? $data["leavesituation"] : "N/A"; ?> </p>

        <label class="form-label">
            What are some things you could do when you're feeling down?
            <em>Unhealthy/abusive relationships can take a toll on your mental health. Try to think of things you could do
                that make you happy. Talking with friends or exercise are healthy things to do. </em>
        </label>
        <p> <?php echo (isset($data["feelingdown"]) && !empty($data["feelingdown"])) ? $data["feelingdown"] : "N/A"; ?> </p>

        <label class="form-label">
            If you need to leave in an emergency, where could you go to stay safe?
            <em>Consider a friend's house, somewhere public, or some other place where you feel safe. Consider places that
                are unknown to your boyfriend or girlfriend. </em>
        </label>
        <p> <?php echo (isset($data["wherestaysafe"]) && !empty($data["wherestaysafe"])) ? $data["wherestaysafe"] : "N/A"; ?> </p>

        <label class="form-label">
        Is there any other information you want to write down to help with your safety? <em>Writing things down can help provide clarity in stressful situations because even when something seems obvious, it can be difficult to think clearly in a crisis situation.</em></label>
        <p> <?php echo (isset($data["teenagerOtherInfo"]) && !empty($data["teenagerOtherInfo"])) ? $data["teenagerOtherInfo"] : "N/A"; ?> </p>
        
        <hr>

    <?php } ?>

    <h2>Technology Safety </h2>
    <p>
    When it comes to domestic violence, your partner (or the person causing you harm) might use technology to monitor and control you. Here are some things to keep in mind as you use technology. 
    </p>
    <ul>
    <li>Your computer could be monitored without you knowing it. Consider using a computer that's not at your home, such as the library or work.</li>
    <li>Your cell phone could be monitored without you knowing it. Consider a pay-as-you-go phone if you can keep it in a safe, undetected place.</li>
    <li>Email can be intercepted by someone else. Consider opening an email account that is unknown to the person who causes you harm.</li>
    <li>GPS trackers can be placed on your car or any other personal item, like purses, backpacks, and cell phones.</li>
    <li>If you've gone through the court system, be aware that some court systems publish records online, which can include personal information.</li>
    <li>Posts on social media are never truly private.</li>
  </ul>

</div> <!-- End  -->
<script>
    function printSafetyFormHTML() {
        var safetyFormElement = document.querySelector('section.safety-form');
        if (safetyFormElement) {
            var htmlContent = safetyFormElement.outerHTML;

            var iframe = document.createElement('iframe');
            iframe.style.visibility = "hidden";
            document.body.appendChild(iframe);

            iframe.contentWindow.document.open();
            iframe.contentWindow.document.write(htmlContent);
            iframe.contentWindow.document.close();

            setTimeout(function() {
                iframe.contentWindow.focus();
                iframe.contentWindow.print();
                document.body.removeChild(iframe);
            }, 250);
        } else {
            console.error('Safety form section not found');
        }
    }

    document.getElementById('printButton').addEventListener('click', function() {
        printSafetyFormHTML();
    });
</script>