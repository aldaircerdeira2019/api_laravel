<div class="modal fade" id="CreateModal" tabindex="-1" role="dialog" aria-labelledby="CreateModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-ms">
        <div class="modal-content">
            <div class="modal-header"> 
                <div id='btn'></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                      <label for="categoria_id" class="col-form-label">Id da categoria:</label>
                      <input type="text"class="form-control" id="categoria_id" required placeholder="ID integer">
                    </div>
                    <div class="form-group">
                      <label for="diretor_id" class="col-form-label">Id diretor:</label>
                      <input type="text"class="form-control" id="diretor_id" placeholder="ID integer">
                    </div>
                    <div class="form-group">
                      <label for="name_filme" class="col-form-label">Titulo do Filme:</label>
                      <input type="text"class="form-control" id="name_filme" required>
                    </div>
                    <div class="form-group">
                      <label for="data_estreia" class="col-form-label">Data da estreia:</label>
                      <input type="date"class="form-control" id="data_estreia" required>
                    </div>

                    <div class="form-group">
                      <label for="descricao" class="col-form-label">Message:</label>
                      <textarea class="form-control" id="descricao" placeholder=" min 100 max 600 caracter"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id='enviar' class="btn btn-primary btn-sm">cadastrar</button>
              </div>
        </div>
    </div>
</div>