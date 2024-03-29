<?php

namespace com\cminds\mapsroutesmanager\lib;

class Email {
	
	static function send($receivers, $subject, $body, array $vars = array(), array $headers = array()) {
		
		$hasReceivers = false;
		if (!is_array($receivers)) {
			$mailTo = $receivers;
			$hasReceivers = true;
		} else {
			$mailTo = null;
			foreach ($receivers as $email) {
				$email = trim($email);
				if (is_email($email)) {
					$headers[] = ' Bcc: '. $email;
					$hasReceivers = true;
				}
			}
		}
		
		if ($hasReceivers) {
			$headers = apply_filters('cmmrm_email_headers', $headers, $mailTo, $subject, $body, $vars);
			return wp_mail($mailTo, strtr($subject, $vars), strtr($body, $vars), $headers);
		} else {
			return false;
		}
		
	}
	
	
}
