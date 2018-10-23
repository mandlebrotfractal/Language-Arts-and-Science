<?php

function las_send_mail(){
    return "this string"; 
    if( isset( $_POST['submit'])){
        $firstname =   $_POST["firstname"];
        $lastname =  $_POST["firstname"];
        $email   = $_POST["email"];
        $question =  $_POST["question"];
        print_r($_POST);
        $to = get_option( 'admin_email' );
        $headers = "From: $firstname $lastname <$email>" . "\r\n";
        // wp_mail( $to, $question, $question, $headers );
        if ( wp_mail( $to, $question, $question, $headers ) ) {
        return '<p>Thanks for contacting me, expect a response soon.</p>';
        } else {
        return 'An unexpected error occurred';
        }
    }


    
}

function deliver_mail() {

if(filter_has_var(INPUT_POST, 'submit')){
    	if ( isset( $_POST['submit'] ) ) {

            $firstname    = sanitize_text_field( $_POST["firstname"] );
            $lastname = sanitize_text_field( $_POST["lastname"] );
            $email   = sanitize_email( $_POST["email"] );
            $question = sanitize_text_field( $_POST["question"] );
            $subject = sanitize_text_field($_POST["question"]);
    
            $to = get_option( 'admin_email' );
    
            $headers = "From: $name <$email>" . "\r\n";

            wp_mail( $to, $subject, $question, $headers );

            if ( wp_mail( $to, $subject, $question, $headers ) ) {
                return "<div class='contactsuccess' id='contactsuccess'>Thank you for contacting us we will be in touch with you shortly.'</div>";
            } else {
                return '<div class="contacterror" id="contacterror"> Somehting went wrong.</div>';
            }
        }
}
}
?>