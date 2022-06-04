<!--pagina de login -->

<style>
        .input-field input[type=date]:focus+label,
        .input-field input[type=text]:focus+label,
        .input-field input[type=email]:focus+label,
        .input-field input[type=password]:focus+label {
            color: #e91e63;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid #e91e63;
            box-shadow: none;
        }
    </style>
    <!--Main inicio-->
    <div class="section"></div>
    <main id="main-login">
        <center>
            <div class="section">

            </div>

            <h5 class="indigo-text">Favor, fazer login em sua conta</h5>
            <div class="section"></div>

            <div class="container">
                <div class="z-depth-1 grey lighten-4 row div-login">

                    <form action="<?= URL_RAIZ . 'login' ?>" method="post" class="col s12">
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input id="email" type="email" name="email" class="validate" maxlength="40" pattern="^([\w\-]+\.)*[\w\- ]+@([\w\- ]+\.)+([\w\-]{2,3})$" placeholder="seu@email.com" onfocus="ganhaFocus('input-email')" onblur="perdeFocus('input-email')" required>
                                <label for='email'>Preencha com seu E-mail</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name="senha" id="senha" required/>
                                <label for='senha'>Preencha com sua senha</label>
                            </div>
                            <label id="flutuar-esqueceu-senha">
                                <a class="blue-text" href="<?= URL_RAIZ . 'usuarios/criar' ?>"><b>Crie uma conta&nbsp;&nbsp;&nbsp;</b></a>
                                <a class="blue-text" href="forgotAcess.html"><b>Esqueci minha senha?</b></a>
                            </label>
                        </div>
                        </br>
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect purple darken-4'>Login</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>
    <!--Main fim-->