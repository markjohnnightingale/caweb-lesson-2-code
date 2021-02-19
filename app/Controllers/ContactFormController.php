<?php

namespace App\Controllers;

use App\Models\ContactRequestQuery;
use App\Services\View;
use App\Services\ContactForm;

class ContactFormController
{
	public function submit()
	{
		$error_message = '';
		$success = true;
		try {
			$contactForm = new ContactForm($_POST);
			$contactForm->handlePostData();
		} catch (\Throwable $error) {
			$error_message = $error->getMessage();
			$success = false;
		}
		View::load('submitted', [
			'error_message'	=> $error_message,
			'success'	=> $success
		]);
	}

	public function index()
	{
		View::load('home');
	}

	public function list()
	{
		$contactRequests = ContactRequestQuery::create()->find();
		View::load('list', [
			'contact_requests'	=> $contactRequests
		]);
	}
}
