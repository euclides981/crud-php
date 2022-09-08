<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success mt-2">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?= TITLE ?></h2>

    <form method="post">

        <div class="form-group">
            <label for="">Título</label>
            <input type="text" class="form-control" name="titulo" value="<?= $obVaga->titulo ?>">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <textarea class="form-control" name="descricao" rows="10"><?= $obVaga->descricao ?></textarea>
        </div>

        <label>Status</label>

        <div class="form-group">

            <div>

                <div class="form-check form-check-inline m-0 p-0">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked>Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline m-0 p-0">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n" <?= $obVaga->ativo == 'n' ? 'checked' : '' ?>>Inativo
                    </label>
                </div>

            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="mt-3 btn btn-success">Enviar</button>
        </div>

    </form>
</main>