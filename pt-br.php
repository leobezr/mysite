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

<main class="pt-br">
    <section id="banner">
        <div class="container bg-light full-height less-header pb-5 custom-border">
            <div class="row h-inherit">
                <div class="col-12 d-flex h-inherit justify-content-center align-items-center">
                    <div class="wrap">

                        <h1 class="text-center">
                            <span class="bezr-fade-up delay-1 d-block" bezr-animation>Bem vindo, meu nome é <strong>Leonardo Bezerra</strong>
                            </span><span class="bezr-fade-up delay-3 d-block" bezr-animation>Eu trabalho como desenvolvedor front end</span>
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
                        <li class="d-inline-block"><a href="#skills" class="local-scroll">habilidades</a></li>
                        <li class="d-inline-block"><a href="<?php echo $baseurl; ?>assets/leonardo-bezerra-resume.pdf" download><strong>currículo</strong></a></li>
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
                        <h3 class="text-center">Sobre é Leo Bezr</h3>
                        <p class="text-center">Aos 19 anos eu comecei a fazer engenharia na UVA (Universidade Veiga de Almeida), embora não tenha concluído comecei a trabalhar full time apenas com 23 anos de idade. Atualmente eu trabalho principalmente com front end em aplicações web. Sou contratado por uma agência chamada WDA.AG Agência Digital. Já me aventurei bastante também com trabalhos remotos e alguns freelancers tendo como foco design, usabilidade, experiência de usuário e alguns e-commerce. Sou bastante confiante nas minhas habilidades, tenho uma natureza curiosa, trabalhando sempre na evolução dos meus conhecimentos e habilidades.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="great-spacer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3 text-center">Trabalhos <strong>recentes</strong></h2>
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
                                        <li><a href="https://abefi.com.br/" target="_blank" rel="nofollow" title="abrir projeto pronto">Projeto</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-abefi" title="abrir imagem maior">Visualizar</a></li>
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
                                        <li><a href="https://abefi.com.br/eventos/" target="_blank" rel="nofollow" title="abrir projeto pronto">Projeto</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-abefi-evento" title="abrir imagem maior">Visualizar</a></li>
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
                                        <li><a href="http://clinartfisioterapia.com.br/" target="_blank" rel="nofollow" title="abrir projeto pronto">Projeto</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-clinart" title="abrir imagem maior">Visualizar</a></li>
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
                                        <li><a href="#" class="not-ready" target="_blank" rel="nofollow" title="not finished yet">Projeto</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-condor" title="abrir imagem maior">Visualizar</a></li>
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
                                        <li><a href="https://fixair.com.br/" target="_blank" rel="nofollow" title="abrir projeto pronto">Projeto</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-fixair" title="abrir imagem maior">Visualizar</a></li>
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
                                        <li><a href="https://www.rideclub.com.br/" target="_blank" rel="nofollow" title="abrir projeto pronto">Projeto</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-rideclub" title="abrir imagem maior">Visualizar</a></li>
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
                                        <li><a href="https://evolui.eco.br/" target="_blank" rel="nofollow" title="abrir projeto pronto">Projeto</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-evolui" title="abrir imagem maior">Visualizar</a></li>
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
                                        <li><a href="https://dealcompany.com.br/" target="_blank" rel="nofollow" title="abrir projeto pronto">Projeto</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-deal-company" title="abrir imagem maior">Visualizar</a></li>
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
                                        <li><a href="https://www.karlanunesfisio.com.br/" target="_blank" rel="nofollow" title="abrir projeto pronto">Projeto</a></li>
                                        <li><a href="#" data-display="<?php echo $baseurl; ?>assets/img/portfolio-karla-nunes" title="abrir imagem maior">Visualizar</a></li>
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
                    <h2 class="text-center">Minhas <strong>habilidades</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-6 mb-5 mb-xl-0">
                    <div class="wraper">
                        <h3>Front end</h3>
                        <table>
                            <tr>
                                <td>#</td>
                                <td>Syntaxe</td>
                                <td>Habilidades</td>
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
                                <td>Tipo</td>
                                <td>Habilidades</td>
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
                    <h2 class="text-center">Projetos pessoais</h2>
                    <p class="text-center">Eu diria que tenho um vicio por apps, com o passar do anos, eu usei vários aplicativos web e mobile de diferentes industrias. Finalmente decidi que seria um desafio legal projetar e montar meu próprios projetos. Esse site também fará parte da minha coleção no GitHub</p>
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
                                <p class="text-center">Privacidade e estilo, all in one.</p>
                                <p class="mt-3 text-center"><a href="#">Confira meu GitHub <i class="fab fa-github"></i></a></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="wrap p-5 bg-light">
                                <h3 class="text-center mb-3">Slider<br>Dynamic Builder</h3>
                                <p class="text-center">Básico e simples.</p>
                                <p class="mt-3 text-center"><a href="#">Confira meu GitHub <i class="fab fa-github"></i></a></p>
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
                <h3 class="text-center mb-3">Está contratando?</h3>
                <p class="text-center">Acredito ser uma pessoa muito fácil de se trabalhar com, amo novos desafios e estou sempre pronto pra trabalhar.<br>Precisando de ajuda com uma ideia incrível?</p>
                <p class="text-center"><a href="<?php echo $baseurl;?>contact" class="btn btn-primary">Vamos conversar</a></p>
            </div>
        </div>
    </section>
</main>

<?php
include_once('template/foot.php');
include_once('template/footer.php');
?>
