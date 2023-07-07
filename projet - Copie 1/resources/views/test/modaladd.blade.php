

<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="{{ route('ajouterclient.setting') }}">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title">ajouter client</h4>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Nom</label>
              <input type="text" class="form-control" required name="nom">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" required name="emails">
            </div>
            <div class="form-group">
              <label>Adresse</label>
              <textarea class="form-control" required name="adresse"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="annuler">
            <input type="submit" class="btn btn-success" value="ajouter">
          </div>
        </form>
      </div>
    </div>
  </div>



  

<div id="addEmployeeModl" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="{{ route('ajoutercoach.setting') }}">
        @csrf
          <div class="modal-header">
            <h5 class="modal-title">ajouter coach</h4>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Nom</label>
              <input type="text" class="form-control" required name="nom">
            </div>
            <div class="form-group">
              <label>Numero</label>
              <input type="text" class="form-control" required name="numero">
            </div>
            <div class="form-group">
              <label>prix</label>
              <input type="text" class="form-control" required name="prix">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" required name="emails">
            </div>
            <div class="form-group">
              <label>Adresse</label>
              <textarea class="form-control" required name="adresse"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="annuler">
            <input type="submit" class="btn btn-success" value="ajouter">
          </div>
        </form>
      </div>
    </div>
  </div>