<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details - Student Portal</title>
    <style>
        body {
            background-color: #fdfaff; /* Very light lilac-white background */
            color: #4a4a4a;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin: 0;
        }

        /* Nav menu with exact Lilac styling */
        nav {
            margin: 20px 0 40px 0;
            position: sticky;
            top: 20px;
            z-index: 100;
        }
        nav a {
            color: #9b6bc1;
            text-decoration: none;
            margin: 0 10px;
            padding: 10px 25px;
            border: 2px solid #e0cffc;
            border-radius: 25px;
            font-weight: bold;
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.8);
        }
        nav a:hover {
            background-color: #e0cffc;
            color: white;
            transform: scale(1.05);
        }
        .active-tab {
            background-color: #c8a2c8 !important;
            color: white !important;
            border-color: #c8a2c8 !important;
            box-shadow: 0 4px 10px rgba(200, 162, 200, 0.4);
        }

        h1 {
            color: #8e44ad;
            font-size: 2.2em;
            margin-bottom: 10px;
            text-shadow: 1px 1px 2px #e0cffc;
        }

        .subtitle {
            color: #9b6bc1;
            margin-bottom: 40px;
            font-style: italic;
        }

        /* Stacked Card Layout */
        .details-container {
            width: 100%;
            max-width: 850px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .student-card {
            background: #ffffff;
            padding: 35px;
            border-radius: 20px;
            border-left: 10px solid #dcd0ff;
            box-shadow: 0 10px 20px rgba(155, 107, 193, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .student-card:hover {
            transform: translateX(10px);
            box-shadow: 0 12px 25px rgba(155, 107, 193, 0.15);
            border-left-color: #c8a2c8;
        }

        .student-card::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 100px; height: 100px;
            background: linear-gradient(135deg, transparent 80%, #f7f3ff 20%);
        }

        .info-row {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #9b6bc1;
            text-transform: uppercase;
            font-size: 0.8em;
            letter-spacing: 1px;
            display: block;
        }

        .value {
            font-size: 1.3em;
            font-weight: 600;
            color: #4a4a4a;
        }

        .matric-value {
            color: #6a5acd;
            font-family: 'Courier New', Courier, monospace;
        }

        .course-section {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #f0e6ff;
        }

        .course-title {
            font-weight: bold;
            color: #8e44ad;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
        }

        .course-title::before {
            content: "📚";
            margin-right: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two columns for courses within the wide card */
            gap: 10px;
        }

        li {
            font-size: 0.9rem;
            color: #666;
            padding: 8px;
            background: #faf8ff;
            border-radius: 8px;
            border: 1px solid #f0e6ff;
        }

        @media (max-width: 600px) {
            ul { grid-template-columns: 1fr; }
            .student-card { padding: 20px; }
        }
    </style>
</head>
<body>

    <nav id="mainNav">
        <a href="index.php">Home</a>
        <a href="payroll.php">Payroll</a>
        <a href="gpa.php">GPA</a>
        <a href="personal_details.php">Personal Details</a>
    </nav>

    <h1>Student Records</h1>
    <p class="subtitle">Session 2024/2025 - Faculty of Engineering</p>

    <div class="details-container">
        
        <div class="student-card">
            <div class="info-row">
                <span class="label">Full Name</span>
                <div class="value">Ewang Kamyomobong Imaikop</div>
            </div>
            <div class="info-row">
                <span class="label">Matriculation Number</span>
                <div class="value matric-value">22/0098</div>
            </div>
            <div class="course-section">
                <div class="course-title">Registered Courses</div>
                <ul>
                    <li>SENG 412 - Internet Technologies</li>
                    <li>COSC 430 - Hands-on Java</li>
                    <li>SENG 490 - Research Project</li>
                    <li>SENG 408 - Real-Time Systems</li>
                    <li>SENG 402 - Quality Engineering</li>
                    <li>SENG 404 - Emerging Tech</li>
                    <li>SENG 406 - Formal Method Specs</li>
                    <li>GEDS 002 - Citizenship</li>
                    <li>GEDS 420 - Biblical Principles</li>
                </ul>
            </div>
        </div>

        <div class="student-card">
            <div class="info-row">
                <span class="label">Full Name</span>
                <div class="value">Eze Kenechukwu Emmanuel</div>
            </div>
            <div class="info-row">
                <span class="label">Matriculation Number</span>
                <div class="value matric-value">22/0298</div>
            </div>
            <div class="course-section">
                <div class="course-title">Registered Courses</div>
                <ul>
                    <li>SENG 412 - Internet Technologies</li>
                    <li>COSC 430 - Hands-on Java</li>
                    <li>SENG 490 - Research Project</li>
                    <li>SENG 408 - Real-Time Systems</li>
                    <li>SENG 402 - Quality Engineering</li>
                    <li>SENG 404 - Emerging Tech</li>
                    <li>SENG 406 - Formal Method Specs</li>
                    <li>GEDS 002 - Citizenship</li>
                    <li>GEDS 420 - Biblical Principles</li>
                </ul>
            </div>
        </div>

        <div class="student-card">
            <div class="info-row">
                <span class="label">Full Name</span>
                <div class="value">Eze Kenechukwu Titus</div>
            </div>
            <div class="info-row">
                <span class="label">Matriculation Number</span>
                <div class="value matric-value">22/0286</div>
            </div>
            <div class="course-section">
                <div class="course-title">Registered Courses</div>
                <ul>
                    <li>SENG 412 - Internet Technologies</li>
                    <li>COSC 430 - Hands-on Java</li>
                    <li>SENG 490 - Research Project</li>
                    <li>SENG 408 - Real-Time Systems</li>
                    <li>SENG 402 - Quality Engineering</li>
                    <li>SENG 404 - Emerging Tech</li>
                    <li>SENG 406 - Formal Method Specs</li>
                    <li>GEDS 002 - Citizenship</li>
                    <li>GEDS 420 - Biblical Principles</li>
                </ul>
            </div>
        </div>

        <div class="student-card">
            <div class="info-row">
                <span class="label">Full Name</span>
                <div class="value">Eze-Alozie Amarachi</div>
            </div>
            <div class="info-row">
                <span class="label">Matriculation Number</span>
                <div class="value matric-value">22/0140</div>
            </div>
            <div class="course-section">
                <div class="course-title">Registered Courses</div>
                <ul>
                    <li>SENG 412 - Internet Technologies</li>
                    <li>COSC 430 - Hands-on Java</li>
                    <li>SENG 490 - Research Project</li>
                    <li>SENG 408 - Real-Time Systems</li>
                    <li>SENG 402 - Quality Engineering</li>
                    <li>SENG 404 - Emerging Tech</li>
                    <li>SENG 406 - Formal Method Specs</li>
                    <li>GEDS 002 - Citizenship</li>
                    <li>GEDS 420 - Biblical Principles</li>
                </ul>
            </div>
        </div>

        <div class="student-card">
            <div class="info-row">
                <span class="label">Full Name</span>
                <div class="value">Ezechukwu Uchechukwu Stephen</div>
            </div>
            <div class="info-row">
                <span class="label">Matriculation Number</span>
                <div class="value matric-value">22/0031</div>
            </div>
            <div class="course-section">
                <div class="course-title">Registered Courses</div>
                <ul>
                    <li>SENG 412 - Internet Technologies</li>
                    <li>COSC 430 - Hands-on Java</li>
                    <li>SENG 490 - Research Project</li>
                    <li>SENG 408 - Real-Time Systems</li>
                    <li>SENG 402 - Quality Engineering</li>
                    <li>SENG 404 - Emerging Tech</li>
                    <li>SENG 406 - Formal Method Specs</li>
                    <li>GEDS 002 - Citizenship</li>
                    <li>GEDS 420 - Biblical Principles</li>
                </ul>
            </div>
        </div>

        <div class="student-card">
            <div class="info-row">
                <span class="label">Full Name</span>
                <div class="value">Ezeh Chukwunwendu Henry</div>
            </div>
            <div class="info-row">
                <span class="label">Matriculation Number</span>
                <div class="value matric-value">22/0021</div>
            </div>
            <div class="course-section">
                <div class="course-title">Registered Courses</div>
                <ul>
                    <li>SENG 412 - Internet Technologies</li>
                    <li>COSC 430 - Hands-on Java</li>
                    <li>SENG 490 - Research Project</li>
                    <li>SENG 408 - Real-Time Systems</li>
                    <li>SENG 402 - Quality Engineering</li>
                    <li>SENG 404 - Emerging Tech</li>
                    <li>SENG 406 - Formal Method Specs</li>
                    <li>GEDS 002 - Citizenship</li>
                    <li>GEDS 420 - Biblical Principles</li>
                </ul>
            </div>
        </div>

        <div class="student-card">
            <div class="info-row">
                <span class="label">Full Name</span>
                <div class="value">Ezeka Ifeoma Vera</div>
            </div>
            <div class="info-row">
                <span class="label">Matriculation Number</span>
                <div class="value matric-value">22/0137</div>
            </div>
            <div class="course-section">
                <div class="course-title">Registered Courses</div>
                <ul>
                    <li>SENG 412 - Internet Technologies</li>
                    <li>COSC 430 - Hands-on Java</li>
                    <li>SENG 490 - Research Project</li>
                    <li>SENG 408 - Real-Time Systems</li>
                    <li>SENG 402 - Quality Engineering</li>
                    <li>SENG 404 - Emerging Tech</li>
                    <li>SENG 406 - Formal Method Specs</li>
                    <li>GEDS 002 - Citizenship</li>
                    <li>GEDS 420 - Biblical Principles</li>
                </ul>
            </div>
        </div>

        <div class="student-card">
            <div class="info-row">
                <span class="label">Full Name</span>
                <div class="value">Ezenwankwo Ebubechukwu Precious</div>
            </div>
            <div class="info-row">
                <span class="label">Matriculation Number</span>
                <div class="value matric-value">22/0141</div>
            </div>
            <div class="course-section">
                <div class="course-title">Registered Courses</div>
                <ul>
                    <li>SENG 412 - Internet Technologies</li>
                    <li>COSC 430 - Hands-on Java</li>
                    <li>SENG 490 - Research Project</li>
                    <li>SENG 408 - Real-Time Systems</li>
                    <li>SENG 402 - Quality Engineering</li>
                    <li>SENG 404 - Emerging Tech</li>
                    <li>SENG 406 - Formal Method Specs</li>
                    <li>GEDS 002 - Citizenship</li>
                    <li>GEDS 420 - Biblical Principles</li>
                </ul>
            </div>
        </div>

        <div class="student-card">
            <div class="info-row">
                <span class="label">Full Name</span>
                <div class="value">Ezepue Elvis Ikemsinachi</div>
            </div>
            <div class="info-row">
                <span class="label">Matriculation Number</span>
                <div class="value matric-value">22/0262</div>
            </div>
            <div class="course-section">
                <div class="course-title">Registered Courses</div>
                <ul>
                    <li>SENG 412 - Internet Technologies</li>
                    <li>COSC 430 - Hands-on Java</li>
                    <li>SENG 490 - Research Project</li>
                    <li>SENG 408 - Real-Time Systems</li>
                    <li>SENG 402 - Quality Engineering</li>
                    <li>SENG 404 - Emerging Tech</li>
                    <li>SENG 406 - Formal Method Specs</li>
                    <li>GEDS 002 - Citizenship</li>
                    <li>GEDS 420 - Biblical Principles</li>
                </ul>
            </div>
        </div>

        <div class="student-card">
            <div class="info-row">
                <span class="label">Full Name</span>
                <div class="value">Ezesinachi Pius Chisom</div>
            </div>
            <div class="info-row">
                <span class="label">Matriculation Number</span>
                <div class="value matric-value">22/0176</div>
            </div>
            <div class="course-section">
                <div class="course-title">Registered Courses</div>
                <ul>
                    <li>SENG 412 - Internet Technologies</li>
                    <li>COSC 430 - Hands-on Java</li>
                    <li>SENG 490 - Research Project</li>
                    <li>SENG 408 - Real-Time Systems</li>
                    <li>SENG 402 - Quality Engineering</li>
                    <li>SENG 404 - Emerging Tech</li>
                    <li>SENG 406 - Formal Method Specs</li>
                    <li>GEDS 002 - Citizenship</li>
                    <li>GEDS 420 - Biblical Principles</li>
                </ul>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentPath = window.location.pathname.split("/").pop();
            const navLinks = document.querySelectorAll("#mainNav a");
            
            navLinks.forEach(link => {
                if (link.getAttribute("href") === currentPath) {
                    link.classList.add("active-tab");
                } else {
                    link.classList.remove("active-tab");
                }
            });
        });
    </script>
</body>
</html>