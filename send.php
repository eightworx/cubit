<?php if ((isset($_POST['name'])) && (isset($_POST['phone']) && $_POST['email'] != "")) {
    $to = 'salg@cubit.no';
    $subject = 'Contact form cubit.no';
    $message = '
<div>
<h1>Contact form details</h1>
<p><b>Name:</b> ' . $_POST['name'] . '</p>
<p><b>Phone:</b> ' . $_POST['phone'] . '</p>
<p><b>Email:</b> ' . $_POST['email'] . '</p>
<p><b>Company:</b> ' . $_POST['company'] . '</p>
</div>
';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Contact form <noreply@cubit.no>' . "\r\n";
    $headers .= "Reply-To:" . $_POST['email'] . "\r\n";
    mail($to, $subject, $message, $headers);

    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'error'));
}