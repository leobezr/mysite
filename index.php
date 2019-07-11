<?php
include_once('config.php');
include_once('template/head.php');
include_once('template/header.php');
?>

<div id="display" class="modal">
    <span id="close" class="text-white"><i class="fas fa-times"></i></span>
    <div class="view">
        <div class="wrap-loader">
            <div class="loader"></div>
        </div>
        <figure>
            <img src="" alt="Current displayed image">
        </figure>
    </div>
</div>

<main>
    <section id="banner">
        <div class="container bg-light full-height less-header pb-5 custom-border">
            <div class="row h-inherit">
                <div class="col-12 d-flex h-inherit justify-content-center align-items-center">
                    <div class="wrap">

                        <h1 class="text-center">
                            <span class="bezr-fade-up delay-1 d-block" bezr-animation>Hello, I’m <strong>Leonardo Bezerra</strong>
                            </span><span class="bezr-fade-up delay-3 d-block" bezr-animation>I work as a front end web developer</span>
                        </h1>

                        <div class="socials d-flex justify-content-center align-items-end mt-5 pt-2 pt-xl-2 mt-xl-5 pt-sm-3 mt-sm-3">
                            <ul class="p-0 m-0">
                                <li class="d-inline-block"><a href="https://www.linkedin.com/in/leobezr/" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="d-inline-block"><a href="https://github.com/leobezr/" target="_blank" rel="nofollow"><i class="fab fa-github"></i></a></li>
                                <li class="d-inline-block"><a href="https://www.behance.net/lebezr" target="_blank" rel="nofollow"><i class="fab fa-behance"></i></a></li>
                                <li class="d-inline-block"><a href="https://stackoverflow.com/users/8501460/leonardo-bezerra" target="_blank" rel="nofollow"><i class="fab fa-stack-overflow"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="little-menu">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 h-inherit d-flex justify-content-around align-items-center">
                    <ul class="p-0 m-0">
                        <li class="d-inline-block"><a href="#skills" class="local-scroll">my skills</a></li>
                        <li class="d-inline-block"><a href="<?php echo $baseurl; ?>assets/leonardo-bezerra-resume.pdf" download><strong>resume</strong></a></li>
                        <li class="d-inline-block"><a href="#portfolio" class="local-scroll">portfolio</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="about-me">
        <div class="container-fluid bg-primary">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 great-spacer text-white limit">
                        <h3 class="text-center">Hi I'm Leo Bezr</h3>
                        <p class="text-center">I am currently <?php echo $age; ?> years old and I started studying engineering for a bachelor's degree at the age of 19 only starting to work full time as a web developer at the age of 23 on web applications. I work as a jr front end developer at an agency called WDA.AG Agência Digital from Rio de Janeiro, Brazil. I've also done a lot of remote and freelance work such as e-commerce, professional portfolios and business web sites. I'm quietly confident, naturally curious, and perpetually working on improving my knowledge and skills.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="great-spacer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3 text-center">Recent <strong>websites</strong></h2>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12 col-sm-6 mb-5 mb-xl-0 mb-sm-0 col-xl-4">
                    <div class="box-projects custom-border">
                        <div class="bg-image" style="background-image: url(<?php echo $baseurl; ?>assets/img/portfolio-abefi.jpg);">
                            <!-- project image -->
                            <div class="context">
                                <div class="isolador">
                                    <h3>ABEFI</h3>
                                    <ul class="p-0 m-0">
                                        <li><a href="https://abefi.com.br/" target="_blank" rel="nofollow" title="go to project link">Project</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-abefi" title="open bigger image">View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 d-none d-xl-block">
                    <div class="box-projects">
                        <div class="bg-image" style="background-image: url(<?php echo $baseurl; ?>assets/img/portfolio-abefi-evento.jpg);">
                            <!-- project image -->
                            <div class="context">
                                <div class="isolador">
                                    <h3>ABEFI Event</h3>
                                    <ul class="p-0 m-0">
                                        <li><a href="https://abefi.com.br/eventos/" target="_blank" rel="nofollow" title="go to project link">Project</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-abefi-evento" title="open bigger image">View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="box-projects">
                        <div class="bg-image" style="background-image: url(<?php echo $baseurl; ?>assets/img/portfolio-clinart.jpg);">
                            <!-- project image -->
                            <div class="context">
                                <div class="isolador">
                                    <h3>CLINART</h3>
                                    <ul class="p-0 m-0">
                                        <li><a href="http://clinartfisioterapia.com.br/" target="_blank" rel="nofollow" title="go to project link">Project</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-clinart" title="open bigger image">View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12 col-sm-6 mb-5 mb-xl-0 mb-sm-0 col-xl-4">
                    <div class="box-projects">
                        <div class="bg-image" style="background-image: url(<?php echo $baseurl; ?>assets/img/portfolio-condor.jpg);">
                            <!-- project image -->
                            <div class="context">
                                <div class="isolador">
                                    <h3>Condor</h3>
                                    <ul class="p-0 m-0">
                                        <li><a href="#" class="not-ready" target="_blank" rel="nofollow" title="not finished yet">Project</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-condor" title="open bigger image">View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 d-none d-xl-block col-xl-4">
                    <div class="box-projects">
                        <div class="bg-image" style="background-image: url(<?php echo $baseurl; ?>assets/img/portfolio-fixair.jpg);">
                            <!-- project image -->
                            <div class="context">
                                <div class="isolador">
                                    <h3>Fixair</h3>
                                    <ul class="p-0 m-0">
                                        <li><a href="https://fixair.com.br/" target="_blank" rel="nofollow" title="go to project link">Project</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-fixair" title="open bigger image">View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="box-projects">
                        <div class="bg-image" style="background-image: url(<?php echo $baseurl; ?>assets/img/portfolio-rideclub.jpg);">
                            <!-- project image -->
                            <div class="context">
                                <div class="isolador">
                                    <h3>Rideclub</h3>
                                    <ul class="p-0 m-0">
                                        <li><a href="https://www.rideclub.com.br/" target="_blank" rel="nofollow" title="go to project link">Project</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-rideclub" title="open bigger image">View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12 col-sm-6 d-none d-xl-block col-xl-4">
                    <div class="box-projects">
                        <div class="bg-image" style="background-image: url(<?php echo $baseurl; ?>assets/img/portfolio-evolui.jpg);">
                            <!-- project image -->
                            <div class="context">
                                <div class="isolador">
                                    <h3>Evolui</h3>
                                    <ul class="p-0 m-0">
                                        <li><a href="https://evolui.eco.br/" target="_blank" rel="nofollow" title="go to project link">Project</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-evolui" title="open bigger image">View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 mb-5 mb-xl-0 mb-sm-0 col-xl-4">
                    <div class="box-projects">
                        <div class="bg-image" style="background-image: url(<?php echo $baseurl; ?>assets/img/portfolio-deal-company.jpg);">
                            <!-- project image -->
                            <div class="context">
                                <div class="isolador">
                                    <h3>Deal Company</h3>
                                    <ul class="p-0 m-0">
                                        <li><a href="https://dealcompany.com.br/" target="_blank" rel="nofollow" title="go to project link">Project</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-deal-company" title="open bigger image">View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="box-projects">
                        <div class="bg-image" style="background-image: url(<?php echo $baseurl; ?>assets/img/portfolio-karla-nunes.jpg);">
                            <!-- project image -->
                            <div class="context">
                                <div class="isolador">
                                    <h3>Karla Nunes</h3>
                                    <ul class="p-0 m-0">
                                        <li><a href="https://www.karlanunesfisio.com.br/" target="_blank" rel="nofollow" title="go to project link">Project</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-karla-nunes" title="open bigger image">View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="border-top border-color">
        <div class="container great-spacer mt-5">
            <div class="row mb-3">
                <div class="col-12">
                    <h2 class="text-center">My <strong>skills</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-6 mb-5 mb-xl-0">
                    <div class="wraper">
                        <h3>Front end</h3>
                        <table>
                            <tr>
                                <td>#</td>
                                <td>Syntax</td>
                                <td>Habilities</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>HTML</td>
                                <td>HTML, Bootstrap, Material Design</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CSS</td>
                                <td>CSS3, SCSS, SASS</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>JavaScript</td>
                                <td>Vanilla, EcmaScript6, TypeScript, jQuery, Angular 7+, AJAX, API</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Git</td>
                                <td>GitHub, BitBucket</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                    <div class="wraper">
                        <h3>Back end</h3>
                        <table>
                            <tr>
                                <td>#</td>
                                <td>Type</td>
                                <td>Habilities</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>PHP</td>
                                <td>CodeIgniter</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>WordPress</td>
                                <td>Plugins</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Browser extension</td>
                                <td>JavaScript build</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="personal">
        <div class="container-fluid bg-primary py-5 great-spacer mb-0">
            <div class="row great-spacer">
                <div class="col-12 col-md-8 col-xl-6 mx-auto text-white">
                    <h2 class="text-center">Personal projects</h2>
                    <p class="text-center">I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own. This project will also be at my GitHub</p>
                </div>
            </div>
        </div>
        <div class="container pull-up">
            <div class="row">
                <div class="col-10 col-md-8 col-lg-8 col-xl-6 mx-auto great-spacer mt-0">
                    <div class="row row-eq-height">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-5 mb-xl-0">
                            <div class="wrap p-5 bg-light">
                                <h3 class="text-center mb-3">Whatsapp<br> Chrome Extension</h3>
                                <p class="text-center">Privacy and style, all in one.</p>
                                <p class="mt-3 text-center"><a href="#">Checkout GitHub <i class="fab fa-github"></i></a></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="wrap p-5 bg-light">
                                <h3 class="text-center mb-3">Slider<br>Dynamic Builder</h3>
                                <p class="text-center">Basic and simple.</p>
                                <p class="mt-3 text-center"><a href="#">Checkout GitHub <i class="fab fa-github"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="callout">
        <div class="container-fluid border-top border-color">
            <div class="great-spacer">
                <h3 class="text-center mb-3">Looking to hire?</h3>
                <p class="text-center">I'm a very easy going guy and love new challenges.<br>Need help with an awesome idea?</p>
                <p class="text-center"><a href="<?php echo $baseurl; ?>contact" class="btn btn-primary">Let's talk</a></p>
            </div>
        </div>
    </section>
</main>

<?php
include_once('template/foot.php');
include_once('template/footer.php');
?>
