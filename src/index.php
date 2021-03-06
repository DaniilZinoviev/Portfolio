<!DOCTYPE html>
<html lang="en">
<head>
    <!-- General META tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO META tags -->
    <meta name="description" content="My name is Daniil and I am frontend developer">
    <meta name="author" content="Daniil Zinoviev">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Page title -->
    <title>Daniil Zinoviev | Web developer</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172631580-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-172631580-1');
    </script>
</head>
<body>
    <div class="particles" id="particles"></div>

    <header class="site-header" id="header">
        <div class="top-head">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-6">
                        <div class="d-flex h-100 text-white">
                            <div class="logo align-self-center">
                                <a href="#header" data-scroll>
                                    Daniil Zinoviev
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.logo -->
                    
                    <div class="col-6 col-md-8 col-lg-6 d-md-none py-2">
                        <div class="d-flex w-100 justify-content-end">
                            <a href="#menu-btn" class="menu-hamburger">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </a>
                        </div>
                    </div>
                    <!-- /mobile nav -->

                    <div class="col-md-8 col-lg-6 d-none d-md-block">
                        <nav class="navbar">
                            <span class="close close-menu">&times;</span>
                            <ul class="navbar-nav w-100 justify-content-between">
                                <li class="nav-item active">
                                    <a href="#skills" class="nav-link" data-scroll>Skills</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#experience" class="nav-link" data-scroll>Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#education" class="nav-link" data-scroll>Education</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#works" class="nav-link" data-scroll>Works</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="nav-link" data-scroll>Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.desktop nav -->

                </div>
                <!-- /.top-header -->
            </div>
        </div>
        <!-- /.top-head -->

        <div class="container text-center text-white pt-100 pb-100">
            <h1>Daniil Zinoviev</h1>
            <h2>Fullstack web developer</h2>
            <div class="d-flex justify-content-center pt-3">
                <a href="cv.pdf" class="btn btn-outline-light mx-1 download" download>Download CV <i class="fa fa-download pl-2" aria-hidden="true"></i></a>
                <a href="cv.pdf" class="btn btn-outline-light mx-1" target="_blank">View CV <i class="fa fa-external-link pl-2"></i></a>
            </div>
        </div>
        <!-- / header content -->

    </header>

    <!-- <section class="about bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Main</h3>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu purus a dolor lobortis aliquet. Fusce maximus quam vel odio malesuada, vel convallis arcu pellentesque. Pellentesque ut venenatis nibh. Vestibulum non velit nec sem molestie convallis in dictum lorem. Morbi eget condimentum nisi. Suspendisse id eleifend tellus. Nulla turpis risus, accumsan sed suscipit a, convallis vitae justo. Pellentesque elementum congue ex, sed laoreet nulla volutpat non. Nunc nec ex odio.

                        Phasellus ullamcorper quam eu pulvinar mattis. Vestibulum tristique aliquet faucibus. Cras pretium placerat enim, eu posuere mauris pretium eget. Aliquam maximus quam quis mauris egestas, quis tincidunt metus hendrerit. Vivamus in felis ut eros egestas hendrerit id nec dolor. Cras sollicitudin tortor a nisl porta elementum sed ac justo. In eu arcu felis. Sed nec metus eu tellus feugiat auctor ac id magna. Pellentesque erat purus, suscipit sed urna sed, interdum auctor urna.</p>
                </div>
            </div>
        </div>
    </section> -->

    <section class="py-3" id="skills">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2><i class="fa fa-wrench pr-2" aria-hidden="true"></i> Skills</h3>
                    <p>
                        There is a list of my professional skills with which I work. I have an experience both in frontend and backend sides of web development, so I call myself a "fullstack" developer.
                    </p>
                </div>
                <!-- /.col-md-4 -->

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <h5>HTML + CSS <i class="fab fa-html5 pl-1 fa-lg text-danger"></i></h5>
                                <p>
                                    <ul>
                                        <li>Valid semantic responsive markup</li>
                                        <li>CSS animations</li>
                                        <li>Bootstrap</li>
                                        <li>Sass (SCSS)</li>
                                        <li>Gulp, Webpack</li>
                                        <li>SVG (animation and transformation)</li>
                                    </ul>
                                    <!-- Adaptive, valid, semantic markups. I like SCSS (or SASS) and I use it with Gulp. Have an experience with SVG and CSS 3 animations. -->
                                </p>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="mb-4">
                                <h5>JavaScript <i class="fab fa-js-square pl-1 fa-lg text-warning"></i></h5>
                                <p>
                                    <ul>
                                        <li>Native JS (ES6+, asynchronous code, AJAX, RegEx)</li>
                                        <li>Typescript <i class="fa fa-heart text-danger px-1" aria-hidden="true"></i></li>
                                        <li>DOM API (including Canvas)</li>
                                        <li>Browser Storage APIs</li>
                                        <li>jQuery</li>
                                    </ul>
                                    <!-- Native JS (ES6+, async, AJAX), jQuery. I like TypeScript. Have an experience with Canvas API. Can write some tests with Jasmine (Karma). -->
                                </p>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="mb-4">
                                <h5>React <i class="fab fa-react pl-1 fa-lg text-primary"></i></h5>
                                <p>
                                    <ul>
                                        <li>React core</li>
                                        <li>API services, contexts</li>
                                        <li>NextJS with SSR</li>
                                        <li>Redux store (Thunk)</li>
                                        <li>Different libraries (DnD, PropTypes, classNames)</li>
                                        <!-- <li>Testing?</li> -->
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="mb-4">
                                <h5>Angular <i class="fab fa-angular pl-1 fa-lg text-danger"></i></h5>
                                <p>
                                    <ul>
                                        <li>Angular Core</li>
                                        <li>RxJS (Subjects, pipe functions)</li>
                                        <li>NgRx (Core, Effects, Selectors)</li>
                                        <li>Different libraries (ChartJS, ngSelect)</li>
                                        <li>Testing with Jasmine and Karma</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="mb-4">
                                <h5>PHP <i class="fab fa-php pl-1 fa-lg text-primary"></i></h5>
                                <p>
                                    <ul>
                                        <li>Native PHP 5.6+</li>
                                        <li>Wordpress, Drupal</li>
                                        <li>Magento (plugins development)</li>
                                        <li>Composer</li>
                                        <li>Twig templates</li>
                                        <li>Laravel (a little bit)</li>
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="mb-4">
                                <h5>
                                    Additional
                                    <i class="fa fa-cogs pl-1" aria-hidden="true"></i>
                                </h5>
                                <p>
                                    <ul>
                                        <li>ElasticSearch (real-world experience)</li>
                                        <li>NodeJS server (Express, NextJS)</li>
                                        <li>E-mail templates</li>
                                        <li>CRM management(ClickUp, Trello, Jira)</li>
                                        <li>Git (GitHub <i class="fa fa-heart text-danger px-1" aria-hidden="true"></i>, BitBucket)</li>
                                        <li>Some knowledge of C# and Java</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-md-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.skills -->

    <section class="py-3" id="experience">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2><i class="fa fa-history pr-2 text-info" aria-hidden="true"></i> Experience</h2>
                    <p>
                        Where I have worked and gain a good real life coding experience
                    </p>
                </div>
                <!-- /.col-md-4 -->

                <div class="col-md-8">
                    <h5 class="d-inline-block mr-3">Web developer</h5>
                    <a href="https://webcodingstudio.com/" class="d-inline-block" target="_blank">WebCodingStudio <i class="fa fa-external-link"></i></a>
                    <p>September 2019 - January 2021 (1 year 4 months)</p>
                    <p>
                        Develop and optimize sites on different platforms, including WordPress, Drupal, Engaging Networks. Developed a Magento payment gateway integration. Had an experience of creating email templates.
                        Had an experience of working with Angular, React (NextJS and ElasticSearch), testing frontend projects. 
                    </p>
                </div>
                <!-- /.col-md-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="py-3" id="education">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2><i class="fa fa-book pr-2 text-success" aria-hidden="true"></i> Education</h2>
                    <p>
                        All I know I learned alone with different online resources and books.
                        I try to learn something every day to keep myself growing in this quietless world.
                    </p>
                </div>
                <!-- /.col-md-4 -->

                <div class="col-md-8">
                    <div class="mb-4">
                        <h5 class="d-inline-block mr-3">HTML + CSS</h5>
                        <p>June, 2018 - January, 2019</p>
                        <p>
                            Learned with lessons on the Youtube (WebDesignMaster and other), books (Webref.ru), tutorials. Gain some practice when creating markups from Free PSD files.
                        </p>
                    </div>
                    <!-- /education item -->

                    <div class="mb-4">
                        <h5 class="d-inline-block mr-3">JavaScript</h5>
                        <p>January, 2019 - April, 2019</p>
                        <p>
                            The core have learned on the javascript.ru and freecodecamp.org. Solved tasks in codewars.com. Practiced with code.mu projects.
                        </p>
                    </div>
                    <!-- /education item -->

                    <div class="mb-4">
                        <h5 class="d-inline-block mr-3">React</h5>
                        <p>May, 2019 - June, 2019</p>
                        <p>
                            Official React documentation on reactjs.org and some youtube channels. At the end of June had not an opportunity to study, so my  learning stopped.
                        </p>
                    </div>
                    <!-- /education item -->

                    <div class="mb-4">
                        <h5 class="d-inline-block mr-3">PHP</h5>
                        <p>October, 2019 - March, 2020</p>
                        <p>
                            I was learning after work with different articles and official PHP documentation on php.net. Also there were PHP and MVC courses from code.mu that helped to me with learning.
                        </p>
                    </div>
                    <!-- /education item -->

                </div>
                <!-- /.col-md-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.education -->

    <!-- <section class="py-3" id="history">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>My history</h2>
                    <p>
                        My professional way in this life
                    </p>
                </div>

                <div class="col-md-8">
                    <p>
                        My first meeting with Web development started at Jule 2017, when I with my one friend designer have a thought to take orders at the freelance sites and earn more money. My role was HTML coder and I had to had learned HTML and CSS at the shortest time I could. But I had exhausted and surendered after a two months.
                    </p>

                    <p>
                        In the June 2018 I've returned to this craft, because it was more interesting and creative then my work. I had a lot of knowledge from previous learning and just had to recreate in memory that information. I begun to create sites from PSD layouts, some of which is in the Works section.
                    </p>

                    <p>
                        At the middle of the winter 2018-19, I've quit my job and started deep learning of JavaScript with javascript.ru. After that, I saw a lot of different educational videos with practice and I've tried to repeat it by myself. 
                    </p>

                    <p>
                        At the end of the summer 2019, I looked for a job and have created some projects and my first portfolio. In a month I'd found a job as junior developer and moved to another city. For this job I had to fastly learn backend basics and create a site on WordPress and Drupal CMS. Also, I had some tasks with Angular and Jasmine testing for it, so I had to know the basics of it.
                    </p>

                    <p>
                        From the middle of autumn 2019 I started learning PHP, SQL and Angular. I gained a lot of different real life experience, such as developing on the server, solving unexpected problems such as server cache, finding information, etc. Also I started interesting in Laravel, that was used for backend of Angular application, and started to learn it.
                    </p>
                    
                    <p>
                        For now I target to learn Canvas, creating more projects with React. I am learning SVG different animations and how to draw it (<a href="https://www.youtube.com/watch?v=rGhIfi_Y3GQ" target="_blank">example</a>). Also I have a glance in video games creation with C# (my old passion) or on the Canvas with JS (TypeScript). 
                    </p>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /.history -->

    <section class="py-3" id="works">
        <div class="container">
            <h2><i class="fa fa-paint-brush pr-2 text-danger" aria-hidden="true"></i> Works</h2>
            <div class="works-filters py-2 mb-md-3" id="works-filters">
                <!-- <span class="mr-3">Filters:</span> -->
                <span class="">
                    <a href="#" class="d-inline-block btn btn-danger  active" data-filter="*">
                        All
                    </a>
                    <a href="#" class="d-inline-block btn btn-danger " data-filter=".html">
                        HTML
                    </a>
                    <a href="#" class="d-inline-block btn btn-danger " data-filter=".js">
                        JS
                    </a>
                    <a href="#" class="d-inline-block btn btn-danger " data-filter=".react">
                        React
                    </a>
                    <a href="#" class="d-inline-block btn btn-danger " data-filter=".drupal">
                        Drupal
                    </a>
                    <a href="#" class="d-inline-block btn btn-danger " data-filter=".wordpress">
                        Wordpress
                    </a>
                    <a href="#" class="btn btn-danger d-inline-block" data-filter=".magento">
                        Magento
                    </a>
                </span>
            </div>
            <!-- /.btn-group -->

            <div class="row mt-2 mb-3 js-works-container" id="works-container">
                <!-- In this place will be inserted works via AJAX -->
                <!-- Template for each item you can find below, in the [hidden] div -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.works -->

    <section class="py-3" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2><i class="fal fa-address-card pr-2 text-primary" aria-hidden="true"></i>  Contact</h2>
                    <p>
                        You can contact with me via this form. Also you can write a letter to <a href="mailto:danzino21@gmail.com">danzino21@gmail.com</a> or call to <a href="tel:+79065664552">+7 (906) 566-45-52</a>.
                    </p>
                </div>
                <!-- /.col-md-4 -->

                <div class="col-lg-8">
                    <form id="form-contact">
                        <input type="hidden" name="request[honeypot]" value="<?php echo time();?>">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="request[name]" class="form-control mb-4" placeholder="Name" required/>
                                <input type="email" name="request[email]" class="form-control mb-4 mb-md-0" placeholder="E-mail" required/>
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-8">
                                <textarea name="request[message]" class="form-control" placeholder="Message" rows="4" required></textarea>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->

                        <div class="text-right py-3">
                            <div 
                                id="recaptcha"
                                class="g-recaptcha"
                                data-sitekey="6Lcd3OMZAAAAABRq1jOzGnfW8FzURaRaJvyFaJNe"
                                data-callback="submitContactForm"
                                data-size="invisible">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Send a message
                                <i class="fa fa-comment pl-2" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /.col-md-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.contact -->

    <footer class="site-footer py-3 pb-4">
        <div class="container">
            <div class="row justify-content-center">
                <a href="https://github.com/DaniilZinoviev" class="social-link display-4 mx-3" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://vk.com/danzino" class="social-link display-4 mx-3" target="_blank">
                    <i class="fab fa-vk"></i>
                </a>
                <a href="https://www.linkedin.com/in/danzino/" class="social-link display-4 mx-3" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
        <!-- /.container -->
    </footer>


    <!-- Modals -->
    <!-- Template for Work item -->
    <div class="hidden" hidden>
        <!-- Blank template for each work item -->
        <div class="js-work-template-container">

            <div class="col-sm-6 col-md-4 col-lg-3 mb-4 work-wrap">
                <div class="work">
                    <a href="#work-modal" class="d-block img popup">
                        <img src="" alt="" class="img-fluid js-image">
                    </a>
                    <!-- /.img -->
                    <div class="p-3">
                        <h5 class="js-title">test</h5>
                        <p class="mb-1 js-short-description">test</p>
                        <p class="links mb-1">
                            <a href="#" class="mr-2 js-links-demo" target="_blank">View <i class="fas fa-sm fa-external-link-alt"></i></a>
                            <a href="#" class="js-links-github" target="_blank">GitHub <i class="fas fa-sm fa-external-link-alt"></i></a>
                        </p>
                    </div>
                    <!-- /.description -->
                </div>
                <!-- /.work -->
            </div>
            <!-- /.work-wrap -->

        </div>

        <!-- Modal for works -->
        <div id="work-modal" class="work-modal my-5 mx-auto p-4 px-2 bg-white mfp-hide">
            <h2 class="js-title"></h2>
            
            <div class="js-description description"></div>
            
            <div class="row">
                <div class="col-md-2">
                    <h6 class="d-inline-block text-uppercase mr-5">Stack</h6>
                </div>
                <div class="col-md-10">
                    <span class="js-stack"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <h6 class="d-inline-block text-uppercase mr-5">Date</h6>
                </div>
                <div class="col-md-10">
                    <span class="js-date"></span>
                </div>
            </div>

            <div class="img pt-3">
                <img src="" alt="" class="js-image img-fluid" />
            </div>
        </div>
        <!-- /Modal for works -->

        <!-- Modal for Contact form -->
        <div id="contact-modal" class="contact-modal col-sm-6 col-lg-4 my-5 mx-auto p-4 px-2 bg-white mfp-hide">
            <h2 class="js-status">Success</h2>
            <p class="js-message">Thank you for your message! I'll try answer to you ASAP &#128521;.</p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="js/main.js" defer></script>

    <!-- Google ReCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" defer></script>
</body>
</html>