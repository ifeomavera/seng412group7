<?php

function calculateGPA(array $units, array $grades): array {
    $gradePoints = [
        "A" => 5,
        "B" => 4,
        "C" => 3,
        "D" => 2,
        "E" => 1,
        "F" => 0
    ];

    $totalPoints = 0;
    $totalUnits = 0;

    for ($i = 0; $i < count($units); $i++) {
        $unit = $units[$i];
        $grade = $grades[$i];

        if (!isset($gradePoints[$grade])) {
            throw new Exception("Invalid grade '$grade' at index $i");
        }

        $totalPoints += $unit * $gradePoints[$grade];
        $totalUnits += $unit;
    }

    if ($totalUnits === 0) {
        throw new Exception("No course units provided");
    }

    $gpa = $totalPoints / $totalUnits;

    if ($gpa >= 4.5) {
        $classification = "First Class";
    } elseif ($gpa >= 3.5) {
        $classification = "Second Class Upper";
    } elseif ($gpa >= 2.4) {
        $classification = "Second Class Lower";
    } elseif ($gpa >= 1.5) {
        $classification = "Third Class";
    } else {
        $classification = "Pass";
    }

    return [
        'gpa' => round($gpa, 2),
        'classification' => $classification
    ];
}

// Example usage:
$units = [12,4,6];
$grades = ["A", "B", "C"];

$result = calculateGPA($units, $grades);

print_r($result);

?>