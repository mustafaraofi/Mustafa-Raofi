<?php
echo "Task1 - Access Modifiers";
echo "<br>";

class StudentAccount{
    public $name;
    private $studentId;
    protected $department;

    // Constructor
    public function __construct($name, $studentId, $department)
    {
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }
    // Display all information
    public function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }
    // Return private student ID
    public function getStudentId()
    {
        return $this->studentId;
    }
}
// Create object
$student1 = new StudentAccount("Ahmad", 1001, "Computer Science");

// Call showInfo()
$student1->showInfo();

// Get private student ID
echo "Student ID: " . $student1->getStudentId();

//Experiment
//This line work, because "Name" is public.
echo $student1->name;

//This line gives an error because "studentId" is private and can't be accessed directly from outside the class.
//echo $student1->studentId;

//This also gives an error because "department" is protected and can't be accessed from outside the class.
//echo $student1->department;

echo "<hr>";
echo "Task2 - Simple Inheritance";
echo "<br>";
class Person{
    protected $name;
    // Constructor
    public function __construct($name)
    {
        $this->name = $name;
    }
    // Introduce method
    public function introduce()
    {
        echo "My name is " . $this->name . "<br>";
    }
}
class Student extends Person{
    // Study method
    public function study()
    {
        echo $this->name . " is studying.";
    }
}
// Create Student object
$student2 = new Student("Sara");
// Call introduce()
$student2->introduce();
// Call study()
$student2->study();

echo "<hr>";
echo "Task 3 - Inheritance + Access Modifiers";
echo "<br>";

class Employee{
    public $company;
    protected $name;
    private $salary;

    // Constructor
    public function __construct($name, $company, $salary)
    {
        $this->name = $name;
        $this->company = $company;
        $this->salary = $salary;
    }
    // Show employee information
    public function showEmployee()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Company: " . $this->company . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }
    // Return salary
    public function getSalary()
    {
        return $this->salary;
    }
}

class Manager extends Employee{
    // Manage team
    public function manageTeam()
    {
        echo $this->name . " is managing the team.";
    }
}

// Create Manager object
$manager1 = new Manager("Ali", "Kabul Tech", 30000);

// Call showEmployee()
$manager1->showEmployee();

echo "<br>";
// Call getSalary()
echo "Salary: " . $manager1->getSalary();
echo "<br>";

// Call manageTeam()
$manager1->manageTeam();

echo "<hr>";
echo "Short Questions";
echo "<br>";
echo "1. public: Can be accessed from anywhere.";
echo "<br>";
echo "2. private: Can only be accessed inside the same class.";
echo "<br>";
echo "3. protected: Can be accessed inside the class and its child classes.";
echo "<br>";
echo "4. extends: Used to inherit properties and methods from another class.";
echo "<br>";
echo "5. Parent class: The class that is inherited from.";
echo "<br>";
echo "6. Child class: The class that inherits from the parent class.";
echo "<br>";
echo "7. protected is useful because child classes can access protected properties and methods.";
?>