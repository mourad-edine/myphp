<div class="modal fade" id="leModal" tabindex="-1" aria-labelledby="leModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="leModalLabel">devinette</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="{{ route('ajout.verif') }}" method="POST">
        <h2 class="text-success m-4">ajouter votre post</h2>
        <div class="mt-5">
         @csrf
             <input type="hidden" class="form-control">
             <input type="text" class="form-control " name="questions" placeholder="votre question?">
             <input type="text" class="form-control mt-4" name="reponses" placeholder="votre reponse">
            <button type="submit" class="btn btn-primary m-4">ajouter</button>
        </div>

       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>