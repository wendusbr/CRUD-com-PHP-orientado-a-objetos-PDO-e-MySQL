<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($vagas as $vaga){
    $resultados .= '<tr>
                      <td>'.$vaga->id.'</td>
                      <td>'.$vaga->titulo.'</td>
                      <td>'.$vaga->descricao.'</td>
                      <td>'.($vaga->ativo == 's' ? '<i class="fa-solid fa-circle-dot" style="color:green"></i> Ativo' : '<i class="fa-solid fa-circle-dot" style="color:red"></i> Inativo').'</td>
                      <td>'.date('d/m/Y à\s H:i:s',strtotime($vaga->data)).'</td>
                      <td>
                        <a href="editar.php?id='.$vaga->id.'">
                          <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Editar</button>
                        </a>
                      </td>
                      <td>
                        <a href="excluir.php?id='.$vaga->id.'">
                          <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma vaga encontrada
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success"><i class="fa-solid fa-plus"></i> Nova vaga</button>
    </a>
  </section>

  <section>

    <div class="table-responsive mt-3">
      <table class="table bg-light rounded">
          <thead>
            <tr>
              <th>#</th>
              <th>Título</th>
              <th>Descrição</th>
              <th>Status</th>
              <th>Data</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
              <?=$resultados?>
          </tbody>
      </table>
    </div>

  </section>


</main>