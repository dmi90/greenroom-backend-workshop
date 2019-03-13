<?php

/**
 * Class Task
 */
class Task
{
    protected $id;
    public $description;
    public $assignee;
    public $completed = false;

    // constructor temporarily removed to make sure PDO can fetch into this class easily
    // @todo enabling it again after our PDO functionality is refactored
    /*public function __construct($description, $assignee)
    {
        $this->description = $description;
        $this->assignee = $assignee;
    }*/

    /**
     * Get completed value
     * Not a typical getter / setter function due to its naming, but works the same
     * @return bool
     */
    public function isComplete()
    {
        return $this->completed;
    }

    /**
     * Set completed value
     * Not a typical getter / setter function due to its naming, but works the same
     */
    public function complete()
    {
        $this->completed = true;
    }

    /**
     * Get assignee value (getter)
     * @return mixed
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * Set assignee value (setter)
     * @param $assignee
     */
    public function setAssignee($assignee)
    {
        $this->assignee = $assignee;
    }

}