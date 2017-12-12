<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wesaac</title>

        <!-- Bootstrap Core CSS -->
        {{-- <link href="/welcome/css/bootstrap.min.css" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Font Awessome -->
        <link href="/welcome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/welcome/css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                      <img id="brand" src="/welcome/img/logo_head1.png" alt="Wesaac" class="img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Sobre</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#ebook">E-book</a>
                        </li>
                        {{-- <li>
                            <a class="page-scroll" href="#editions">Edições</a>
                        </li> --}}
                        <li>
                            <a class="page-scroll" href="#apoio">Apoio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contato</a>
                        </li>
                        <li class="divider" role="separator"></li>
                        <li class="dropdown language">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="/welcome/img/flag/br.svg" alt="..." class="img-thumbnail icon-small">  <small>pt-BR</small> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                    			    <li><a href="#" class="language"><img src="/welcome/img/flag/br.svg" alt="..." class="img-thumbnail icon-small"> <small>pt-BR</small></a></li>
                    			    <li><a href="#" class="language"><img src="/welcome/img/flag/us.svg" alt="..." class="img-thumbnail icon-small"> <small>en-US</small></a></li>
                	          </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div><!-- /.container -->

        </nav>

        <!-- Intro Section -->
        <section id="intro" class="intro-section" id="bg_pattern">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                        <img class="img-responsive" src="/welcome/img/logo_intro_1080.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title">Sobre o Wesaac</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                      <img class="img-responsive" src="{!! Storage::disk('local')->url($about->image_about) !!}" alt="">
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 text-justify">
                      <div class="about-description">
                        {!! $about->description !!}
                      </div>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <!-- Services Section -->
        <section id="ebook" class="editions-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title">E-book</h2>
                    </div>
                </div>

              <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                    <img class="img-responsive"src="/storage/images/e-book.png" alt="">
                </div><!-- .edition -->
              </div><!-- row -->
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 download-box">
                    {{-- <button type="button" class="btn btn-lg btn-outline-primary btn-block btn-download">Download</button> --}}
                    <a href="/storage/ebook/ebook-wesaac.pdf" class="btn btn-lg btn-outline-primary btn-block btn-download"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                </div><!-- .edition -->
              </div><!-- row -->

            </div><!-- container -->
        </section>

        <!-- Services Section -->
        {{-- <section id="editions" class="editions-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title">Edições</h2>
                    </div>
                </div>

              <div class="row edition-wrap">
              @foreach($editions as $edition)
                <div class="col-md-3 col-sm-6 col-xs-12 edition-box">
                  <div class="edition border-bottom-hover">
                    <div class="edition-pic">
                      <img src="{!! Storage::disk('local')->url($edition->image_city) !!}" alt="{!! $edition->year !!} - Edição {!! $edition->edition !!} - {!! $edition->city !!}/{!! $edition->state !!}">
                    </div>
                    <div class="edition-details">
                      <div class="edition-details-inner">
                        <a href="#" data-toggle="modal" data-target="#edition{!! $edition->edition !!}">
                          <h4 class="colored-text"> {!! $edition->year !!} - Edição {!! $edition->edition !!}</h4>
                          <div class="small-text">{!! $edition->city !!}/{!! $edition->state !!}</div>
                        </a>
                      </div><!-- .edition-details-inner -->
                    </div><!-- .edition-details -->
                  </div><!-- .edition -->
                </div><!-- .edition -->
              @endforeach
              </div><!-- row edition-wrap -->
            </div><!-- container -->
        </section> --}}

        <!-- Apoio -->
        <section id="apoio" class="editions-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title">Apoio e Organização</h2>
                    </div>
                </div>

              <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 edition-box">
                  <div class="img-apoio">
                      <img class="img-responsive" src="/storage/images/apoio/ifaamas.png" alt="">
                  </div><!-- .edition -->
                </div><!-- .edition -->
                <div class="col-md-3 col-sm-6 col-xs-12 edition-box">
                  <div class="img-apoio">
                      <img class="img-responsive" src="/storage/images/apoio/capes.png" alt="">
                  </div><!-- .edition -->
                </div><!-- .edition -->
                <div class="col-md-3 col-sm-6 col-xs-12 edition-box">
                  <div class="img-apoio">
                      <img class="img-responsive" src="/storage/images/apoio/furg.png" alt="">
                  </div><!-- .edition -->
                </div><!-- .edition -->
                <div class="col-md-3 col-sm-6 col-xs-12 edition-box">
                  <div class="img-apoio">
                      <img class="img-responsive" src="/storage/images/apoio/ce.png" alt="">
                  </div><!-- .edition -->
                </div><!-- .edition -->
              </div><!-- row edition-wrap -->

              <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 edition-box">
                  <div class="img-apoio">
                      <img class="img-responsive" src="/storage/images/apoio/poli.png" alt="">
                  </div><!-- .edition -->
                </div><!-- .edition -->
                <div class="col-md-4 col-sm-6 col-xs-12 edition-box">
                  <div class="img-apoio">
                      <img class="img-responsive" src="/storage/images/apoio/c3.png" alt="">
                  </div><!-- .edition -->
                </div><!-- .edition -->
                <div class="col-md-4 col-sm-6 col-xs-12 edition-box">
                  <div class="img-apoio">
                      <img class="img-responsive" src="/storage/images/apoio/usp.png" alt="">
                  </div><!-- .edition -->
                </div><!-- .edition -->
              </div><!-- row edition-wrap -->

              <div class="row">
                <h4>Funding Opportunities for Promoting AI Research</h4>
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-12 edition-box">
                  <div class="img-apoio">
                      <img class="img-responsive" src="/storage/images/apoio/ai.png" alt="">
                  </div><!-- .edition -->
                </div><!-- .edition -->
              </div><!-- row edition-wrap -->


            </div><!-- container -->
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title">Contato</h2>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-8 col-md-offset-2 contact-form">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="exampleInputName2">Nome</label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Digite seu nome">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail2">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Digite seu e-mail para retornarmos">
                      </div>
                      <div class="form-group ">
                        <label for="exampleInputText">Mensagem</label>
                       <textarea  class="form-control" placeholder="Digite aqui a sua mensagem"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                  </div>
                </div>

            </div>
        </section>


              @foreach($editions as $edition)
                <div class="modal material-modal material-modal_primary fade" id="edition{!! $edition->edition !!}">
                  <div class="modal-dialog ">
                    <div class="modal-content material-modal__content">
                      <div class="modal-header material-modal__header">
                        <button type="button" class="close material-modal__close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
{{--                           <span aria-hidden="true">&times;</span>
                        </button> --}}
                        <h4 class="modal-title material-modal__title">{!! $edition->year !!} - Edição {!! $edition->edition !!} - {!! $edition->city !!}/{!! $edition->state !!}</h4>
                      </div>
                      <div class="modal-body material-modal__body">
                        {!! $edition->description !!}
                        <p class="center">
                          @if ($edition->proceedings == '')
                            Documento não disponível
                          @else
                            <a href="{!! Storage::disk('local')->url($edition->proceedings) !!}" target="_blank">
                            <i class="fa fa-download" aria-hidden="true"></i> Download dos Proceedings</a>
                        @endif
                        </p>
                      </div>

                    </div>
                  </div>
                </div>
                @endforeach





{{--         <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6 footerleft ">
                <div class="logofooter"> <img src="/welcome/img/logo_head2.png" alt="" class="img-responsive"></div>
              </div>
              <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">Links</h6>
                <ul class="footer-ul">
                  <li><a href="#"> Sobre</a></li>
                  <li><a href="#"> Edições</a></li>
                  <li><a href="#"> Contato</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">Edições</h6>
                <ul class="footer-ul">
                  <li><a href="#">2017 - Edição 11 - São Paulo/SP</a></li>
                  <li><a href="#">2016 - Edição 10 - Maceió/AL</a></li>
                  <li><a href="#">2015 - Edição 09 - Niterói/RJ</a></li>
                  <li><a href="#">2014 - Edição 08 - Porto Alegre/RS</a></li>
                  <li><a href="#">2013 - Edição 07 - São Paulo/SP</a></li>
                  <li><a href="#">2012 - Edição 06 - Florianópolis/SC</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">Edições</h6>
                <ul class="footer-ul">
                  <li><a href="#">2011 - Edição 05 - XYZ/SWK</a></li>
                  <li><a href="#">2010 - Edição 04 - Rio Grande/RS</a></li>
                  <li><a href="#">2009 - Edição 03 - XYZ/SWK</a></li>
                  <li><a href="#">2008 - Edição 02 - XYZ/SWK</a></li>
                  <li><a href="#">2007 - Edição 01 - XYZ/SWK</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer> --}}
        <!--footer start from here-->

        <div class="copyright">
          <div class="container">
            <div class="col-md-12">
              <p>© 2017 - All Rights with Wesaac</p>
            </div>
          </div>
        </div>



        <div class="modal material-modal material-modal_primary fade" id="myModal_primary">
          <div class="modal-dialog ">
        	  <div class="modal-content material-modal__content">
        		  <div class="modal-header material-modal__header">
        			  <button class="close material-modal__close" data-dismiss="modal">&times;</button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        			  <h4 class="modal-title material-modal__title">Modal title</h4>
        		  </div>
        		  <div class="modal-body material-modal__body">
        			  <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, excepturi sapiente numquam
                  voluptatum dicta eum ex nobis asperiores distinctio saepe.
                </p>
        		  </div>
        		  <div class="modal-footer material-modal__footer">
        			  <button class="btn material-btn material-btn" data-dismiss="modal">Close</button>
        			  <button class="btn btn-primary material-btn material-btn_primary">Save changes</button>
        		  </div>
        	  </div>
          </div>
        </div>



        <!-- jQuery -->
        <script src="/welcome/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/welcome/js/bootstrap.min.js"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="/welcome/js/jquery.easing.min.js"></script>
        <script src="/welcome/js/scrolling-nav.js"></script>



    </body>

    </html>
