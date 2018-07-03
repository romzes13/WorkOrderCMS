<?php

class Notification

{
    public $title = '';
    public $contractor_id = '';
    public $workorder_id ='';
    public $dispatcher_id = '';
    public $work_description = '';

    protected $_observers = array();


    public function __construct($title, $work_description, $contractor_id, $workorder_id, $dispatcher_id)
    {
        //echo "Inside of Notification";
        $this->title = $title;
        $this->work_description = $work_description;
        $this->contractor_id = $contractor_id;
        $this->workorder_id = $workorder_id;
        $this->dispatcher_id = $dispatcher_id;
    }


    public function attachObserver($type, $observer)
    {
        $this->_observers[$type][] = $observer;
    }


    public function notifyObserver($type)
    {
        if (isset($this->_observers[$type])) {
            foreach ($this->_observers[$type] as $observer)
            {
                $observer->update($this);
            }
        }
    }


    public function accept()
    {
        //echo "<br>test: accept() called from notification<br>";
        $this->notifyObserver('accepted');
    }

}
?>
