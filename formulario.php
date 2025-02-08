<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Chamados</title>
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Solicitaçao de Acesso Remoto</h2>
        <form action="./acoes.php"  method="POST">
            <label for="data">Data</label>
            <input type="date" id="data" name="data" required>
            
            <label for="hora">Hora</label>
            <input type="time" id="hora" required name="hora">
            
            <label for="solicitante">Solicitante</label>
            <input type="text" id="solicitante" placeholder="Nome do solicitante" name="solicitante" required>
            
            <label for="setor">Setor</label>
            <input type="text" id="setor" placeholder="Setor responsável" name="setor" required>
            
            <label for="demanda">Demanda Técnica</label>
            <input type="text" id="demanda" placeholder="Descrição da demanda" name="demanda" required>
            
            <label for="assinatura">Assinatura Solicitante</label>
            <input type="text" id="assinatura" placeholder="Assinatura" name="assinatura" required>
            
            <label for="tecnico">Técnico El Remoto</label>
            <input type="text" id="tecnico" placeholder="Nome do técnico" name="tecnico">
            
            <label for="chamado">Chamado Helpdesk</label>
            <input type="text" id="chamado" placeholder="Número do chamado" name="chamado" required>
            
            <button type="submit" name="salvar-registro">Salvar Registro</button>
        </form>
    </div>
</body>
</html>


