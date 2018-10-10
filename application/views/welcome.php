<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>API Intermeio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/line-icons.css">
    <link rel="stylesheet" href="/public/css/owl.carousel.css">
    <link rel="stylesheet" href="/public/css/owl.theme.css">
    <link rel="stylesheet" href="/public/css/nivo-lightbox.css">
    <link rel="stylesheet" href="/public/css/magnific-popup.css">
    <link rel="stylesheet" href="/public/css/slicknav.css">
    <link rel="stylesheet" href="/public/css/animate.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/responsive.css">

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="#hero-area" class="navbar-brand"><img height='50' class="img-fulid" src="/public/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#hero-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#token">Token</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#gerar_boleto">Gerar Boleto</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#hero-area">Home</a>
            </li>
            <li>
              <a class="page-scroll" href="#token">Token</a>
            </li>
            <li>
              <a class="page-scroll" href="#gerar_boleto">Gerar Boleto</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Exemplo para uso da API intermeio</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">este é um pequeno exemplo para uso da API intermeio. </p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section End -->

    <!-- Services Section Start -->
    <section id="token" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Gerar Token</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Demostração de geração de token.</p>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
				      <a href="javascript:void(0)" id='gerar_token' data-url='ajax/getToken/' class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Gerar</a>
            </div>
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
				      <a href="javascript:void(0)" id='limpar_token' class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Limpar</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
			        <div class="pricing-table">
                <div class="pricing-details">
                  <h2>Token</h2>
                  <span id='token_valor'></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Features Section Start -->
    <section id="gerar_boleto" class="section" data-stellar-background-ratio="0.2">
      <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" novalidate>
        <div class="container">
          <div class="section-header">
            <h2 class="section-title">Gerar Boleto</h2>
            <hr class="lines">
            <p class="section-subtitle">Demonstração para gerar um novo boleto.</p>
          </div>
          <div class="row">
            <div class="col-lg-2 col-md-12 col-xs-12">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-sm-3 col-xs-12 box-item">
                      <span class="icon">
                        <i class="lnr lnr-pencil"></i>
                      </span>
                      <div class="text">
                        <h4>Boleto</h4>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-sm-3 col-xs-12 box-item">
                      <span class="icon">
                        <i class="lnr lnr-user"></i>
                      </span>
                      <div class="text">
                        <h4>Cliente</h4>
                      </div>
                    </div>
                </div>
                <br><br><br><br><br><br><br>
                <div class="row">
                  <div class="col-lg-3 col-sm-3 col-xs-12 box-item">
                      <span class="icon">
                        <i class="lnr lnr-users"></i>
                      </span>
                      <div class="text">
                        <h4>Split</h4>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-10 col-xs-12">
              <div class="show-box">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="valor" name="valor" ='200' placeholder="Valor Ex:200 = R$2,00">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="dataVencimento" ='12/12/2018' name="dataVencimento" placeholder="Data do vencimento">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="numeroDocumento" ='215496' name="numeroDocumento" placeholder="Número do documento">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="nomeRazao" ='Felipe Pliger' name="nomeRazao" placeholder="Nome Cliente">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="cpfCnpj" ='62922245039' name="cpfCnpj" placeholder="CPF ou CNPJ">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="email" ='teste@teste.com' name="email" placeholder="E-mail">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="apelidoEndereco" ='Casa' name="apelidoEndereco" placeholder="Apelido Endereco">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="cep" ='04195150' name="cep" placeholder="CEP">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="logradouro" ='Rua' name="logradouro" placeholder="Logradouro">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="endereco" ='Aquiles jovane' name="endereco" placeholder="Endereço">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="numero" ='45' name="numero" placeholder="Número">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="bairro" ='Jardim Celeste' name="bairro" placeholder="Bairro">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="complemento" ='apto 62' name="complemento" placeholder="Complemento">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="cidade" ='São Paulo' name="cidade" placeholder="Cidade">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="estado" ='SP' name="estado" placeholder="Estado">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <input type="radio" name="split" onClick="hiidenClienteSplit(true)" value="true"> Sim<br>
                  <input type="radio" name="split" onClick="hiidenClienteSplit(false)" value="false"> Não<br>
                </div>
                <div hidden id='abortamento_split' class="col-md-3">
                  <label>Abortar em caso de Erro?</label>
                  <br>
                  <input type="radio" name="abortarSplit" value="true"> Sim<br>
                  <input type="radio" name="abortarSplit" value="false"> Não<br>
                </div>
              </div>
              <br>
              <div hidden id='div_split_cliente'>
                <div class="row"> 
                  <div class="col-md-5">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="nomeRazaoSplit" name="nomeRazaoSplit" placeholder="Nome Cliente">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="cpfCnpjSplit" name="cpfCnpjSplit" placeholder="CPF ou CNPJ">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="emailSplit" name="emailSplit" placeholder="E-mail">
                    </div>
                  </div>
                </div>
                <div class="row"> 
                  <div class="col-md-5">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="taxaSplit" name="taxaSplit" placeholder="Taxa (Porcentagem %)">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Notificar por SMS?</label>
                    <br>
                    <input type="radio" name="notificarSmsSplit" value="true"> Sim<br>
                    <input type="radio" name="notificarSmsSplit" value="false"> Não<br>
                  </div>
                  <div class="col-md-4">
                    <label>Notificar por E-mail?</label>
                    <br>
                    <input type="radio" name="notificarEmailSplit" value="true"> Sim<br>
                    <input type="radio" name="notificarEmailSplit" value="false"> Não<br>
                  </div>
                </div>
                <div class="row"> 
                  <div class="col-md-3">
                    <div class="form-group">
                      <input required type="text" class="form-control" id="apelidoTelefoneSplit" name="apelidoTelefoneSplit" placeholder="Apelido Telefone">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="dddSplit" name="dddSplit" placeholder="DDD">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="telefoneSplit" name="telefoneSplit" placeholder="Número de Telefone">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="codigoBancoplit" name="codigoBancoplit" placeholder="Código do Banco">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="agenciaBancoplit" name="agenciaBancoplit" placeholder="Agência">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="digitoBancoplit" name="digitoBancoplit" placeholder="Digito">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="contaBancoplit" name="contaBancoplit" placeholder="Conta">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <input required type="text" onkeyup="somenteNumeros(this);" class="form-control" id="digitoContaplit" name="digitoContaplit" placeholder="Digito">
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-success btn-salvar">Gerar</button>
            </div>
          </div>
        </div>
      </form>
    </section>
    <!-- Features Section End -->


    
    

    

    <!-- Footer Section Start -->
    <footer>
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
              <li>
                <a href="#">Homepage</a>
              </li>
              <li>
                <a href="#token">Token</a>
              </li>
              <li>
                <a href="#gerar_boleto">Gerar Boleto</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>Todos os direitos reservados &copy; 2018 - Desenvolvido e Produzido by <a rel="nofollow" href="https://intermeio.com.br">Intermeio</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/public/js/jquery-min.js"></script>
    <script src="/public/js/popper.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/jquery.mixitup.js"></script>
    <script src="/public/js/nivo-lightbox.js"></script>
    <script src="/public/js/owl.carousel.js"></script>
    <script src="/public/js/jquery.stellar.min.js"></script>
    <script src="/public/js/jquery.nav.js"></script>
    <script src="/public/js/scrolling-nav.js"></script>
    <script src="/public/js/jquery.easing.min.js"></script>
    <script src="/public/js/smoothscroll.js"></script>
    <script src="/public/js/jquery.slicknav.js"></script>
    <script src="/public/js/wow.js"></script>
    <script src="/public/js/jquery.vide.js"></script>
    <script src="/public/js/jquery.counterup.min.js"></script>
    <script src="/public/js/jquery.magnific-popup.min.js"></script>
    <script src="/public/js/waypoints.min.js"></script>
    <script src="/public/js/form-validator.min.js"></script>
    <script src="/public/js/contact-form-script.js"></script>
    <script src="/public/js/main.js"></script>
    <script src="/public/js/transacoes.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
</html>
