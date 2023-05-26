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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <style>

body {
  font-family: Arial, sans-serif;
  
}

.header {
            background-color: #4CAF50;
            padding: 20px;
            text-align: center;
        }

        .header a {
            color: #fff;
            margin-right: 10px;
            text-decoration: none;
        }
.footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;



            left: 0;
            bottom: 0;
            width: 100%;
        }

h1 {
  text-align: center;
}

h2 {
  margin-top: 20px;
}

label {
  display: block;
  margin-top: 10px;
}

input[type="number"] {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

button {
  display: block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

table {
  margin-top: 20px;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

@media (max-width: 480px) {
  input[type="number"] {
    width: 100%;
  }
}


    </style>
  <title>Registro de Produção de Pães</title>
</head>
<body>


<div class="header">
        <h1>Prevenção</h1>
        <h2>Olá, <?php echo $_SESSION['nome']; ?></h2>
        <a href="historico.php">Histórico</a>
        <a href="alterar_senha.php">Alterar Senha</a>
       <a href="logout.php">Sair</a>
    </div>

  <h1>Registro de Produção de Pães</h1>

  <h2>Pão Francês</h2>
  <label for="pao_frances_limiar_kg">Pão Francês Limiar (Placas):</label>
  <input type="number" id="pao_frances_limiar_kg" placeholder="0">

  <label for="pao_frances_limiar_integral_kg">Pão Francês Limiar Integral (Placas):</label>
  <input type="number" id="pao_frances_limiar_integral_kg" placeholder="0">

  <h2>Pão Baguete</h2>
  <label for="pao_baguete_italiana_limiar_multigraos_kg">Pão Baguete Italiana Limiar Multigrãos (Placas):</label>
  <input type="number" id="pao_baguete_italiana_limiar_multigraos_kg" placeholder="0">

  <label for="pao_baguete_italiana_limiar_tradicional_kg">Pão Baguete Italiana Limiar Tradicional (Placas):</label>
  <input type="number" id="pao_baguete_italiana_limiar_tradicional_kg" placeholder="0">

  <label for="pao_baguete_italiana_limiar_integral_kg">Pão Baguete Italiana Limiar Integral (Placas):</label>
  <input type="number" id="pao_baguete_italiana_limiar_integral_kg" placeholder="0">

  <label for="pao_baguete_limiar_integral_kg">Pão Baguete Limiar Integral (Placas):</label>
  <input type="number" id="pao_baguete_limiar_integral_kg" placeholder="0">

  <label for="pao_baguete_limiar_parmesao_kg">Pão Baguete Limiar Parmesão (Placas):</label>
  <input type="number" id="pao_baguete_limiar_parmesao_kg" placeholder="0">

  <label for="pao_baguete_limiar_tradicional_kg">Pão Baguete Limiar Tradicional (Placas):</label>
  <input type="number" id="pao_baguete_limiar_tradicional_kg" placeholder="0">

  <h2>Pão Artesanal</h2>
  <label for="pao_artesanal_milho_kg">Pão Artesanal Milho (Placas):</label>
  <input type="number" id="pao_artesanal_milho_kg" placeholder="0">

  <label for="pao_artesanal_aveia_kg">Pão Artesanal Aveia (Placas):</label>
  <input type="number" id="pao_artesanal_aveia_kg" placeholder="0">

  <label for="pao_artesanal_batata_kg">Pão Artesanal Batata (Placas):</label>
  <input type="number" id="pao_artesanal_batata_kg" placeholder="0">

  <label for="pao_artesanal_coco_kg">Pão Artesanal Coco (Placas):</label>
  <input type="number" id="pao_artesanal_coco_kg" placeholder="0">

  <label for="pao_artesanal_linhaca_kg">Pão Artesanal Linhaça (Placas):</label>
  <input type="number" id="pao_artesanal_linhaca_kg" placeholder="0">

  <label for="pao_artesanal_passas_kg">Pão Artesanal Passas (Placas):</label>
  <input type="number" id="pao_artesanal_passas_kg" placeholder="0">

  <label for="pao_artesanal_linhaca_kg">Pão Artesanal Linhaça (Placas):</label>
  <input type="number" id="pao_artesanal_linhaca_kg" placeholder="0">

  <label for="pao_rustico_limiar_t_seco_azeitona_kg">Pão Rústico Limiar T. Seco Azeitona (Placas):</label>
  <input type="number" id="pao_rustico_limiar_t_seco_azeitona_kg" placeholder="0">

  <label for="pao_rustico_limiar_gotas_choc_kg">Pão Rústico Limiar Gotas Chocolate (Placas):</label>
  <input type="number" id="pao_rustico_limiar_gotas_choc_kg" placeholder="0">

  <label for="pao_rustico_limiar_linhaca_kg">Pão Rústico Limiar Linhaça (Placas):</label>
  <input type="number" id="pao_rustico_limiar_linhaca_kg" placeholder="0">

  <label for="pao_rustico_limiar_australiano_kg">Pão Rústico Limiar Australiano (Placas):</label>
  <input type="number" id="pao_rustico_limiar_australiano_kg" placeholder="0">

  <h2>Massa Doce</h2>
  <label for="pao_hamburguer_limiar_batata_kg">Pão Hambúrguer Limiar Batata (Placas):</label>
  <input type="number" id="pao_hamburguer_limiar_batata_kg" placeholder="0">

  <label for="pao_hamburguer_limiar_milho_kg">Pão Hambúrguer Limiar Milho (Placas):</label>
  <input type="number" id="pao_hamburguer_limiar_milho_kg" placeholder="0">

  <label for="pao_hamburguer_limiar_tradicional_kg">Pão Hambúrguer Limiar Tradicional (Placas):</label>
  <input type="number" id="pao_hamburguer_limiar_tradicional_kg" placeholder="0">

  <label for="pao_hot_dog_limiar_tradicional_kg">Pão Hot Dog Limiar Tradicional (Placas):</label>
  <input type="number" id="pao_hot_dog_limiar_tradicional_kg" placeholder="0">

  <label for="pao_recheado_goiaba_kg">Pão Recheado Goiaba (Placas):</label>
  <input type="number" id="pao_recheado_goiaba_kg" placeholder="0">

  <label for="pao_recheado_limiar_doce_lte_kg">Pão Recheado Limiar Doce LTE (Placas):</label>
  <input type="number" id="pao_recheado_limiar_doce_lte_kg" placeholder="0">

  <button onclick="registrarProducao()">Registrar Produção</button>

  <table id="tabelaProducao" style="display: none;">
    <thead>
      <tr>
        <th>Tipo de Pão</th>
        <th>Quantidade (Placas)</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <script>
    function registrarProducao() {
      const producao = {
        "Pão Francês Limiar": document.getElementById("pao_frances_limiar_kg").value || 0,
        "Pão Francês Limiar Integral": document.getElementById("pao_frances_limiar_integral_kg").value || 0,
        "Pão Baguete Italiana Limiar Multigrãos": document.getElementById("pao_baguete_italiana_limiar_multigraos_kg").value || 0,
        "Pão Baguete Italiana Limiar Tradicional": document.getElementById("pao_baguete_italiana_limiar_tradicional_kg").value || 0,
        "Pão Baguete Italiana Limiar Integral": document.getElementById("pao_baguete_italiana_limiar_integral_kg").value || 0,
        "Pão Baguete Limiar Integral": document.getElementById("pao_baguete_limiar_integral_kg").value || 0,
        "Pão Baguete Limiar Parmesão": document.getElementById("pao_baguete_limiar_parmesao_kg").value || 0,
        "Pão Baguete Limiar Tradicional": document.getElementById("pao_baguete_limiar_tradicional_kg").value || 0,
        "Pão Artesanal Milho": document.getElementById("pao_artesanal_milho_kg").value || 0,
        "Pão Artesanal Aveia": document.getElementById("pao_artesanal_aveia_kg").value || 0,
        "Pão Artesanal Batata": document.getElementById("pao_artesanal_batata_kg").value || 0,
        "Pão Artesanal Coco": document.getElementById("pao_artesanal_coco_kg").value || 0,
        "Pão Artesanal Linhaça": document.getElementById("pao_artesanal_linhaca_kg").value || 0,
        "Pão Artesanal Passas": document.getElementById("pao_artesanal_passas_kg").value || 0,
        "Pão Artesanal Linhaça": document.getElementById("pao_artesanal_linhaca_kg").value || 0,
        "Pão Rústico Limiar T. Seco Azeitona": document.getElementById("pao_rustico_limiar_t_seco_azeitona_kg").value || 0,
        "Pão Rústico Limiar Gotas Chocolate": document.getElementById("pao_rustico_limiar_gotas_choc_kg").value || 0,
        "Pão Rústico Limiar Linhaça": document.getElementById("pao_rustico_limiar_linhaca_kg").value || 0,
        "Pão Rústico Limiar Australiano": document.getElementById("pao_rustico_limiar_australiano_kg").value || 0,
        "Pão Hambúrguer Limiar Batata": document.getElementById("pao_hamburguer_limiar_batata_kg").value || 0,
        "Pão Hambúrguer Limiar Milho": document.getElementById("pao_hamburguer_limiar_milho_kg").value || 0,
        "Pão Hambúrguer Limiar Tradicional": document.getElementById("pao_hamburguer_limiar_tradicional_kg").value || 0,
        "Pão Hot Dog Limiar Tradicional": document.getElementById("pao_hot_dog_limiar_tradicional_kg").value || 0,
        "Pão Recheado Goiaba": document.getElementById("pao_recheado_goiaba_kg").value || 0,
        "Pão Recheado Limiar Doce LTE": document.getElementById("pao_recheado_limiar_doce_lte_kg").value || 0,
      };

      const tabelaProducao = document.getElementById("tabelaProducao");
      const tbody = tabelaProducao.getElementsByTagName("tbody")[0];

      tbody.innerHTML = "";

      for (const tipoPao in producao) {
        const quantidadeKg = producao[tipoPao];

        if (quantidadeKg > 0) {
          const row = tbody.insertRow();
          const tipoCell = row.insertCell();
          const quantidadeCell = row.insertCell();

          tipoCell.textContent = tipoPao;
          quantidadeCell.textContent = quantidadeKg;
        }
      }

      tabelaProducao.style.display = "block";
    }
  </script>
   <div class="footer">
    &copy; 2023 Prevenção. Todos os direitos reservados.
</div>

</body>
</html>