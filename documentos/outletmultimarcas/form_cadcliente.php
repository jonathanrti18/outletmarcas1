<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="cadastra_aluno.php" method="post">
            <fieldset>
                <legend id="titulo">Formulário de Cadastro dos Clientes</legend>
                    <div id="grupo">
                        <div id="grupo">
                        <div class="grupo">
                            <label>Usuario</label>
                            <input required class="controle" type="text" name="usuario" id="login">
                        </div>
                            
                        <div class="grupo">
                            <label>Senha</label>
                            <input required class="controle" type="password" name="senha" id="senha">
                        </div> 
                    
                    <div class="grupo">
                        <label>Nome</label>
                        <input required class="controle" type="text" name="nome" id="nome">
                    </div>
                            
                    <div class="grupo">
                        <label>Sobrenome</label>
                        <input required class="controle" type="text" name="sobrenome" id="nome">
                    </div>
                   
                    <div class="grupo">
                        <label>E-mail</label>
                        <input required class="controle" type="email" name="email" id="email">
                    </div>
                            
                    <div class="grupo">
                        <label>Cidade</label>
                        <input required class="controle" type="text" name="cidade" id="cidade">
                    </div>        
                            
                    <div class="grupo">
                        <label>Tipo Logradouro</label>
                        <input required class="controle" type="text" name="tipo_logradouro" id="nome">
                    </div>
                        
                    <div class="grupo">
                        <label>Logradouro</label>
                        <input required class="controle" type="text" name="logradouro" id="nome">
                    </div>
                            
                    <div class="grupo">
                        <label>RG</label>
                        <input required class="controle" type="number" name="rg" id="rg">
                    </div>
                            
                    <div class="grupo">
                        <label>CPF</label>
                        <input required class="controle" type="number" name="cpf" id="cpf">
                    </div>       
                     
                    <div class="grupo">
                        <label>Telefone</label>
                        <input required class="controle" type="number" name="rg" id="telefone">
                    </div>        
                            
                    <div id="grupo">                            
                    <div class="botao">
                        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                    </div>        
                        
                   
                    
                    
                
            </fieldset>  
            
            <!--Estilos -->
            
            <style>
                #titulo{
                   text-align: center;
                   font-size: 25px;
                   padding: auto;
                   display: inline;
                   margin: 15px;
                   font-family: verdana;
                   
                }
                .grupo label{
                   font-family: verdana;
                   margin: 7px;
                   font-size: 12px;
                   display: inline-block;
                   vertical-align: center;
                   display: inline-block;
                   text-align: right;
                   width: 25%
                    
                   
                }
                .controle{
                    margin: 6px;
                    padding: 3px;
                    width: 50%
                    
                }
                .botao{
                    text-align: center;
                    width: auto;
                }
                .separacao{
                    text-align:center;
                }
              

            </style>
            
        </form>
            </body>
</html>