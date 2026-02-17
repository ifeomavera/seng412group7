<?php
// Group Members Personal details
$group_members = [
    [
        "name" => "Ewang Kamyomobong", 
        "blood_group" => "AB+", 
        "state" => "Akwa Ibom", 
        "phone" => "08076730654", 
        "hobbies" => "Listening to music"
    ],
    [
        "name" => "Eze Kenechukwu Emmanuel", 
        "blood_group" => "A+",
        "state" => "Anambra State",
        "phone" => "07026069227",
        "hobbies" => "Solving puzzles, playing guitar, basketball"
    ],
    [
        "name" => "Eze Kenechukwu Titus", 
        "blood_group" => "AB+", 
        "state" => "Enugu State", 
        "phone" => "09033921293", 
        "hobbies" => "Reading books, playing games"
    ],
    [
        "name" => "Ezeh Chukwunwendu Henry", 
        "blood_group" => "A+", 
        "state" => "Anambra State", 
        "phone" => "07043770235", 
        "hobbies" => "Reading"
    ],
    [
        "name" => "Ezeka Ifeoma",
        "blood_group" => "A+", 
        "state" => "Anambra State", 
        "phone" => "08134152749", 
        "hobbies" => "singing, playing games, watching movies"
    ],
    [
        "name" => "Ezechukwu Uchechukwu Stephen", 
        "blood_group" => "A+", 
        "state" => "Anambra State", 
        "phone" => "07064268609", 
        "hobbies" => "Reading, listening to music"
    ],
    [
        "name" => "Ezenwankwo Ebubechukwu Precious", 
        "blood_group" => "A+", 
        "state" => "Anambra State", 
        "phone" => "08052705245", 
        "hobbies" => "Watching movies, listening to music"
    ],
    [
        "name" => "Eze-Alozie Amarachi", 
        "blood_group" => "O+", 
        "state" => "Abia State", 
        "phone" => "07045626681", 
        "hobbies" => "Reading, Writing"
    ],
    [
        "name" => "Ezepue Elvis Ikemsinachi", 
        "blood_group" => "O+", 
        "state" => "Anambra State", 
        "phone" => "09050281754", 
        "hobbies" => "Watching Movies/Series"
    ],
    [
        "name" => "Pius Ezesinachi", 
        "blood_group" => "O+", 
        "state" => "Enugu State", 
        "phone" => "09067825619", 
        "hobbies" => "Laughing"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Group Member Details</title>
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

        /* Nav menu with Lilac styling */
        nav {
            margin: 20px 0 40px 0;
        }
        nav a {
            color: #9b6bc1; /* Lilac purple */
            text-decoration: none;
            margin: 0 10px;
            padding: 8px 20px;
            border: 2px solid #e0cffc;
            border-radius: 20px; /* Rounded pill shape */
            font-weight: bold;
            transition: 0.3s;
        }
        nav a:hover {
            background-color: #e0cffc;
            color: white;
        }
        .active-tab {
            background-color: #c8a2c8; /* Lilac shade */
            color: white !important;
            border-color: #c8a2c8;
        }

        h1 {
            color: #8e44ad;
            font-size: 2.5em;
            margin-bottom: 40px;
            text-shadow: 1px 1px 2px #e0cffc;
        }

        /* The Grid that puts cards side-by-side */
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            width: 90%;
            max-width: 1100px;
        }

        .member-card {
            background-color: #ffffff;
            color: #333;
            padding: 25px;
            border-radius: 15px;
            border-top: 8px solid #dcd0ff; /* Light Lilac accent */
            box-shadow: 0 8px 15px rgba(200, 162, 200, 0.2); /* Soft purple shadow */
            transition: transform 0.2s;
        }

        .member-card:hover {
            transform: translateY(-5px); /* Cute pop-up effect */
        }

        .member-name {
            font-size: 1.2em;
            font-weight: bold;
            color: #6a5acd;
            margin-bottom: 15px;
            border-bottom: 1px dashed #dcd0ff;
            padding-bottom: 5px;
        }

        .label {
            font-weight: bold;
            color: #9b6bc1;
        }

        p {
            font-size: 0.95em;
            line-height: 1.6;
            margin: 8px 0;
        }
    </style>
</head>
<body>

    <nav>
        <a href="index.php">Home</a>
        <a href="payroll.php">Payroll</a>
        <a href="gpa.php">GPA</a>
        <a href="personal_details.php" class="active-tab">Personal Details</a>
    </nav>

    <h1>Group Personal Details</h1>

    <div class="container">
        <?php foreach ($group_members as $member): ?>
            <div class="member-card">
                <div class="member-name">
                    <?php echo $member['name']; ?>
                </div>
                <p><span class="label">Blood Group:</span> <?php echo $member['blood_group']; ?></p>
                <p><span class="label">State of Origin:</span> <?php echo $member['state']; ?></p>
                <p><span class="label">Phone:</span> <?php echo $member['phone']; ?></p>
                <p><span class="label">Hobbies:</span> <?php echo $member['hobbies']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>