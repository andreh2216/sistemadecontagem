    <?php



    session_start();

    // Verifica se a sessão está autenticada
    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
        header("Location: login.php"); // Redireciona para a página de login
        exit();
    }

    // Restante do código da página aqui...
    ?>



    <!DOCTYPE html>
    <html>
        <link rel="icon" type="image/x-icon" href="/imagens/img1.ico">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/style.css">
    <head>
        <title>Prevenção - Frango</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

           
            h1 {
                text-align: center;
                margin:0px
            }

            table {
                width: 100%;
                margin-bottom: 20px;
                border-collapse: collapse;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            input[type="number"],
            input[type="text"] {
                width: 100%;
                padding: 5px;
                border: 1px solid #ddd;
                border-radius: 3px;
            }

            button {
                display: center;
  margin-top: 20px;
  padding: 10px 17px;
  background-color: #0000FF;
  color: white;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-size:20px
}
            

            @media only screen and (min-width: 600px) {
                /* Estilos específicos para telas maiores que 600px */
                table {
                    max-width: 600px;
                    margin-left: auto;
                    margin-right: auto;
                }

                button {
                    display: inline-block;
                    
                }
            }
            #observacoes-venda {
        width: 100%;
        height: 100px;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 3px;
        resize: vertical;
    }
  
    .buttons-header {display:flex;
            
            size:2px;
     
            position:relative;
            bottom:0;
       
       
       }


.ico {padding:24px; margin:1px;height:25px;     }  

  

        </style>
    </head>
    <body>
    <div class="header">


            
<img id="logo" style="display:none;" src="imagens/img2.png" alt="logo">
<h1><a  href="/aplicacao/cFrango.php">Frango</a></h1>






</div>



        <div>
            <h1>Contagem de Frango</h1>

            <h2>Câmara de Congelado</h2>
            <table>
                <thead>
                    <tr>
                        <th>Quantidade</th>
                        <th>Peso</th>
                        <th>Validade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="number" id="caixas-congelados" min="0"></td>
                        <td><input type="text" id="peso-congelados"></td>
                        <td><input type="date" id="validade-congelados"></td>
                    </tr>
                </tbody>
            </table>

            <h2>Câmara de Açougue</h2>
            <table>
                <thead>
                    <tr>

                        <th>Quantidade</th>
                        <th>Peso</th>
                        <th>Validade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td><input type="number" id="caixas-acougue-1" min="0"></td>
                        <td><input type="text" id="peso-acougue-1"></td>
                        <td><input type="date" id="validade-acougue-1"></td>
                    </tr>
                    <tr>

                        <td><input type="number" id="caixas-acougue-2" min="0"></td>
                        <td><input type="text" id="peso-acougue-2"></td>
                        <td><input type="date" id="validade-acougue-2"></td>
                    </tr>
                    <tr>

                        <td><input type="number" id="caixas-acougue-3" min="0"></td>
                        <td><input type="text" id="peso-acougue-3"></td>
                        <td><input type="date" id="validade-acougue-3"></td>
                    </tr>
                </tbody>
            </table>

            <h2>Frango</h2>
            <h3>Resfriado</h3>
            <table>
                <thead>
                    <tr>
                        <th>Quantidade</th>
                        <th>Resfriado (Kg)</th>
                        <th>Assado (Kg)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="number" id="quantidade-resfriado-unidades" min="0"></td>
                        <td><input type="number" id="peso-resfriado-quilos" min="0"></td>
                        <td><input type="number" id="assado-quilos"></td>
                    </tr>
                </tbody>
            </table>

            <h3>Reassado</h3>
            <table>
                <thead>
                    <tr>
                        <th>Quantidade</th>
                        <th>Reassado (Kg)</th>
                        <th>Assado 2(Kg)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="number" id="quantidade-reassado-unidades" min="0"></td>
                        <td><input type="number" id="peso-reassado-quilos" min="0"></td>
                        <td><input type="number" id="assado2-quilos"></td>
                    </tr>
                </tbody>
            </table><H2>Observação</h2>
            <textarea id="observacoes-venda" name="observacoes-venda" cols="30" rows="10"></textarea>

            <h2>Venda</h2>
            <table>
                <thead>
                    <tr>
                        <th>Quantidade (Kg)</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="number" id="quantidade-venda-quilos" min="0"></td>

                    </tr>
                </tbody>
            </table>

            <button onclick="registrarContagem()">Registrar Contagem</button>

            <h2>Tabela de Contagem</h2>
            <table id="tabela-contagem">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Quantidade</th>
                        <th>Peso</th>
                        <th>Validade</th>
                    </tr>
                </thead>
            </table>
        </div>


        <div class="buttons-header">


