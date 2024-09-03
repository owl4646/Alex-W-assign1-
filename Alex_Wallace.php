<?php
// Define variables with your personal information
$name = 'Alexandra Wallace';
$email = 'Owlex4646@gmail.com';
$phone = '(815)-520-9820';
$university = 'Northern Kentucky University';
$degree = 'Bachelor of Computer Information Systems';
$educationStatus = 'Ongoing';
$minors = ['Honors Minor', 'Digital Media and Effects Minor', 'Mathematics Minor'];
$highSchool = 'Campbell County High School';
$highSchoolDiploma = 'High School Diploma';
$highSchoolGradDate = 'May 2020';
$skills = [
    'Basic Linux/Unix scripting',
    'Python scripting',
    'Java',
    'JavaScript/CSS',
    'Web Design/HTML',
    'PHP',
    'C, C++, C Sharp',
    'BIOS configuration'
];
$experience = [
    [
        'title' => 'Laptop Assembly',
        'date' => 'April 2023',
        'description' => 'Assembled student laptops for local middle schools. Focused on installation of software as well as setting up network connections to the school\'s servers. Installed all the components into computer cases and function checked the computers. Troubleshot and repaired computers for students.'
    ],
    [
        'title' => 'Built custom desktop computer',
        'description' => 'Configured CPU, memory, and disk partitions as required, installed motherboards, processors, RAM, and graphics cards. Gained extensive computer software knowledge by troubleshooting and assisting computer users.'
    ]
];
$extracurriculars = [
    [
        'title' => 'Independent Game Development',
        'status' => 'Ongoing',
        'description' => 'Developing an independent game. Written in Python and illustrated in Photoshop. Developing time management skills, attention to detail and accuracy of code, and problem-solving.'
    ]
];
$communityService = [
    [
        'title' => 'Volunteer at Mammoth Cave National Park',
        'duration' => 'May 2022 - May 2023',
        'description' => 'Volunteered over 243 hours at Mammoth Cave National Park helping explore and engage with no longer used trails in and out of the cave. Gained team-building skills, understanding of safety regulations, and opened a larger world to learning and gaining skills.'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $name . "'s Resume"; ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $name . "'s resume"; ?>">
    <meta name="author" content="<?php echo $name; ?>">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
</head>

<body>
    <article class="resume-wrapper text-center position-relative">
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <header class="resume-header pt-4 pt-md-0">
                <div class="row">
                    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                        <img class="picture" src="assets/images/profile.jpg" alt="<?php echo $name; ?>">
                    </div><!--//col-->
                    <div class="col">
                        <div class="row p-4 justify-content-center justify-content-md-between">
                            <div class="primary-info col-auto">
                                <h1 class="name mt-0 mb-1 text-white text-uppercase"><?php echo $name; ?></h1>
                                <div class="title mb-3"><?php echo 'Computer Science Student'; ?></div>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a class="text-link" href="mailto:<?php echo $email; ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $email; ?></a></li>
                                    <li><a class="text-link" href="tel:<?php echo $phone; ?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $phone; ?></a></li>
                                </ul>
                            </div><!--//primary-info-->
                        </div><!--//row-->
                    </div><!--//col-->
                </div><!--//row-->
            </header>
            <div class="resume-body p-5">
                <!-- Education Section -->
                <section class="resume-section education-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Education'; ?></h2>
                    <div class="resume-section-content">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <div class="resume-degree font-weight-bold"><?php echo $degree; ?></div>
                                <div class="resume-degree-org"><?php echo $university; ?></div>
                                <div class="resume-degree-time"><?php echo $educationStatus; ?></div>
                                <?php foreach ($minors as $minor): ?>
                                    <div class="resume-degree-org"><?php echo $minor; ?></div>
                                <?php endforeach; ?>
                            </li>
                            <li>
                                <div class="resume-degree font-weight-bold"><?php echo $highSchoolDiploma; ?></div>
                                <div class="resume-degree-org"><?php echo $highSchool; ?></div>
                                <div class="resume-degree-time"><?php echo $highSchoolGradDate; ?></div>
                            </li>
                        </ul>
                    </div>
                </section><!--//education-section-->

                <!-- Skills Section -->
                <section class="resume-section skills-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Technical Skills'; ?></h2>
                    <div class="resume-section-content">
                        <ul class="list-unstyled mb-4">
                            <?php foreach ($skills as $skill): ?>
                                <li class="mb-2"><?php echo $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </section><!--//skills-section-->

                <!-- Experience Section -->
                <section class="resume-section experience-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Experience'; ?></h2>
                    <div class="resume-section-content">
                        <?php foreach ($experience as $exp): ?>
                            <div class="resume-timeline-item position-relative pb-5">
                                <div class="resume-timeline-item-header mb-2">
                                    <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $exp['title']; ?></h3>
                                    <?php if (!empty($exp['date'])): ?>
                                        <div class="resume-position-time"><?php echo $exp['date']; ?></div>
                                    <?php endif; ?>
                                </div><!--//resume-timeline-item-header-->
                                <div class="resume-timeline-item-desc">
                                    <p><?php echo $exp['description']; ?></p>
                                </div><!--//resume-timeline-item-desc-->
                            </div><!--//resume-timeline-item-->
                        <?php endforeach; ?>
                    </div>
                </section><!--//experience-section-->

                <!-- Extracurriculars Section -->
                <section class="resume-section extracurricular-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Extracurriculars'; ?></h2>
                    <div class="resume-section-content">
                        <?php foreach ($extracurriculars as $extra): ?>
                            <div class="resume-timeline-item position-relative pb-5">
                                <div class="resume-timeline-item-header mb-2">
                                    <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $extra['title']; ?></h3>
                                    <div class="resume-position-time"><?php echo $extra['status']; ?></div>
                                </div><!--//resume-timeline-item-header-->
                                <div class="resume-timeline-item-desc">
                                    <p><?php echo $extra['description']; ?></p>
                                </div><!--//resume-timeline-item-desc-->
                            </div><!--//resume-timeline-item-->
                        <?php endforeach; ?>
                    </div>
                </section><!--//extracurricular-section-->

                <!-- Community Service Section -->
                <section class="resume-section community-service-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Community Service'; ?></h2>
                    <div class="resume-section-content">S
                        <?php foreach ($communityService as $service): ?>
                            <div class="resume-timeline-item position-relative pb-5">
                                <div class="resume-timeline-item-header mb-2">
                                    <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $service['title']; ?></h3>
                                    <div class="resume-position-time"><?php echo $service['duration']; ?></div>
                                </div><!--//resume-timeline-item-header-->
                                <div class="resume-timeline-item-desc">
                                    <p><?php echo $service['description']; ?></p>
                                </div><!--//resume-timeline-item-desc-->
                            </div><!--//resume-timeline-item-->
                        <?php endforeach; ?>
                    </div>
                </section><!--//community-service-section-->

            </div><!--//resume-body-->
        </div>
    </article>

    <footer class="footer text-center pt-2 pb-5">
        <small class="copyright"><?php echo 'Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by ' . $name; ?></small>
    </footer>
</body>
</html>
