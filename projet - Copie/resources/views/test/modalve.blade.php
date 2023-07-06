
<div class="modal fade" id="deleteEmployeeModal{{ $coaches->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">client <p class="text-danger">{{ $coaches->id }}</p></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('reserver.setting') }}">
         @csrf
          <input type="hidden" value="{{ $coaches->id }}" name="id_coach">
          <input type="hidden" value="{{ $id }}" name="id_client">
          <div class="modal-body">
            <p>êtes vous sûr de vouloir reserver le coach <p class="text-warning">{{ $coaches->nom }}</p> à <p class="text-warning">{{ $client->nom }}</p>?</p>
            <p>pour {{ $coaches->prix }}000 ar/mois</p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="annuler">
            <input type="submit" class="btn btn-success" value="reserver">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
               