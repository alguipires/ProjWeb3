<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title><?= APLICACAO_NOME ?></title>
  <!--Cor da aba do navegador-->
  <meta name="theme-color" content="#4a148c">
  <meta name="apple-mobile-web-app-status-bar-style" content="#4a148c">
  <meta name="msapplication-navbutton-color" content="#4a148c">
  <!--Import Icons Font Awasome-->
  <link rel="stylesheet" href="<?= URL_FONTS . 'all.css'?>">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="<?= URL_CSS . 'materialize.min.css' ?>" media="screen,projection">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Icone da aba-->
  <link rel="icon" type="image/jpg" href="#">
  <!--CSS Custom-->
  <link rel="stylesheet" href="<?= URL_CSS . 'custom.css' ?>">

  <!-- baixar jquery e js antes para carregar as paginas footer e menu-->

  <!-- carregando jQuery -->
  <script type="text/javascript" src="<?= URL_JS . 'jquery-3.3.1.min.js' ?>"></script>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="<?= URL_JS . 'materialize.min.js' ?>"></script>

  <!-- meu script // não necessario, carregava menu e footer-->
  <!--<script type="text/javascript" src="init.js"></script>-->

</head>

<body>
  
  <!-- inicio nav-->
    <div id="menu">

    <script>
  (function ($) {
    $(function () {
      $(".dropdown-trigger").dropdown();
      $('.sidenav').sidenav();
    }); // end of document ready
  })(jQuery); // end of jQuery name space
</script>
<!-- inicio nav-->
<!-- Dropdown Structure
<ul id="dropdown1" class="dropdown-content purple darken-1">
  <li><a href="myPerfil.html">Meu perfil</a></li>
  <li><a href="myReceitas.html">Minhas receitas</a></li>
</ul>-->

<div class="navbar-fixed">
  <nav class="purple darken-1">
    <div class="centraliza-nav">
      <div class="nav-wrapper">
        <a href="<?= URL_RAIZ ?>" class="brand-logo">ReceitasTop</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
          <li>
            <div class="input-field col s6 m6">
              <input placeholder="Sua pesquisa" id="searchInput" type="text">
            </div>
          </li>
          <li><a href="<?= URL_RAIZ ?>"><i class="material-icons left">search</i></a>
          </li>
          <li><a href="<?= URL_RAIZ . 'dashboard' ?>">ReceitasTop/DashBoard</a></li>
          <li><a href="<?= URL_RAIZ . 'usuarios' ?>">Meu perfil</a></li>
          <!-- Dropdown Trigger
          <li><a class="dropdown-trigger" href="#" data-target="dropdown1">Meu perfil<i
                class="material-icons right">arrow_drop_down</i></a></li>-->
          <li><a class="waves-effect waves-light btn purple darken-4" href="<?= URL_RAIZ . 'login' ?>"><i
                class="material-icons left">lock</i>Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<ul class="sidenav" id="mobile-demo">
  <li>
    <div class="input-field col s6 m6">
      <input placeholder="Sua pesquisa" id="searchInput" type="text">
    </div>
    <a href="#"><i class="material-icons left">search</i></a>
  </li>
  <li><a href="#"><i class="material-icons left">search</i></a></li>
  <li><a href="aboutReceitastop.html">ReceitasTop/DashBoard</a></li>
  <li><a href="myPerfil.html">Meu perfil</a></li>
  <li><a href="myReceitas.html">Minhas receitas</a></li>
  <li><a class="waves-effect waves-light btn purple darken-4" href="login.html"><i class="material-icons left">lock</i>Login</a></li>
</ul>
    </div>
  <!-- fim nav-->

  

  <!-- inicio main-->
  <?php $this->imprimirConteudo() ?>
  <!-- fim main-->



  <!-- inicio footer-->
  <div id="footer">
  <footer class="page-footer purple darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Contato</h5>
                <p class="white-text text-lighten-4"><i class="material-icons">local_phone</i>&nbsp;(42) 3636-3636</p>
                <p class="white-text text-lighten-4"><i class="material-icons">location_on</i>&nbsp;R. XV de Novembro, 1730 - Centro, Guarapuava - PR, 85010-100</p>
                <p class="white-text text-lighten-4"><a
                        href="mailto:contato@receitastop.com.br">contato@receitastop.com.br</a></p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="white-text text-lighten-3" href="#"><span class="font-icon-social-midia-edit"><i
                                    class="fab fa-facebook-square"></i></span>&nbsp;@ReceitasTop</a></li>
                    <li><a class="white-text text-lighten-3" href="#"><span class="font-icon-social-midia-edit"><i
                                    class="fab fa-instagram"></i></span>&nbsp;Receitas.top</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2022 ReceitasTop. Todos os direitos reservados.
            <!--<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
        </div>
    </div>
</footer>
  </div>
  <!-- fim footer-->

</body>

</html>