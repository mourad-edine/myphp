<div class="modal fade" id="exampleModal{{$posts->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="{{ route('edit.verif') }}" method="POST">
        <h2 class="text-success m-4">modifier votre post</h2>
        <div class="mt-5">
         @csrf
             <input type="hidden" class="form-control" name="ids" value="{{ $posts->id }}">
             <input type="text" class="form-control " name="nouveauquestion" value="{{ $posts->question }}">
             <input type="text" class="form-control " name="nouveaureponse" value="{{ $posts->reponse }}">
            <button type="submit" class="btn btn-primary m-4">modifier</button>
        </div>

       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>