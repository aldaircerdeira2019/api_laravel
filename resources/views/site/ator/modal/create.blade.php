<div class="modal fade" id="CreateAtorModal" tabindex="-1" role="dialog" aria-labelledby="CreateAtorModalLabel" aria-hidden="true" data-backdrop="static">
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
                      <label for="name_ator" class="col-form-label">Nome:</label>
                      <input type="text"class="form-control" id="name_ator" required placeholder="minimo 10 caracter">
                    </div>
                    <div class="form-group">
                      <label for="data_nascimento" class="col-form-label">Data de Nascimento:</label>
                      <input type="date"class="form-control" id="data_nascimento" required>
                    </div>
                    <div class="form-group">
                      <label for="sexo" class="col-form-label">Genero:</label>
                      <select type="text"  class="form-control" id="sexo">
                            <option value='f'> Feminino</option>
                            <option value='m'> Masculino</option> 
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-form-label">Email:</label>
                      <input type="text"class="form-control" id="email" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id='enviar02' class="btn btn-primary btn-sm">cadastrar</button>
              </div>
        </div>
    </div>
</div>