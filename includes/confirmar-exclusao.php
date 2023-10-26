<main>

  <h2 class="mt-3">Excluir vaga</h2>

  <form method="post">

    <div class="form-group">
      <p>Você deseja realmente excluir a vaga <strong><?=$obVaga->titulo?></strong>?</p>
    </div>

    <div class="form-group">
      <a href="index.php">
        <button type="button" class="btn btn-light"><i class="fa-solid fa-right-from-bracket fa-rotate-180"></i> Voltar</button>
      </a>

      <button type="submit" name="excluir" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</button>
    </div>

  </form>

</main>