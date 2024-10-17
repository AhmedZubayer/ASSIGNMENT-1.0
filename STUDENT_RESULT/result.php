<?php
// Sample data: marks obtained in five subjects
$marks = [85, 78, 92, 67, 95]; 
$passingMark = 33; 

// Function to calculate total, average, and grade
function calculateGrades($marks, $passingMark) {
    $totalMarks = array_sum($marks); 
    $numberOfSubjects = count($marks); 
    $averageMarks = $totalMarks / $numberOfSubjects;

    // Check if the student has failed in any subject
    $hasFailed = false;
    foreach ($marks as $mark) {
        if ($mark < $passingMark) {
            $hasFailed = true;
            break;
        }
    }

    // Determine the grade based on average marks using switch-case
    if ($hasFailed) {
        $grade = 'F'; 
    } else {
        switch (true) {
            case ($averageMarks >= 90):
                $grade = 'A+';
                break;
            case ($averageMarks >= 80):
                $grade = 'A';
                break;
            case ($averageMarks >= 70):
                $grade = 'A-';
                break;
            case ($averageMarks >= 60):
                $grade = 'B+';
                break;
            case ($averageMarks >= 50):
                $grade = 'B';
                break;
            case ($averageMarks >= 40):
                $grade = 'C';
                break;
            case ($averageMarks >= 33):
                $grade = 'D';
                break;
            default:
                $grade = 'F';
                break;
        }
    }

    // Return results
    return [
        'totalMarks' => $totalMarks,
        'averageMarks' => $averageMarks,
        'grade' => $grade
    ];
}

// Get the results
$results = calculateGrades($marks, $passingMark);

// Display the results
    switch ($results['grade']) {
        case 'F':
            echo "Grade: " . $results['grade'] . "\n";
            break;
         default:            
            echo "Total Marks: " . $results['totalMarks'] . "\n";
            echo "Average Marks: " . number_format($results['averageMarks'], 2) . "\n";
            echo "Grade: " . $results['grade'] . "\n";          
    }


