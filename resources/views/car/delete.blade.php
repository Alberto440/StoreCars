<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $car->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form class="btnDelete" action="{{ route('car.ads.destroy', $car->id) }}" method="POST">
            @csrf
            @method('delete')          
       
        <div class="modal-content text-blue-400">
            <div class="modal-body text-center">
                <p>¿You want to delete this car?</p>
                <p>The car will be removed</p>
            </div>
            <div class="modal-footer text-center">
                <button type="submit"  class="btn btn-danger text-white bg-red-600 rounded p-1 mt-2 font-bold">DELETE</button>
            </div>
        </div>
    </form>
    </div>
</div>