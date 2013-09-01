<?php
class CrudsController extends AppController
{
	public $helpers = ['html', 'Form'];

	public function index() {
			$this->set('cruds', $this->Crud->find('all'));
	}
}


