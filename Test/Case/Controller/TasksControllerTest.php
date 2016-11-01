<?php
App::uses('TasksController', 'Controller');

class TasksControllerTest extends ControllerTestCase
{

       /**
  	 * Fixtures
  	 *
  	 * @var array
  	 */
       public $fixtures = array(
        'app.Task'
    );

       public $controller;

    protected $Task;

       /**
  	 * Configura teste
  	 *
  	 * @return void
  	 */
    public function setUp()
    {
           $this->controller = $this->generate('Tasks');
        $this->Task = ClassRegistry::init('Task');
    }

    public function testJsonIndexTasks()
    {
           $result = $this->testAction('/tasks/index.json', array(
         'method' => 'get',
         'return' => 'contents'
        ));
           $result = json_decode($result, true);
        $expected = $this->Task->find('first');
        $this->assertContains($expected, $result['tasks']);
    }

    public function testJsonGetTask()
    {
              $result = $this->testAction('/tasks/1.json', array(
            'method' => 'get',
            'return' => 'contents'
        ));
              $result = json_decode($result, true);
        $expected = $this->Task->findById(1);
        $this->assertEquals($expected, $result['task']);
    }

    public function testJsonPostNewTask()
    {
        $data = array(
            'Task' => array(
                'title' => 'test'
            )
        );

              $result = $this->testAction('/tasks.json', array(
            'method' => 'post',
            'return' => 'contents',
            'data' => $data
        ));
              $result = json_decode($result, true);
        $this->assertEmpty($result['errors']);
    }

    public function testJsonPostExistingTask()
    {
        $data = array(
            'Task' => array(
                'id' => 1,
                'title' => 'test'
            )
        );

              $result = $this->testAction('/tasks/1.json', array(
            'method' => 'post',
            'return' => 'contents',
            'data' => $data
        ));
              $result = json_decode($result, true);
        $this->assertEmpty($result['errors']);
    }

    public function testJsonPutExistingTask()
    {
        $data = array(
            'Task' => array(
                'id' => 1,
                'title' => 'test'
            )
        );

              $result = $this->testAction('/tasks/1.json', array(
            'method' => 'put',
            'return' => 'contents',
            'data' => $data
        ));
              $result = json_decode($result, true);
        $this->assertEmpty($result['errors']);
    }

    public function testJsonDeleteExistingTask()
    {
              $result = $this->testAction('/tasks/1.json', array(
            'method' => 'delete',
            'return' => 'contents'
        ));
              $result = json_decode($result, true);
        $this->assertEqual('0', $result['error']);
    }
}
