<?php

App::uses('AppController', 'Controller');

/**
 * Tasks Controller
 *
 * @property Task $Task
 * @property SessionComponent $Session
 */
class TasksController extends AppController {

    /**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('RequestHandler');

	/**
	 * List all tasks
	 *
	 * @return void
	 */
	public function index() {
		$this->set('title_for_layout', __('List of all tasks'));
		$this->set('tasks', $this->Task->find('all'));
        $this->set('_serialize', array('tasks'));
	}

    /**
	 * View a task
	 *
     * @param int $d task id
	 * @return void
	 */
	public function view($id) {
		$this->set('title_for_layout', __('List of all tasks'));
		$this->set('task', $this->Task->findById($id));
        $this->set('_serialize', array('task'));
	}

    /**
	 * Add a task
	 *
	 * @return void
	 */
    public function add() {
        $this->Task->create();

        if ($this->Task->save($this->request->data)) {
            $errors = array();
        } else if(!empty($this->Task->validationErrors)){
            $errors = $this->Task->validationErrors;
        } else {
            $errors = 1;
        }

        $this->set(array(
            'errors' => $errors,
            '_serialize' => array('errors')
        ));
    }

    /**
	 * Edit a task
	 *
     * @param int $d task id
	 * @return void
	 */
    public function edit($id) {
        $this->Task->id = $id;

        if ($this->Task->save($this->request->data)) {
            $errors = array();
        } else if(!empty($this->Task->validationErrors)){
            $errors = $this->Task->validationErrors;
        } else {
            $errors = 1;
        }

        $this->set(array(
            'errors' => $errors,
            '_serialize' => array('errors')
        ));
    }

    /**
	 * Delete a task
	 *
     * @param int $d task id
	 * @return void
	 */
    public function delete($id) {
        if ($this->Task->delete($id)) {
            $error = '0';
        } else {
            $error = '1';
        }
        $this->set(array(
            'error' => $error,
            '_serialize' => array('error')
        ));
    }

}
