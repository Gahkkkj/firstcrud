teste
<section>
    <a href='index'>
        <button class="btn btn-success">voltar</button>
    </a>

    <h2 class="mt-3">cadastrar vaga</h2>
    <form method="post" class="form-send">
        <div class="form-gruop">
            <label>Titulo</label>
            <input type="text" require class="form-control" name="titulo">
            <div class="form-gruop">
                <label>descrição</label>
                <textarea class="form-control" require name="descricao" rows="S"></textarea>
                <div class="form-group">
                    <label>status</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <label>
                                <input type="radio" require name="status" value="s">ativo
                            </label>
                            <label class="ml-3">
                                <input type="radio" require name="status" value="n">inativo</label>
                        </div>
                    </div>
        <div class= "form-group">
        <button type="submit" class="btn btn-successe">enviar</button>
    </a>
</form>
</section>