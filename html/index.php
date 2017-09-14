<!-- INCLUDE HEAD -->
<?php
error_reporting(0);
header("Cache-Control: no-cache, must-revalidate");
 include("../views/head.html") ?>

<body>
    <div id="pigmentum" class="modal-wrap">
        <div class="modal">
            <div class="modal-header">pigmentum.js</div>
            <div class="modal-body"></div>
            <div class="modal-footer">ASD</div>
        </div>
    </div>
    <div id="penis" class="modal-wrap">
        <div class="modal">
            <div class="modal-header">penis.js</div>
            <div class="modal-body"></div>
            <div class="modal-footer">ASD</div>
        </div>
    </div>
    <div style="display: none" class="loading-screen">
        <div class="loader-wrap">
            <div class="loader">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-12 main-title-wrap">
                    <h1 class="main-title animated animation-fade-left">JVITOROC</h1>
                </div>
                <nav class="nav animated animation-fade-right col-sm-5 col-12">
                    <ul>
                        <li>
                            <a target="_blank" href="https://drive.google.com/open?id=1goTxqhuJ9_opzQn7XD_IaXPes3BNzfhJ5shEW7hd0no">
                                <svg aria-hidden="true" style="width:24px;height:24px" role="img" title="Currículo">
                                    <use xlink:href="#curriculo"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://github.com/jvitoroc">
                                <svg aria-hidden="true" style="width:24px;height:24px" role="img" title="GitHub">
                                    <use xlink:href="#github"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/in/jvitoroc/">
                                <svg aria-hidden="true" style="width:24px;height:24px" role="img" title="LinkedIn">
                                    <use xlink:href="#linkedin"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="intro section">
        <div class="container">
            <h2 class="intro-title animated animation-fade-right dash">Colocando em prática o que aprendi.</h2>
            <div class="icons animated animation-fade-down">
                <div class="row">
                    <div class="col">
                        <svg role="img" aria-hidden="true" title="HTML5 - created by @Templarian">
                            <use xlink:href="#html5"/>
                        </svg>
                    </div>
                    <div class="col">
                        <svg role="img" aria-hidden="true" title="JavaScript">
                            <use xlink:href="#js"/>
                        </svg>
                    </div>
                    <div class="col">
                        <svg role="img" aria-hidden="true" title="PHP">
                            <use xlink:href="#php"/>
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <svg role="img" aria-hidden="true" title="Node.js">
                            <use xlink:href="#nodejs"/>
                        </svg>
                    </div>
                    <div class="col">
                        <svg role="img" aria-hidden="true" title="CSS3">
                            <use xlink:href="#css3"/>
                        </svg>
                    </div>
                    <div class="col">
                        <svg role="img" aria-hidden="true" title="Photoshop">
                            <use xlink:href="#ps"/>
                        </svg>
                    </div>
                </div>
            </div>
            <p class="quote bullet-before animated animation-fade-left">Com pouca experiência em <span class="special-term">front end</span>, tentarei fazer meu máximo para construir qualquer projeto.</p>
        </div>
    </section>
    <section class="section portfolio">
        <div class="container">
            <h2 class="section-title animated animation-fade-down dash">Portfólio</h2>
            <div class="section-body animated animation-fade-left">
                <div class="pages">
                    <div data-target="#pigmentum" data-img="./imgs/face.PNG" class="page">
                        <div class="pages-title">pigmentum.js</div>
                    </div>
                    <div data-target="#penis" data-img="./imgs/face.PNG"  class="page">
                        <div class="pages-title">pigmentum.js</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section about-section">
        <div class="container">
            <h2 class="section-title animated animation-fade-down dash">SOBRE MIM</h2>
            <div class="section-body animated animation-fade-left">
                <div class="row about">
                    <div class="about-item col-md-4">
                    <svg role="img" aria-hidden="true">
                            <use xlink:href="#arrow-top-left"/>
                        </svg>
                        <h4 class="bullet">Simples</h4>
                        <p class="quote">Em minhas criações tento fazer coisas simples e objetivas, assim como este site. Mas isso não quer dizer que sou capaz de muito mais.</p>
                    </div>
                    <div class="about-item col-md-4">
                    <svg role="img" aria-hidden="true">
                            <use xlink:href="#arrow-up"/>
                        </svg>
                        <h4 class="bullet">Autodidata</h4>
                        <p class="quote">Sempre estudo e corro atrás do que eu quero. Dou a maior parte do meu tempo ao autoestudo.</p>
                    </div>
                    <div class="about-item col-md-4">
                    <svg role="img" aria-hidden="true">
                            <use xlink:href="#arrow-top-right"/>
                        </svg>
                        <h4 class="bullet">Detalhista</h4>
                        <p class="quote">Não deixo nem os pequenos erros para trás, tento sempre chegar a perfeição.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section contact">
        <div class="container">
            <h2 class="section-title animated animation-fade-down dash">Contato</h2>
            <div class="section-body animated animation-fade-right">
                <div class="row">
                <div class="col-sm-7">
                <form novalidate id="sendEmail" method="POST" action="email.php" class="contact-form">
                <div class="form-done success"><div><h5>A mensagem foi enviada com sucesso!</h5></div></div>
                <div class="form-done fail"><div><h5>Por algum motivo a mensagem não foi enviada!</h5></div></div>
                <div class="sending"><div class="loader-wrap">
            <div class="loader">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div></div>
                    <div class="input-group">
                        <div class="error"></div>
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name"/>
                    </div>
                    <div class="input-group">
                    <div class="error"></div>
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                    <div class="input-group">
                    <div class="error"></div>
                        <label for="name">Assunto</label>
                        <input type="text" name="subject" id="subject"/>
                    </div>
                    <div class="input-group">
                    <div class="error"></div>
                        <label for="message">Mensagem</label>
                        <textarea id="message" name="message" rows="10" cols="50"></textarea>
                    </div>
                    <div class="button-wrapper">
                        <button name="submit" type="submit">
                            <svg aria-hidden="true" style="width:24px;height:24px" role="img" title="HTML5">
                                <use xlink:href="#send"/>
                            </svg>
                        </button>
                    </div>
                </form>
                </div>
                
                <div class="col-sm-5">
                <a class="show-more" data-target="contact-misc" id="slideDown">Mostrar mais</a>
                    <div id="contact-misc" class="contact-misc">
                        <h4>EMAIl</h4>
                        <p>lopogax@gmail.com</p>
                        <h4>TWITTER</h4>
                        <p><a class="reference" target="_blank" href="https://twitter.com/jvitoroc">@jvitoroc<svg role="img" aria-hidden="true" title="Open in new">
                                <use xlink:href="#open-in-new"/>
                            </svg></a></p>
                        <h4>LINKEDIN</h4>
                        <p><a class="reference" target="_blank" href="https://www.linkedin.com/in/jvitoroc/">jvitoroc<svg role="img" aria-hidden="true" title="Open in new">
                                <use xlink:href="#open-in-new"/>
                            </svg></a></p>
                        <h4>CONTATO</h4>
                        <p>É indispensável colocar o motivo do contato no campo <span class="special-term">Assunto</span>. Entre em contato em caso de: freelance ou qualquer outro tipo de contato profissional.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <p>Alguns direitos reservados - João Vitor de Oliveira</p>
        </div>
    </footer>
    </div>
    <!-- INCLUDE SVGS -->
    <?php include("../views/svg.html") ?>
    
    <script src="scripts/jquery-3.2.1.min.js"></script>
    <script src='scripts/svg4everybody.js'></script>
    <script>svg4everybody();</script>
    <script src='scripts/script.js'></script>
</body>
</html>