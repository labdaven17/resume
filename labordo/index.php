<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - Daven Labordo</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .resume-container {
            width: 210mm; /* A4 width */
            height: 297mm; /* A4 height */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        h1 {
            margin-left: 10px;
        }
        h1, h2 {
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        .contact-info {
            margin-bottom: 20px;
            margin-left: 10px;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .skills ul, .experience ul, .education ul {
            list-style-type: none;
            padding: 0;
        }
        .skills li, .experience li, .education li {
            margin-bottom: 10px;
        }
        .experience h3, .education h3 {
            margin-bottom: 5px;
        }
        .experience p, .education p {
            margin: 0;
            color: #555;
        }
        .profile-pic {
            position: absolute;
            top: 20px;
            right:20px;
            width: 150px; 
            height: 150px; 
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #333;
            margin-right: 15px;
            margin-top: 10px;
        }

        
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 5px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <div class="resume-container">
        <header>
            <div class="profile-pic">
                <img src="daven.jpg" alt="Daven Labordo">
            </div>
            <h1>Daven Labordo</h1>
            <div class="contact-info">
                <p>Email: labordodaven@gmail.com</p>
                <p>Phone: 09759440587</p>
                <p>GitHub: <a href="https://github.com/labdaven17" target="_blank">github.com/labdaven17</a></p>
            </div>
        </header>

        <section class="section summary">
            <h2>Summary</h2>
            <p>Experienced software developer with a passion for building scalable web applications and working with cutting-edge technologies. Proficient in JavaScript, Python, and cloud computing. Strong problem-solving skills and a collaborative team player.</p>
        </section>

        <section class="section skills">
            <h2>Skills</h2>
            <ul>
                <li>Programming Languages: JavaScript, Python, Java</li>
                <li>Web Development: HTML, CSS, React, Node.js</li>
                <li>Databases: MySQL, MongoDB</li>
                <li>Tools & Platforms: Git, Docker, AWS</li>
            </ul>
        </section>

        <section class="section experience">
            <h2>Experience</h2>
            <ul>
                <li>
                    <h3>Software Developer - XYZ Corp</h3>
                    <p>June 2026 - Present</p>
                    <ul>
                        <li>Developed and maintained web applications using React and Node.js.</li>
                        <li>Collaborated with cross-functional teams to deliver high-quality software solutions.</li>
                        <li>Implemented CI/CD pipelines using Jenkins and Docker.</li>
                    </ul>
                </li>
                <li>
                    <h3>Intern - ABC Tech</h3>
                    <p>May 2025 - August 2026</p>
                    <ul>
                        <li>Assisted in the development of a mobile application using Flutter.</li>
                        <li>Performed code reviews and debugging tasks.</li>
                        <li>Gained experience in Agile methodologies.</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="section education">
            <h2>Education</h2>
            <ul>
                <li>
                    <h3>Bachelor of Science in Information Technology</h3>
                    <p>Guimaras State University, Graduated July 2026</p>
                </li>
            </ul>
        </section>

        <section class="section certifications">
            <h2>Certifications</h2>
            <ul>
                <li>AWS Certified Developer - Associate</li>
                <li>Certified ScrumMaster (CSM)</li>
            </ul>
        </section>
    </div>

</body>
</html>