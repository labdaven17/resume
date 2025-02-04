<?php
    $name = "Daven Labordo";
    $email = "labordodaven@gmail.com";
    $phone = "09759440587";
    $github = "https://github.com/labdaven17";
    $profile_pic = "daven.jpg";

    $summary = "Experienced software developer with a passion for building scalable web applications and working with cutting-edge technologies. Proficient in JavaScript, Python, and cloud computing. Strong problem-solving skills and a collaborative team player.";

    $skills = [
        "Programming Languages: JavaScript, Python, Java",
        "Web Development: HTML, CSS, React, Node.js",
        "Databases: MySQL, MongoDB",
        "Tools & Platforms: Git, Docker, AWS"
    ];

    $experience = [
        [
            "title" => "Software Developer - XYZ Corp",
            "duration" => "June 2026 - Present",
            "responsibilities" => [
                "Developed and maintained web applications using React and Node.js.",
                "Collaborated with cross-functional teams to deliver high-quality software solutions.",
                "Implemented CI/CD pipelines using Jenkins and Docker."
            ]
        ],
        [
            "title" => "Intern - ABC Tech",
            "duration" => "May 2025 - August 2026",
            "responsibilities" => [
                "Assisted in the development of a mobile application using Flutter.",
                "Performed code reviews and debugging tasks.",
                "Gained experience in Agile methodologies."
            ]
        ]
    ];

    $education = [
        [
            "degree" => "Bachelor of Science in Information Technology",
            "institution" => "Guimaras State University",
            "graduation" => "Graduated July 2026"
        ]
    ];

    $certifications = [
        "AWS Certified Developer - Associate",
        "Certified ScrumMaster (CSM)"
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - <?php echo $name; ?></title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 20px; display: flex; flex-direction: column; align-items: center; }
        .resume-container { width: 210mm; height: 297mm; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); position: relative; }
        h1 { margin-left: 10px; }
        h1, h2 { color: #333; }
        .section { margin-bottom: 20px; }
        .section h2 { border-bottom: 2px solid #333; padding-bottom: 5px; }
        .contact-info { margin-bottom: 20px; margin-left: 10px; }
        .contact-info p { margin: 5px 0; }
        .profile-pic { position: absolute; top: 20px; right:20px; width: 150px; height: 150px; border-radius: 50%; overflow: hidden; border: 2px solid #333; margin-right: 15px; margin-top: 10px; }
        .profile-pic img { width: 100%; height: 100%; object-fit: cover; border: 5px; border-radius: 50%; }
    </style>
</head>
<body>
    <div class="resume-container">
        <header>
            <div class="profile-pic">
                <img src="<?php echo $profile_pic; ?>" alt="<?php echo $name; ?>">
            </div>
            <h1><?php echo $name; ?></h1>
            <div class="contact-info">
                <p>Email: <?php echo $email; ?></p>
                <p>Phone: <?php echo $phone; ?></p>
                <p>GitHub: <a href="<?php echo $github; ?>" target="_blank"><?php echo $github; ?></a></p>
            </div>
        </header>

        <section class="section summary">
            <h2>Summary</h2>
            <p><?php echo $summary; ?></p>
        </section>

        <section class="section skills">
            <h2>Skills</h2>
            <ul>
                <?php foreach ($skills as $skill) { echo "<li>$skill</li>"; } ?>
            </ul>
        </section>

        <section class="section experience">
            <h2>Experience</h2>
            <ul>
                <?php foreach ($experience as $job) { ?>
                    <li>
                        <h3><?php echo $job["title"]; ?></h3>
                        <p><?php echo $job["duration"]; ?></p>
                        <ul>
                            <?php foreach ($job["responsibilities"] as $task) { echo "<li>$task</li>"; } ?>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </section>

        <section class="section education">
            <h2>Education</h2>
            <ul>
                <?php foreach ($education as $edu) { ?>
                    <li>
                        <h3><?php echo $edu["degree"]; ?></h3>
                        <p><?php echo $edu["institution"] . ", " . $edu["graduation"]; ?></p>
                    </li>
                <?php } ?>
            </ul>
        </section>

        <section class="section certifications">
            <h2>Certifications</h2>
            <ul>
                <?php foreach ($certifications as $cert) { echo "<li>$cert</li>"; } ?>
            </ul>
        </section>
    </div>
</body>
</html>
