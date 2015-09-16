<?php
namespace Contact\Model;

 use Zend\Db\TableGateway\TableGateway;
 use Zend\Db\Sql\Select;
 use Zend\Paginator\Adapter\DbSelect;
 use Zend\Paginator\Paginator;
 use Zend\Db\ResultSet\ResultSet;

 class ContactTable
 {
     protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }

     public function fetchAll($paginated=false)
     {
         if ($paginated){
            $select= new Select('contact');
            $resultSetPrototype = new ResultSet();
            $resultSetPrototype->setArrayObjectPrototype(new Contact());
            $paginatorAdapter = new DbSelect(
                $select,
                $this->tableGateway->getAdapter(),
                $resultSetPrototype
            );
            $paginator = new Paginator($paginatorAdapter);
            return $paginator;

         }

         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }

     public function getContact($id)
     {
         $id  = (int) $id;
         $rowset = $this->tableGateway->select(array('id' => $id));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $id");
         }
         return $row;
     }

     public function saveContact(Contact $contact)
     {
         $data = array(
            'first_name'  	=>  $contact->first_name,
			'last_name'  	=>  $contact->last_name,
			'phone_number'  =>  $contact->phone_number,
			'address'  		=>  $contact->address,
			'comment'  		=>  $contact->comment,
         );

         $id = (int) $contact->id;
         if ($id == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getContact($id)) {
                 $this->tableGateway->update($data, array('id' => $id));
             } else {
                 throw new \Exception('Contact id does not exist');
             }
         }
     }

     public function deleteContact($id)
     {
         $this->tableGateway->delete(array('id' => (int) $id));
     }
 }