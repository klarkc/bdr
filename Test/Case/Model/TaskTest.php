<?php
App::uses('Task', 'Model');

/**
 * Task Test Case
 */
class TaskTest extends CakeTestCase
{

       /**
  	 * Fixtures
  	 *
  	 * @var array
  	 */
       public $fixtures = array(
          'app.Task'
       );

       /**
  	 * setUp method
  	 *
  	 * @return void
  	 */
    public function setUp()
    {
           parent::setUp();
           $this->Task = ClassRegistry::init('Task');
    }

       /**
  	 * tearDown method
  	 *
  	 * @return void
  	 */
    public function tearDown()
    {
           unset($this->Task);
           parent::tearDown();
    }

    public function testTitleValidation()
    {
        // Required
           $Task = array('Task' => array(
              'id' => 2
           ));
           $this->Task->save($Task);
           $this->assertContains('title', array_keys($this->Task->validationErrors));
        // notBlank
        $Task = array('Task' => array(
              'id' => 2,
         'title' => ''
           ));
        $this->assertContains('title', array_keys($this->Task->validationErrors));
    }

    public function testDescriptionValidation()
    {
        // Not required
        $Task = array('Task' => array(
                 'id' => 2,
            'title' => 'test'
              ));
        $this->Task->save($Task);
        $this->assertEmpty($this->Task->validationErrors);

        // allowEmpty
        $Task = array('Task' => array(
                 'id' => 2,
            'title' => 'test',
            'description' => ''
              ));
        $this->Task->save($Task);
        $this->assertEmpty($this->Task->validationErrors);

        // maxLength
        $Task = array('Task' => array(
                 'id' => 2,
            'title' => 'test',
            'description' => $this->getBigString(300)
              ));
        $this->Task->save($Task);
        $this->assertContains('description', array_keys($this->Task->validationErrors));
    }

    public function testPriorityValidation()
    {
        // Not required
        $Task = array('Task' => array(
                 'id' => 2,
            'title' => 'test'
              ));
        $this->Task->save($Task);
        $this->assertEmpty($this->Task->validationErrors);

        // Not allowEmpty
        $Task = array('Task' => array(
                 'id' => 2,
            'title' => 'test',
            'priority' => ''
              ));
        $this->Task->save($Task);
        $this->assertContains('priority', array_keys($this->Task->validationErrors));

        // Numeric
        $Task = array('Task' => array(
                 'id' => 2,
            'title' => 'test',
            'priority' => 'abc'
              ));
        $this->Task->save($Task);
        $this->assertContains('priority', array_keys($this->Task->validationErrors));
    }

    private function getBigString($size)
    {
        $string = '';
        for ($i = 0; $i < $size; $i++) {
            $string .= 'i';
        }
        return $string;
    }
}
