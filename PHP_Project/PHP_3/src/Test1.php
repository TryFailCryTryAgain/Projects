<?php
class Employee {
    private $name;

    const WORK_TITLE = "Employee";

    public function __construct($name) {
        $this->name = $name;
    }
    public function introduction() {
        echo "I, {$this->name}, work at this company! ";
    }
}

class Supervisor extends Employee {
    public $name;

    const WORK_TITLE = "Supervisor";

    function __construct($name) {
        $this->name = $name;
    }
    public function introduction() {
        echo "I, {$this->name}, work at this company! ";
    }

}

$Shane = new Employee("Shane");
$Karen = new Supervisor("Karen");

$Shane->introduction();
echo "</br>";
echo $Shane::WORK_TITLE;
echo "</br>";
$Karen->introduction();
echo "</br>";
echo $Karen::WORK_TITLE;


?>