<a href="/seletor.php"><img class="ico" src="/imagens/casa-em-branco.png" alt="home" ></a>
<a href="/aplicacao.php"> <img  class="ico"src="/imagens/verificacao-de-lista.png" alt="home" ></a>
<a href="/relatorio.php"> <img class="ico"src="/imagens/alinhamento-do-grafico.png" alt="home"></a>
<a href="/historico.php"> <img class="ico"src="/imagens/tempo-passado.png" alt="home"></a>
<a href="/logout.php"> <img class="ico"src="/imagens/definicoes.png" alt="home"></a>


    </div>
 
        <script>
            function registrarContagem() {
                var caixasCongelados = document.getElementById("caixas-congelados").value;
                var pesoCongelados = document.getElementById("peso-congelados").value;
                var validadeCongelados = document.getElementById("validade-congelados").value;

                var caixasAcougue1 = document.getElementById("caixas-acougue-1").value;
                var pesoAcougue1 = document.getElementById("peso-acougue-1").value;
                var validadeAcougue1 = document.getElementById("validade-acougue-1").value;

                var caixasAcougue2 = document.getElementById("caixas-acougue-2").value;
                var pesoAcougue2 = document.getElementById("peso-acougue-2").value;
                var validadeAcougue2 = document.getElementById("validade-acougue-2").value;

                var caixasAcougue3 = document.getElementById("caixas-acougue-3").value;
                var pesoAcougue3 = document.getElementById("peso-acougue-3").value;
                var validadeAcougue3 = document.getElementById("validade-acougue-3").value;

                var quantidadeResfriadoUnidades = document.getElementById("quantidade-resfriado-unidades").value;
                var pesoResfriadoQuilos = document.getElementById("peso-resfriado-quilos").value;
                var assadoQuilos = document.getElementById("assado-quilos").value;

                var quantidadeReassadoUnidades = document.getElementById("quantidade-reassado-unidades").value;
                var pesoReassadoQuilos = document.getElementById("peso-reassado-quilos").value;
                var reassadoQuilos = document.getElementById("reassado-quilos").value;

                var quantidadeVendaQuilos = document.getElementById("quantidade-venda-quilos").value;
                var observacoesVenda = document.getElementById("observacoes-venda").value;

                var tabelaContagem = document.getElementById("tabela-contagem");

                var rowCongelados = tabelaContagem.insertRow();
                var cellCategoriaCongelados = rowCongelados.insertCell(0);
                var cellQuantidadeCongelados = rowCongelados.insertCell(1);
                var cellPesoCongelados = rowCongelados.insertCell(2);
                var cellValidadeCongelados = rowCongelados.insertCell(3);
                cellCategoriaCongelados.innerHTML = "Câmara de Congelado";
                cellQuantidadeCongelados.innerHTML = caixasCongelados;
                cellPesoCongelados.innerHTML = pesoCongelados;
                cellValidadeCongelados.innerHTML = validadeCongelados;

                var rowAcougue1 = tabelaContagem.insertRow();
                var cellCategoriaAcougue1 = rowAcougue1.insertCell(0);
                var cellQuantidadeAcougue1 = rowAcougue1.insertCell(1);
                var cellPesoAcougue1 = rowAcougue1.insertCell(2);
                var cellValidadeAcougue1 = rowAcougue1.insertCell(3);
                cellCategoriaAcougue1.innerHTML = "Câmara de Açougue (1)";
                cellQuantidadeAcougue1.innerHTML = caixasAcougue1;
                cellPesoAcougue1.innerHTML = pesoAcougue1;
                cellValidadeAcougue1.innerHTML = validadeAcougue1;

                var rowAcougue2 = tabelaContagem.insertRow();
                var cellCategoriaAcougue2 = rowAcougue2.insertCell(0);
                var cellQuantidadeAcougue2 = rowAcougue2.insertCell(1);
                var cellPesoAcougue2 = rowAcougue2.insertCell(2);
                var cellValidadeAcougue2 = rowAcougue2.insertCell(3);
                cellCategoriaAcougue2.innerHTML = "Câmara de Açougue (2)";
                cellQuantidadeAcougue2.innerHTML = caixasAcougue2;
                cellPesoAcougue2.innerHTML = pesoAcougue2;
                cellValidadeAcougue2.innerHTML = validadeAcougue2;

                var rowAcougue3 = tabelaContagem.insertRow();
                var cellCategoriaAcougue3 = rowAcougue3.insertCell(0);
                var cellQuantidadeAcougue3 = rowAcougue3.insertCell(1);
                var cellPesoAcougue3 = rowAcougue3.insertCell(2);
                var cellValidadeAcougue3 = rowAcougue3.insertCell(3);
                cellCategoriaAcougue3.innerHTML = "Câmara de Açougue (3)";
                cellQuantidadeAcougue3.innerHTML = caixasAcougue3;
                cellPesoAcougue3.innerHTML = pesoAcougue3;
                cellValidadeAcougue3.innerHTML = validadeAcougue3;

                var rowResfriado = tabelaContagem.insertRow();
                var cellCategoriaResfriado = rowResfriado.insertCell(0);
                var cellQuantidadeResfriado = rowResfriado.insertCell(1);
                var cellPesoResfriado = rowResfriado.insertCell(2);
                var cellValidadeResfriado = rowResfriado.insertCell(3);
                cellCategoriaResfriado.innerHTML = "Frango Resfriado";
                cellQuantidadeResfriado.innerHTML = quantidadeResfriadoUnidades;
                cellPesoResfriado.innerHTML = pesoResfriadoQuilos;
                cellValidadeResfriado.innerHTML = assadoQuilos;

                var rowReassado = tabelaContagem.insertRow();
                var cellCategoriaReassado = rowReassado.insertCell(0);
                var cellQuantidadeReassado = rowReassado.insertCell(1);
                var cellPesoReassado = rowReassado.insertCell(2);
                var cellValidadeReassado = rowReassado.insertCell(3);
                cellCategoriaReassado.innerHTML = "Frango Reassado";
                cellQuantidadeReassado.innerHTML = quantidadeReassadoUnidades;
                cellPesoReassado.innerHTML = pesoReassadoQuilos;
                cellValidadeReassado.innerHTML = reassadoQuilos;

                var rowVenda = tabelaContagem.insertRow();
                var cellCategoriaVenda = rowVenda.insertCell(0);
                var cellQuantidadeVenda = rowVenda.insertCell(1);
                var cellPesoVenda = rowVenda.insertCell(2);
                var cellValidadeVenda = rowVenda.insertCell(3);
                cellCategoriaVenda.innerHTML = "Venda";
                cellQuantidadeVenda.innerHTML = quantidadeVendaQuilos;
                cellPesoVenda.innerHTML = "-";
                cellValidadeVenda.innerHTML = observacoesVenda;
            }
    
    </body>
    </html>