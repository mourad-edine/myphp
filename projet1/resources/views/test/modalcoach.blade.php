

<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title">ajouter coach</h4>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Nom</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Numero</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>prix</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Adresse</label>
              <textarea class="form-control" required></textarea>
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
  <!-- Edit Modal HTML -->
  <div id="editEmployeeModal{{ $coachs->id }}" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title">modifier information</h4>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Nom</label>
              <input type="text" class="form-control" required value="{{ $coachs->nom }}">
            </div>
            <div class="form-group">
              <label>numero</label>
              <input type="text" class="form-control" required value="{{ $coachs->numero }}">
            </div>
            <div class="form-group">
              <label>prix</label>
              <input type="text" class="form-control" required value="{{ $coachs->prix }}000">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" required value="{{ $coachs->email }}">
            </div>
            <div class="form-group">
              <label>Adresse</label>
              <textarea class="form-control" required>{{ $coachs->adress }}</textarea>
            </div>
          </div>
          
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="annuler">
            <input type="submit" class="btn btn-info" value="enregistrer">
          </div>
        </form>
      </div>
    </div>
  </div>
  
<!-- modal delete -->


<div class="modal fade" id="deleteEmployeeModal{{ $coachs->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">coach <p class="text-danger">{{ $coachs->id }}</p></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
          <input type="hidden" value="{{ $coachs->id }}">
          <div class="modal-body">
            <p>êtes vous sûr de vouloir supprimer?</p>
            <p class="text-warning"><small>cette action est irreversible.</small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-danger" value="supprimer">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!------------------------------------------------------------------>

