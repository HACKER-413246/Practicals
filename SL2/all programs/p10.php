<?php

// Define the Student class
class Student
{
    // Attributes
    public $RollNo;
    public $Name;
    public $Branch;
    public $Year;

    // Constructor to initialize attributes
    public function __construct($RollNo, $Name, $Branch, $Year)
    {
        $this->RollNo = $RollNo;
        $this->Name = $Name;
        $this->Branch = $Branch;
        $this->Year = $Year;
    }

    // Function to display student details
    public function display()
    {
        echo "Roll No: " . $this->RollNo . "\n";
        echo "Name: " . $this->Name . "\n";
        echo "Branch: " . $this->Branch . "\n";
        echo "Year: " . $this->Year . "\n\n";
    }
}

// Function to get input from the user
function getStudentDetails($studentNumber)
{
    echo "Enter details for Student $studentNumber:\n";
    $RollNo = readline("Enter Roll No: ");
    $Name = readline("Enter Name: ");
    $Branch = readline("Enter Branch: ");
    $Year = readline("Enter Year: ");
    
    return new Student($RollNo, $Name, $Branch, $Year);
}

// Create an array to hold student objects
$students = [];

// Loop to create 3 instances of Student and populate their details
for ($i = 1; $i <= 5; $i++) {
    $students[] = getStudentDetails($i);
}

// Display the details of each student
echo "\nStudent Details:\n";
foreach ($students as $student) {
    $student->display();
}

?>
