<?php
namespace Contact\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;


class Contact implements InputFilterAwareInterface
{
    public $id;
	public $first_name;
	public $last_name;
	public $phone_number;
	public $address;
	public $comment;
	protected $inputFilter;
	

	public function exchangeArray($data) 
	{
		$this->id 			= (!empty($data['id']))  ?  $data['id'] : null;
		$this->first_name 	= (!empty($data['first_name']))  ?  $data['first_name'] : null;
		$this->last_name 	= (!empty($data['last_name']))  ?  $data['last_name'] : null;
		$this->phone_number = (!empty($data['phone_number']))  ?  $data['phone_number'] : null;
		$this->address 		= (!empty($data['address']))  ?  $data['address'] : null;
		$this->comment 		= (!empty($data['comment']))  ?  $data['comment'] : null;
 	}

 	public function getArrayCopy()
 	{
 		return get_object_vars($this);
 	}

 	public function setInputFilter(InputFilterInterface $inputFilter)
 	{
 		throw new \Exception("Not used");
 	}

 	public function getInputFilter()
 	{
 		if (!$this->inputFilter) {
             $inputFilter = new InputFilter();

             $inputFilter->add(array(
                 'name'     => 'id',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'Int'),
                 ),
             ));

             $inputFilter->add(array(
                 'name'     => 'first_name',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
                     array(
                         'name'    => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 100,
                         ),
                     ),
                 ),
             ));

             $inputFilter->add(array(
                 'name'     => 'last_name',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
                     array(
                         'name'    => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 100,
                         ),
                     ),
                 ),
             ));

             $inputFilter->add(array(
                 'name'     => 'phone_number',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                    
                 ),
                 
             ));

             $inputFilter->add(array(
                 'name'     => 'address',
                 'required' => false,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                  
                 ),
                 
             ));

             $inputFilter->add(array(
                 'name'     => 'comment',
                 'required' => false,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                 
                 ),
                 
             ));

             $this->inputFilter = $inputFilter;
         }

         return $this->inputFilter;
 	}
}