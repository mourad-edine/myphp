
  <!-- Edit Modal HTML -->
  <div id="editEmployeeModal{{ $posts->id }}" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="{{ route('modifclient.setting') }}">
        @csrf
          <div class="modal-header">
            <h5 class="modal-title">modifier information</h4>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Nom</label>
              <input type="text" class="form-control" required value="{{ $posts->nom }}" name="nom">
            </div>
            <div class="form-group">
              <label>Adresse</label>
              <textarea class="form-control" name="adresse" required>{{ $posts->adress }}</textarea>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="emails" required value="{{ $posts->email }}">
            </div>
            
          </div>
          <div class="modal-footer">
            <input type="hidden" class="btn btn-info" value="{{ $posts->id }}" name="id">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="annuler">
            <input type="submit" class="btn btn-info" value="enregistrer">
          </div>
        </form>
      </div>
    </div>
  </div>
  
<!-- modal delete -->


<div class="modal fade" id="deleteEmployeeModal{{ $posts->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">client <p class="text-danger">{{ $posts->id }}</p></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('effacerclient.setting')}}">
      @csrf
          <input type="hidden" value="{{ $posts->id }}" name="id">
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>