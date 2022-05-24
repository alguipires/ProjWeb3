<!--/*agina que fica os dados do usuario my dados

adicioanr paginas rotas aos tabs
criar o arquivo js do usuarios
pagina usuario ja ser a de edição pesnar sobre
pagiande receitas puzar da visão receitas

*/-->
    <!--Main inicio-->
    <!--Container-->
    <div class="container">

        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#newReceita">Criar uma receita</a></li>
                    <li class="tab col s3"><a class="active" href="#myReceitas">Minhas receitas</a></li>
                    <li class="tab col s3"><a href="#usuariosMeusComentarios">Meus comentarios</a></li>
                    <li class="tab col s3"><a href="#editData">Editar meus dados</a></li>
                </ul>
            </div>
            <!--Paginas dinamicas-->
            <div id="newReceita" class="col s12"></div>
            <div id="myReceitas" class="col s12"></div>
            <div id="usuariosMeusComentarios" class="col s12"></div>
            <div id="editData" class="col s12"></div>
        </div>

        <!--Fim Container-->
    </div>
    <!--Main fim-->
    
<!-- meu script -->
    <script type="text/javascript" src="<?= URL_JS . 'usuarios.js' ?>"></script>
