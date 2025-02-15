<?php
include_once("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST["salvar-registro"])) {
        // Pegando os dados do formulário
        $data_ = $_POST["data"];
        $hora = $_POST["hora"];
        $solicitante = $_POST["solicitante"];
        $setor = $_POST["setor"];
        $demanda = $_POST["demanda"];
        $assinatura = $_POST["assinatura"];
        $tecnico = $_POST["tecnico"];
        $chamado = $_POST["chamado"];

        // Protegendo contra SQL Injection
        $data_ = mysqli_real_escape_string($conexao, $data_);
        $hora = mysqli_real_escape_string($conexao, $hora);
        $solicitante = mysqli_real_escape_string($conexao, $solicitante);
        $setor = mysqli_real_escape_string($conexao, $setor);
        $demanda = mysqli_real_escape_string($conexao, $demanda);
        $assinatura = mysqli_real_escape_string($conexao, $assinatura);
        $tecnico = mysqli_real_escape_string($conexao, $tecnico);
        $chamado = mysqli_real_escape_string($conexao, $chamado);

        // Construindo a query SQL corretamente
        $sql = "INSERT INTO registro (data_, hora, solicitante, setor, demanda_tecnica, assinatura_solicitante, tecnico_el_remoto, chamado_helpdesk) 
                VALUES ('$data_', '$hora', '$solicitante', '$setor', '$demanda', '$assinatura', '$tecnico', '$chamado')";
         
         $respostas = mysqli_query($conexao, $sql);
        // Executando a query
        if ($respostas) {
            // Se a inserção for bem-sucedida, redireciona para o formulário
            header("Location: formulario.php");
            exit;
        } else {
            // Caso contrário, mostra uma mensagem de erro
            die("Erro ao tentar adicionar os dados no banco de dados: " . mysqli_error($conexao));
        }
    }
}
?>

