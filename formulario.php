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
        <form>
            <label for="data">Data</label>
            <input type="date" id="data" required>
            
            <label for="hora">Hora</label>
            <input type="time" id="hora" required>
            
            <label for="solicitante">Solicitante</label>
            <input type="text" id="solicitante" placeholder="Nome do solicitante" required>
            
            <label for="setor">Setor</label>
            <input type="text" id="setor" placeholder="Setor responsável" required>
            
            <label for="demanda">Demanda Técnica</label>
            <input type="text" id="demanda" placeholder="Descrição da demanda" required>
            
            <label for="assinatura">Assinatura Solicitante</label>
            <input type="text" id="assinatura" placeholder="Assinatura" required>
            
            <label for="tecnico">Técnico El Remoto</label>
            <input type="text" id="tecnico" placeholder="Nome do técnico" required>
            
            <label for="chamado">Chamado Helpdesk</label>
            <input type="text" id="chamado" placeholder="Número do chamado" required>
            
            <button type="submit">Salvar Chamado</button>
        </form>
    </div>
</body>
</html>
