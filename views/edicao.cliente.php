<?php require_once('../controllers/cliente.controller.php'); ?>

<html>
    <head>
        <script src="../resources/bootstrap/js/jquery.min.js"></script>
        <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css" />
        <title>Locadora de filmes 1.0</title>
    </head>
    <body>
        <div>
            <?php require_once('menu.php'); ?>
        </div>
        <div class="container-fluid"> 
                <div class="row">
                    <div class="col-sm-6"><h1><label>Cadastrar Novo Cliente</label></h1></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4"></div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <table border="0" class="table">
                            <tr>
                                    <td>Nome do Filme :</td>
                                <td><input type="text" id="txtNomeFilme"></td>
                            </tr>
                            <tr>
                                    <td>Genero:</td>
                                <td><input type="text" id="txtGeneroFilme"></td>
                            </tr>
                            <tr>
                                    <td>Preço:</td> 
                                <td><input type="double" id="txtPrecoFilme"></td>
                            </tr>
                                
                            <!-- <tr>
                                    <td>Status:</td>
                                <td><input type="number" id="txtStatusFilme"></td>
                            </tr>-->
                            
                            
                        </table>
                        <button class="btn btn-default" type="button" onclick="cadastrar()">Salvar</button>
                    </div>
                   
               </div>
        </div>
    </body>
</html>

<script>
    
     function cadastrarcliente(){
        $.ajax({
            url: '../controllers/cliente.controller.php',
            type: 'POST',
            data: {
                nomeFilme: $('#txtNomeFilme').val(),
                generoFilme: $('#txtGeneroFilme').val(),
                precoFilme: $('#txtPrecoFilme').val(),
                cadastrarFilme: true
            }, success:function(response){
                if(response.trim() == "1"){
                    alert('Cliente cadastrado com sucesso');
                    location.reload();                   
                }else{
                    alert('Eroo ao cadastrar cliente');
                }
            }, error:function(response){
                alert("ERRO AO CADASTRAR CLIENTE");
            }
        });  
    }

</script>