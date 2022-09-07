<?php
if ( isset( $_POST[ 'n' ] ) && isset( $_POST[ 'e' ] ) && isset( $_POST[ 'm' ] ) ) {
    $n = $_POST[ 'n' ];
    // HINT: use preg_replace() to filter the data
    $e = $_POST[ 'e' ];
    $m = nl2br( $_POST[ 'm' ] );
    $to = 'azmahdihaz2200@gmail.com';

    $from = $e;
    $subject = 'Message from '.$n;
    $message = nl2br( 'Name: '.$n .'\n'.'Email: '.$e.'\n'.' Message : '.$m.'' );
    $headers = "From: $from\n";
    $headers .= 'MIME-Version: 1.0\n';
    $headers .= 'Content-type: text/html; charset=iso-8859-1\n';
    if ( mail( $to, $subject, $message, $headers ) ) {
        echo 'success';
    } else {
        echo 'We are under some updates. Please try again after sometime.<br><br>Till then, you can direclty contact me via email.<br><br>';
    }
}
?>