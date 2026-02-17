<?php
// ─── GPA Calculation Logic ────────────────────────────────────────────────
function calculateGPA(array $units, array $grades): array {
    $gradePoints = [
        "A" => 5, "B" => 4, "C" => 3,
        "D" => 2, "E" => 1, "F" => 0
    ];

    $totalPoints = 0;
    $totalUnits  = 0;

    for ($i = 0; $i < count($units); $i++) {
        $unit  = $units[$i];
        $grade = strtoupper(trim($grades[$i]));

        if (!isset($gradePoints[$grade])) {
            throw new Exception("Invalid grade '$grade' for course " . ($i + 1));
        }

        $totalPoints += $unit * $gradePoints[$grade];
        $totalUnits  += $unit;
    }

    if ($totalUnits === 0) {
        throw new Exception("No course units provided.");
    }

    $gpa = $totalPoints / $totalUnits;

    if      ($gpa >= 4.5) { $classification = "First Class";        $cls = "class-first"; }
    elseif  ($gpa >= 3.5) { $classification = "Second Class Upper";  $cls = "class-upper"; }
    elseif  ($gpa >= 2.4) { $classification = "Second Class Lower";  $cls = "class-lower"; }
    elseif  ($gpa >= 1.5) { $classification = "Third Class";         $cls = "class-third"; }
    else                  { $classification = "Pass";                 $cls = "class-pass";  }

    return [
        'gpa'            => round($gpa, 2),
        'classification' => $classification,
        'cls'            => $cls,
        'totalPoints'    => $totalPoints,
        'totalUnits'     => $totalUnits,
        'courses'        => count($units),
    ];
}

// ─── Handle Form Submission ───────────────────────────────────────────────
$result = null;
$error  = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawUnits  = $_POST['units']  ?? [];
    $rawGrades = $_POST['grades'] ?? [];

    $units  = [];
    $grades = [];

    foreach ($rawUnits as $i => $u) {
        $u = trim($u);
        $g = trim($rawGrades[$i] ?? '');
        if ($u === '' || $g === '') continue; // skip blank rows
        $units[]  = (int)$u;
        $grades[] = strtoupper($g);
    }

    if (empty($units)) {
        $error = "Please add at least one course before calculating.";
    } else {
        try {
            $result = calculateGPA($units, $grades);
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GPA Calculator — SENG 412 Group 7</title>
    <link rel="stylesheet" href="gpa_style.css" />
</head>
<body>

    <!-- Navigation -->
    <nav>
        <a href="index.php">Home</a>
        <a href="payroll.php">Payroll</a>
        <a href="gpa.php" class="active-tab">GPA</a>
        <a href="personal_details.php">Personal Details</a>
    </nav>

    <!-- Header -->
    <div class="page-header">
        <p class="eyebrow">SENG 412 · Group 7</p>
        <h1>GPA <span>Calculator</span></h1>
        <p>Enter your course units and grades to compute your cumulative grade point average.</p>
    </div>

    <!-- Calculator Form -->
    <div class="card">
        <p class="section-label">Course Entries</p>

        <form method="POST" action="gpa.php" id="gpa-form">

            <div class="col-headers">
                <span>Credit Units</span>
                <span>Grade</span>
                <span class="spacer"></span>
            </div>

            <div id="courses-container">
                <!-- Default 5 course rows -->
                <?php
                $count = 5;
                // If form was submitted, repopulate rows
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $postedUnits  = $_POST['units']  ?? [];
                    $postedGrades = $_POST['grades'] ?? [];
                    $count = max(count($postedUnits), 1);
                }
                $grades_list = ['A','B','C','D','E','F'];
                for ($i = 0; $i < $count; $i++):
                    $pUnit  = $_SERVER['REQUEST_METHOD'] === 'POST' ? htmlspecialchars($postedUnits[$i] ?? '') : '';
                    $pGrade = $_SERVER['REQUEST_METHOD'] === 'POST' ? htmlspecialchars($postedGrades[$i] ?? '') : '';
                ?>
                <div class="course-row">
                    <input
                        type="number"
                        name="units[]"
                        min="1"
                        max="12"
                        placeholder="e.g. 3"
                        value="<?php echo $pUnit; ?>"
                    />
                    <div class="select-wrap">
                        <select name="grades[]">
                            <option value="" disabled <?php echo $pGrade === '' ? 'selected' : ''; ?>>Grade</option>
                            <?php foreach ($grades_list as $g): ?>
                                <option value="<?php echo $g; ?>" <?php echo $pGrade === $g ? 'selected' : ''; ?>>
                                    <?php echo $g; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="button" class="btn-remove" onclick="removeRow(this)" title="Remove course">✕</button>
                </div>
                <?php endfor; ?>
            </div>

            <button type="button" class="btn-add" onclick="addRow()">+ Add Course</button>

            <div class="divider"></div>

            <button type="submit" class="btn-submit">Calculate GPA</button>
        </form>
    </div>

    <!-- Error Message -->
    <?php if ($error): ?>
    <div class="error-banner">
        ⚠ &nbsp;<?php echo htmlspecialchars($error); ?>
    </div>
    <?php endif; ?>

    <!-- Result Display -->
    <?php if ($result): ?>
    <div class="result-card">
        <p class="result-label">Your Result</p>

        <div class="gpa-display">
            <?php echo number_format($result['gpa'], 2); ?>
            <span>/ 5.00</span>
        </div>

        <div class="classification <?php echo $result['cls']; ?>">
            <?php echo htmlspecialchars($result['classification']); ?>
        </div>

        <div class="result-divider"></div>

        <div class="result-meta">
            <div class="meta-item">
                <p class="meta-label">Total Courses</p>
                <p class="meta-value"><?php echo $result['courses']; ?></p>
            </div>
            <div class="meta-item">
                <p class="meta-label">Total Units</p>
                <p class="meta-value"><?php echo $result['totalUnits']; ?></p>
            </div>
            <div class="meta-item">
                <p class="meta-label">Quality Points</p>
                <p class="meta-value"><?php echo $result['totalPoints']; ?></p>
            </div>
            <div class="meta-item">
                <p class="meta-label">GPA Score</p>
                <p class="meta-value"><?php echo number_format($result['gpa'], 2); ?></p>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- ─── JavaScript ──────────────────────────────────────────────── -->
    <script>
    const grades = ['A','B','C','D','E','F'];

    function buildSelectOptions(selectedVal = '') {
        let opts = `<option value="" disabled ${selectedVal === '' ? 'selected' : ''}>Grade</option>`;
        grades.forEach(g => {
            opts += `<option value="${g}" ${selectedVal === g ? 'selected' : ''}>${g}</option>`;
        });
        return opts;
    }

    function addRow() {
        const container = document.getElementById('courses-container');
        const row = document.createElement('div');
        row.className = 'course-row';
        row.innerHTML = `
            <input type="number" name="units[]" min="1" max="12" placeholder="e.g. 3" />
            <div class="select-wrap">
                <select name="grades[]">${buildSelectOptions()}</select>
            </div>
            <button type="button" class="btn-remove" onclick="removeRow(this)" title="Remove course">✕</button>
        `;
        container.appendChild(row);
        row.querySelector('input').focus();
    }

    function removeRow(btn) {
        const rows = document.querySelectorAll('.course-row');
        if (rows.length <= 1) {
            btn.closest('.course-row').querySelectorAll('input, select').forEach(el => el.value = '');
            return;
        }
        btn.closest('.course-row').remove();
    }
    </script>

</body>
</html>
