<?php
namespace Contact\Form;

use Zend\Form\Form;
use Zend\Form\FormInterface;

class ContactForm extends Form
{
	public function __construct($name = null){
	//we want to ignore the name passed
	parent::__construct('contact');
	

	$this->add(array(
		'name' => 'id',
		'type' => 'Hidden',
	));

	$this->add(array(
		'name' => 'first_name',
		'type' => 'Text',
		'options' => array(
			//'label' => 'First name',
			
		),	
	));

	$this->add(array(
		'name' => 'last_name',
		'type' => 'Text',
		'options' => array(
			//'label' => 'Last name',
		),	
	));

	$this->add(array(
		'name' => 'phone_number',
		'type' => 'Text',
		'options' => array(
			//'label' => 'Phone',
		),	
	));

	$this->add(array(
		'name' => 'address',
		'type' => 'Text',
		'options' => array(
			//'label' => 'Address',
		),	
	));

	$this->add(array(
		'name' => 'comment',
		'type' => 'textarea',
		'options' => array(
			//'label' => 'Comment',
		),	
	));

	$this->add(array(
		'name' => 'submit',
		'type' => 'button',		
		'attributes' => array(
			'value' => 'Go',
			'id' => 'submitbutton',
			'class' => 'btn btn-primary',
		),	
		));

	}
}