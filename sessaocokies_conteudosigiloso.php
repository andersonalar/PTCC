<?php
ob_start();
?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>LS Lizi Santos</title>
</head>

<body>

<?php
session_start();
if(!isset($_SESSION["usuario"])){
echo"erro";
exit();
}
echo"ola               ".        $_SESSION["usuario"];
echo"<br><br>";



?>
    <header>
    <div class="logo">
        <div class="logotipo">        
        
        <p>LS Lizi Santos</p>
    </div>
    </div>

    <nav>    
        <ul>
            <h1><li><a href="index.html">HOME</a></li></h1>
            <h1><li><a href="index.html#servicos">SERVIÇOS</a></li></h1>
            <h1><li><a href="index.html#agendamentos">AGENDAMENTOS</a></li></h1>
            <h1><li><a href="contato.html">CONTATO</a></li></h1>
            <h1><li><a href="pagina_administrador.html">ADMINISTRADOR</a></li></h1>
            <h1><li><a href="login.html">LOGIN</a></li></h1>
        </ul>  
    </nav>        
</header>

<div class="botao">
    +
    <span class="tooltip">Fale conosco pelo Whatsapp!</span>
</div>

<a href="https://api.whatsapp.com/send?phone=5561999085645"><div class="botao">
        <img src="imagens/zapp.jpeg" alt="whatsapp ícone">
        <span class="tooltip">Fale conosco pelo Whatsapp!</span>
    </div></a>
