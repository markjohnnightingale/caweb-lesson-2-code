<?php

namespace App\Services;

use App\Models\ContactRequest;

class Email
{
	public $mail_subject;
	public $mail_body;

	public function __construct(ContactRequest $contact)
	{
		$this->mail_subject = 'New contact request via the website: ' . $contact->getFirstName() . ' ' . $contact->getLastName();
		$this->mail_body = $contact->getFirstName() . ' ' . $contact->getLastName() . '(' . $contact->getEmail() . ') has sent you a message: ' . PHP_EOL . PHP_EOL;
		$this->mail_body .= 'Subject: ' . $contact->getSubject() . PHP_EOL;
		$this->mail_body .= 'Message: ' . $contact->getMessage();
	}

	public function send()
	{
		$mail_text = $this->createMailText();
		$this->writeEmailToLog($mail_text);
	}

	private function createMailText()
	{
		$mail_text = $this->mail_subject . PHP_EOL;
		$mail_text .= $this->mail_body;
		return $mail_text;
	}

	private function writeEmailToLog($mail_text)
	{
		$mail_text .= PHP_EOL . '=========================================' . PHP_EOL;
		// Log the contents to file 
		$pathToLog = './email.log';
		file_put_contents($pathToLog, $mail_text, FILE_APPEND);
	}
}
