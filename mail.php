<?php>
$to = "kundusayan.2001@gmail.com";
$subject = "Rseponse From Website";
$message = " I am very Thankful to You";
$headers = "From: kundusayan.2001@gmail.com";
if (mail($to, $subject, $message, $headers))
{
echo "Mail Send Successful";
}
else
{
    echo "Can Not Sent Mail";
}
?>