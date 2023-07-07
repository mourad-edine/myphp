

<div id="confirmation" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="{{ route('validation.setting') }}">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title">confirmation payement</h4>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <input type="hidden" value="{{$user->id}}" name="id">
                <input type="hidden" value="{{$prof->pivot->prof_id}}" name="id_prof">
              <label>Nombre de mois</label>
              <input type="number" max="12" min="1" name="nombre">
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="annuler">
            <input type="submit" class="btn btn-success" value="payer">
          </div>
        </form>
      </div>
    </div>
  </div>

