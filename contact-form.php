<?php

if(isset($_POST['submitted'])) {
function las_send_mail(){
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
las_send_mail();
}
?>