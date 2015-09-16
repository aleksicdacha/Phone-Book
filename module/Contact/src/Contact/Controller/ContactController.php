<?php
namespace Contact\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;
 use Contact\Form\ContactForm;
 use Contact\Model\Contact;


 class ContactController extends AbstractActionController
 {
 	protected $contactTable;

     public function indexAction()
     {
     	$paginator = $this->getContactTable()->fetchAll(true);
        $paginator->setCurrentPageNumber((int) $this->params()->fromQuery('page', 1));
        $paginator->setItemCountPerPage(5);

        return new ViewModel(array(
             'paginator' => $paginator
        ));
     }

     public function addAction()
     {
        $form = new ContactForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if ($request -> isPost()){
            $contact = new Contact();
            $form->setInputFilter($contact->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()){
                $contact->exchangeArray($form->getData());
                $this->getContactTable()->saveContact($contact);
            } 

            //Redirect to contact list
            return $this->redirect()->toRoute('contact');
        }
        return array('form' => $form);
    
     }

     public function editAction()
     {
        $id = (int) $this->params()->fromRoute('id',0);
        $contact = $this->getContactTable()->getContact($id);
        $form = new ContactForm();
        $form->bind($contact);
        $form->get('submit')->setAttribute('value' , 'Edit');

        $request = $this->getRequest();
        if ($request -> isPost()){
            $form->setInputFilter($contact->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()){
                $this->getContactTable()->saveContact($contact);
                
                //Redirect to contact list
                return $this->redirect()->toRoute('contact');
            } 

        }    

        return array(
            'id'  => $id,
            'form'  => $form,
        );
     }

     public function deleteAction()
     {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id){
            return $this->redirect()->toRoute('contact');
        }
        
        $request = $this->getRequest();
        if ($request->isPost()){
            $del = $request->getPost('del' , 'No');

            if ($del == 'Yes'){
                $id = (int) $request->getPost('id');
                $this->getContactTable()->deleteContact($id);
            }

            //Redirect to contact list
            return $this->redirect()->toRoute('contact');
        }

        return array(
            'id' =>  $id,
            'contact'  => $this->getContactTable()->getContact($id),
        );
     }

     public function getContactTable()
     {
         if (!$this->contactTable) {
             $sm = $this->getServiceLocator();
             $this->contactTable = $sm->get('Contact\Model\ContactTable');
         }
       
         return $this->contactTable;
     }
 }

