
<?php 


$res = "";

    
function las_deliver_mail() {
    if(isset($_POST['uniqueid']) AND $_POST['uniqueid'] == $_SESSION['uniqueid'] ){

    }
    else{
        $_SESSION['uniqueid'] = $_POST['uniqueid'];
        if ( isset( $_POST['submit'] ) ) {

            

            $firstname = sanitize_text_field( $_POST["firstname"] );
            $lastname = sanitize_text_field( $_POST["lastname"] );
            $email = sanitize_email( $_POST["email"] );
            $question = sanitize_text_field( $_POST["question"] );
            $subject = sanitize_text_field($_POST["question"]);
    
            $to = get_option( 'admin_email' );
    
            $headers = "From: $firstname $lastname <$email>" . "\r\n";

            wp_mail( $to, $subject, $question, $headers );

            if ( wp_mail( $to, $subject, $question, $headers ) ) {
                $res = "<div class='contactsuccess' id='contactsuccess'>Thank you for contacting us we will be in touch with you shortly.'</div>";
            } else {
                $res =  '<div class="contacterror" id="contacterror"> Somehting went wrong.</div>';
            }
        }
    }
}

las_deliver_mail();
?>

<section class="contactfront" id="contactfront">
    <div class="contactdfrontback" id=contactfrontback">
        <p class="contactfronttext">We're a reliable translation company that you can count on.</p>
        <form class="contactform" id="contactform" action="<?echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p class="title contacttitle">CONTACT US:</p>
            <input type="hidden" name="uniqueid" value="<?php echo uniqid();?>">
            <input class="in" name="firstname" for="firstname" placeholder="FIRST:" pattern="[a-zA-Z ]+" oninvalid="setCustomValidity('Please enter only alphabetical characters.')"
    onchange="try{setCustomValidity('')}catch(e){}" value=""> 
            <input class="in"  name="lastname" for="lastname" placeholder="LAST:" pattern="[a-zA-Z ]+" oninvalid="setCustomValidity('Please enter only alphabetical characters.')"
    onchange="try{setCustomValidity('')}catch(e){}" value="">
            <input class="in" name="email" for="email" placeholder="EMAIL:" value="" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$" oninvalid="setCustomValidity('Please enter valid email.')"
    onchange="try{setCustomValidity('')}catch(e){}">
            <input class="in" name="question" for="question" placeholder="QUESTION:" value="">
            <input class="btn contactsubmit" type="submit" name="submit" value="Submit">
        </form>
    </div>
</section>

