 <?php
    session_start();
    include_once("conexao.php");

    ?>



 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="./css/styles.css">
 </head>

 <body>
     <div class="container">
         <header>

             <h1>Registro de Chamados</h1>
         </header>

         <table>
             <thead>
                 <tr>
                     <th>Data</th>
                     <th>Hora</th>
                     <th>Solicitante</th>
                     <th>Setor</th>
                     <th>Demanda Técnica</th>
                     <th>Assinatura Solicitante</th>
                     <th>Técnico El Remoto</th>
                     <th>Chamado Helpdesk</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                    $sql = "SELECT * FROM registro";
                    $respostas = mysqli_query($conexao, $sql);

                    if (!$respostas || mysqli_num_rows($respostas) == 0) {
                        $_SESSION['msg'] =  "NENHUMA INFORMAÇAO CADASTRADA NO BANCO DE DADOS";
                    } else {
                        foreach ($respostas as $resposta) {
                    ?>
                         <!-- Os dados do banco serão inseridos aqui -->
                         <tr>
                             <td><?= $resposta["data_"] ?></td>
                             <td><?= $resposta["hora"] ?></td>
                             <td><?= $resposta["solicitante"] ?></td>
                             <td><?= $resposta["setor"] ?></td>
                             <td><?= $resposta["demanda_tecnica"] ?></td>
                             <td><?= $resposta["assinatura_solicitante"] ?></td>
                             <td><?= $resposta["tecnico_el_remoto"] ?></td>
                             <td><?= $resposta["chamado_helpdesk"] ?></td>
                         </tr>
                 <?php }
                    } ?>

             </tbody>

         </table>
         <?php
            if (isset($_SESSION['msg'])) {
                echo "<h3> {$_SESSION['msg']}</h3>";
                // Após exibir, pode limpar a variável de sessão para não mostrar novamente
                unset($_SESSION['msg']);
            }
            ?>
     </div>
 </body>

 </html>