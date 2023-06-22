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
<head>
    <link rel="icon" type="image/x-icon" href="/imagens/img1.ico">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Prevenção - Galeteria</title>

    <style>
    

        h1 {
            text-align: center;
            margin:0;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: bold;
        }

  

        input[type="text"],
        input[type="number"] {
            margin-bottom: 10px;
            padding: 5px;
            width: 90%;
            max-width: 300px;
        }

        input[type="submit"] {
          
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

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }


        .buttons-header {display:flex;
            
            size:2px;
     
            position:fixed;
            bottom:0;
       
       
       }


.ico {padding:24px; margin:1px;height:25px;     }  

       


    </style>
</head>
<body>
<div class="header">


            
            <img id="logo" style="display:none;" src="imagens/img2.png" alt="logo">
            <h1><a  href="/aplicacao/galeteria.php">Galeteria</a></h1>
      
           
  



        </div>



    <h1>Registro de Sobras</h1>
    <form id="sobra-form">
        <label for="codigo">Código do Produto:</label>
        <select id="codigo" name="codigo">
            <option value="1976-3">ALMÔNDEGA BOVINA KG</option>
            <option value="7905-7">AMENDOIM COZIDO KG</option>
            <option value="6860-8">ARROZ BRANCO KG</option>
            <option value="4845-3">ARROZ GREGO KG</option>
            <option value="1815-5">BIFE COM MOLHO KG</option>
            <option value="8468-9">BOBO IDEAL CAMARÃO KG</option>
            <option value="5313-9">COXA E SOBRECOXA KG</option>
            <option value="8269-4">CARURU KG</option>
            <option value="8971-0">COZIDO DE VERDURAS KG</option>
            <option value="7850-6">ENSOPADO DE FRANGO KG</option>
            <option value="1971-2">FAROFA CROCANTE KG</option>
            <option value="7069-6">FEIJÃO TROPEIRO KG</option>
            <option value="6135-2">FRANGO ASSADO KG</option>
            <option value="1655-1">FRANGO ASSADO POR PEDAÇO KG</option>
            <option value="5312-0">LINGUIÇA TOSCANA ASSADA KG</option>
            <option value="8727-0">MACARRÃO KG</option>
            <option value="2965-3">MINI ABARÁ COZIDO KG</option>
            <option value="7072-6">PEITO DE FRANGO EMPANADO ASSADO KG</option>
            <option value="8972-9">PIRÃO COZIDO KG</option>
            <option value="958-0">MILHO COZIDO KG</option>
            <option value="303927-7">MINGAU DE TAPIOCA KG</option>
            <option value="2871-1">MOQUECA DE BACALHAU KG</option>
            <option value="8273-2">MOQUECA DE PEIXE KG</option>
            <option value="7591-4">SALADA DE VERDURAS KG</option>
            <option value="8270-8">VATAPÁ KG</option>
            <option value="outro">OUTRO PRODUTO</option>
        </select>

        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso" placeholder="Digite o peso em kg" step="0.01" required>

        <label for="tara">Tara:</label>
        <input type="number" id="tara" name="tara" placeholder="Digite a tara em kg" step="0.01" required>

        <input  type="submit" value="Registrar Sobras">
    </form>

    <table id="sobra-table" style="display: none;">
        <thead>
            <tr>
                <th>Código do Produto</th>
                <th>Nome</th>
                <th>Peso</th>
                <th>Tara</th>
            </tr>
        </thead>
        <tbody id="sobra-table-body"></tbody>
    </table>

    <div class="buttons-header">


<a href="/seletor.php"><img class="ico" src="/imagens/casa-em-branco.png" alt="home" ></a>
<a href="/aplicacao.php"> <img  class="ico"src="/imagens/verificacao-de-lista.png" alt="home" ></a>
<a href="/relatorio.php"> <img class="ico"src="/imagens/alinhamento-do-grafico.png" alt="home"></a>
<a href="/historico.php"> <img class="ico"src="/imagens/tempo-passado.png" alt="home"></a>
<a href="/logout.php"> <img class="ico"src="/imagens/definicoes.png" alt="home"></a>


    </div>

    <script>
        document.getElementById('sobra-form').addEventListener('submit', function(e) {
            e.preventDefault();
            var table = document.getElementById('sobra-table');
            table.style.display = 'block';

            var tableBody = document.getElementById('sobra-table-body');
            var codigo = document.getElementById('codigo').value;
            var peso = document.getElementById('peso').value;
            var tara = document.getElementById('tara').value;

            if (codigo === 'outro') {
                var codigoManual = prompt('Digite o código do produto:');
                var nomeManual = prompt('Digite o nome do produto (sem números):');
                var row = document.createElement('tr');
                var codigoCell = document.createElement('td');
                var nomeCell = document.createElement('td');
                var pesoCell = document.createElement('td');
                var taraCell = document.createElement('td');

                codigoCell.textContent = codigoManual;
                nomeCell.textContent = nomeManual;
                pesoCell.textContent = peso + ' kg';
                taraCell.textContent = tara + ' kg';

                row.appendChild(codigoCell);
                row.appendChild(nomeCell);
                row.appendChild(pesoCell);
                row.appendChild(taraCell);

                tableBody.appendChild(row);
            } else {
                var optionText = document.querySelector('#codigo option[value="' + codigo + '"]').textContent;
                var codigoProduto = codigo;
                var nomeProduto = optionText;

                var row = document.createElement('tr');
                var codigoCell = document.createElement('td');
                var nomeCell = document.createElement('td');
                var pesoCell = document.createElement('td');
                var taraCell = document.createElement('td');

                codigoCell.textContent = codigoProduto;
                nomeCell.textContent = nomeProduto;
                pesoCell.textContent = peso + ' kg';
                taraCell.textContent = tara + ' kg';

                row.appendChild(codigoCell);
                row.appendChild(nomeCell);
                row.appendChild(pesoCell);
                row.appendChild(taraCell);

                tableBody.appendChild(row);
            }

            document.getElementById('codigo').value = '';
            document.getElementById('peso').value = '';
            document.getElementById('tara').value = '';
        });
    </script>
  
</body>
</html>