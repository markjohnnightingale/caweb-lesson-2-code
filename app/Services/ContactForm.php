<?php

namespace App\Services;

use App\Services\Email;
use App\Models\ContactRequest;

class ContactForm
{
	protected $required_fields = [
		'first-name',
		'last-name',
		'email',
		'subject',
		'message',
	];

	protected $post_data;

	public function __construct($post_data)
	{
		$this->post_data = $post_data;
	}

	public function handlePostData()
	{
		$this->checkRequiredFields();

		// Create new contact 
		$contact = $this->createContact();

		// Send email
		$this->sendEmail($contact);
	}

	private function checkRequiredFields()
	{
		// Check required fields
		foreach ($this->required_fields as $key) {
			if (!$this->post_data[$key]) {
				throw new \Error('The required field ' . $key . ' is not in the post array');
			}
		}
	}

	private function createContact()
	{
		// Create new contact object 
		$contactRequest = new ContactRequest();
		$contactRequest->setFirstName($this->post_data['first-name']);
		$contactRequest->setLastName($this->post_data['last-name']);
		$contactRequest->setEmail($this->post_data['email']);
		$contactRequest->setSubject($this->post_data['subject']);
		$contactRequest->setMessage($this->post_data['message']);
		$contactRequest->save();
		return $contactRequest;
	}

	private function sendEmail($contact)
	{
		// Send email about this person's contact
		$email = new Email($contact);
		$email->send();
	}
}
