<?php
$to = "mutumamburia@gmail.com";

if(mail($to, "ncubed940@gmail.com", "Subject: subject", "mutuma")) {
	echo "Thank you for using our mail form";
} else {
	echo "Mail sending failed";
}