<main>
    <!--CAROSSEL COM IMAGENS-->
    <div class="slider">
        <div class="slides">
    
    <!--BOTÕES DO SLIDE-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
    
    <!--IMAGENS DO SLIDE-->
            <div class="slide first">
                <img src="imagens\1.jpg" alt="imagem 1"/>
            </div>
            <div class="slide">
                <img src="imagens\2.jpg" alt="imagem 2"/>
            </div>
            <div class="slide">
                <img src="imagens\3.jpg" alt="imagem 3"/>
            </div>
            <div class="slide">
                <img src="imagens\4.jpg" alt="imagem 4"/>
            </div>
    
    <!--BARRA DE NAVEGAÇÃO DOS BOTÕES-->
            <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
        
            </div>
    
        </div>
    
    <!--REFERÊNCIAS DOS BOTÕES-->
        <div class="manual-navigation">
            
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
    
        </div>

    </div>
        <section id="home">
            <div class="about">
            <h1>LS Lizi Santos</h1><br><br><br>
            <p> Olá! Sou Lizi Santos, uma apaixonada cabeleireira e empreendedora com mais de 15 anos de experiência no cenário da beleza em São Paulo. Com 37 anos e uma trajetória marcada pela dedicação, inovação e
            destaque no cenário paulista. Desde os 16 anos, minha jornada é de aprimoramento constante,
            trabalhando com renomados profissionais e absorvendo conhecimento. Fazemos blindagem, selamento, escova,
            depilação, lavagem e mais! Espero que você tenha uma boa experiência com nosso salão, por favor, faça seu
            agendamento por nosso site.
            </div>
    
            <!--<div class="image">
                <img src="imagens\salão1.jpg" alt="Imagem do salão">
            </div>-->
        </section>

        <section id="servicos">
           <center><h1 style="font-size: 30px"> <!--align="center"-->Serviços</h1></center>
   
            <div id="container">
                <div class="card">
                    <img class="m" src="imagens/realinhamento.jpg" width="300" alt="Tratamento e realinhamento capilar" />
                    <div class="card-content">
                        <h3 style="font-size: 22px">Realinhamento Capilar</h3>
                        <p style="font-size: 20px">a partir de R$250,00</p>
                     </div>
                </div>
                    <div class="card">
                    <img class="m" src="imagens/tratamento.jpg" width="300" alt="Imagem de tratamento capilar."/>
                        <div class="card-content">
                            <h3 style="font-size: 22px">Tratamento Capilar + escova:</h3>
                            <p style="font-size: 20px">R$80,00</p>
                        </div>
                        </div> 
                        <div class="card">    
                    <img class="m" src="imagens/corte.jpg" width="300" alt="Cabelo curto de uma mulher."/>                        
                <div class="card-content">
                            <h3 style="font-size: 22px">Corte de Cabelo:</h3>
                            <p style="font-size: 20px">R$50,00</p>  
                        </div>
                        </div>                                                        
                    <div class="card">                
                    <img class="m" src="imagens/blindagem.jpg" width="300" alt="Costas de mulher com o cabelo após a blindagem."/>
                        <div class="card-content">
                        <h3 style="font-size: 22px">Blindagem capilar:</h3>
                        <p style="font-size: 20px">a partir de R$150,00</p>
                </div>
                </div>
            <!--<div class="card">
                    <img class="m" src="imagens/" width="300" alt="Serviço de Depilação" />
                    <div class="card-content">
                        <h3 style="font-size: 22px">Depilação:</h3>
                        <p style="font-size: 20px">a partir de R$50,00</p>
                </div>
                </div>
                    <div class="card">
                    <img class="m" src="imagens/mulher5.jpeg" width="300" alt="Aluno praticando movimento do freestyle utilizando duas FitBalls"/>
                    <div class="card-content">
                        <h3 style="font-size: 22px">Sombrancelha:</h3>
                        <p style="font-size: 20px">a partir de R$35,00</p>
                    </div>
                    </div> 
                        <div class="card">    
                    <img class="m" src="imagens/mulher6.jpeg" width="300" alt="Exercício em dupla de calistenia"/>                        
                    <div class="card-content">    
                        <h3 style="font-size: 22px">Manicure e pedicure:</h3>
                        <p style="font-size: 20px">R$50,00</p>
                        </div>
                    </div>                                                 
            </div>    -->      
        </section>
        <!--<section id="servicos"><br><br><br><br><br>
           <center> <h1>Serviços</h1></center>
           <center>
            <br>
           <table>
            <tr><td>
            <tr><td>   corte de cabelo masc </td><td class="direita">         R$15,00  </td></tr>
              <tr><td>  corte de cabelo fem  </td><td class="direita">        R$15,00  </td></tr>              
                  <tr><td>Manicure   </td><td class="direita">R$30,00</td></tr>                                              
                  <tr><td>  Escovinha</td><td class="direita">
                                       R$60,00 </td></tr>                    <tr><td>      Tintura  </td><td class="direita">R$80,00</td></tr>                                
              <tr><td> Barba/bigode</td><td class="direita" >R$40,00</td></tr>
                <tr><td>Pedicure </td><td class="direita">R$30,00</td></tr>
                <tr><td> Sobrancelha  </td ><td class="direita">R$40,00</td></tr>                                                 
    </table></td></center>
        </section>-->  
        <section id="agendamentos">
            <br><br>
            
    
    <h1 align="center">Agendamentos</h1>
    
    <form name="frm-agenda" method="POST" action="agendamento.php">
        <label align='left'>Cliente:</label><br>
        <input type="text" name="nome" placeholder= "Nome Completo" id="nome">
        <label>Serviço:</label><br>
        <input type="text" name="servico">
        <label>Funcionário:</label><br>
        <input type="text" name="funcionario">
        <label>Endereço:</label><br>
        <input type="text" name="endereco">
        <label for="senha">Horário:</label><br>
            <input type="text" name="horario" size="40">
            <label for="celular">Telefone:</label><br>
            <input type="phone" name="telefone" placeholder=(99)9999-9999 id="celular" pattern=“^\(?\d{2}\)\d{5}[-\s]\d{4}.*?$” maxlength="15">
            <div id="container">
                <div >
            <label for="data">Data:</label><br>
           
            <!--O código abaixo é para formatação de texto do campo "Telefone"-->

            <script>
                const celularInput = document.getElementById("celular");
        
                celularInput.addEventListener("input", function (e) {
                    let input = e.target.value.replace(/\D/g, ""); // Remove tudo que não for número
                    let formatted = "";
        
                    if (input.length <= 10) {
                        // Formato para números com 8 dígitos no final
                        formatted = input.replace(/^(\d{2})(\d{4})(\d{0,4})$/, "($1) $2-$3");
                    } else {
                        // Formato para números com 9 dígitos no final
                        formatted = input.replace(/^(\d{2})(\d{5})(\d{0,4})$/, "($1) $2-$3");
                    }
        
                    e.target.value = formatted; // Atualiza o campo com o número formatado
                });
            </script>
            
    
      <input class="dha-container" type="date" name="data">  <button>Consultar vagas</button>


</div>
    
    </div>
                
            <div id="container">
    
            <input type="submit" name="bt-enviar" value="Enviar">
    <input type="reset" value="Cancelar">
            
    
        </div>
    

    </form>
   <center> <a href="listarsalao.php">listar</a><br></center>
   <center><a href="pesquisar.html">pesquisar</a></center><br>
        </section>
        <br><br><br> <br><br><br> <br><br><br>







</main>
        


      
    <footer>
       <p> <span>Todos os direitos reservados | <b>Anderson, Filipe, Olenice & Igor</b></p></span>

    </footer>
    <script src="script.js"></script>
    
</body>

</html>