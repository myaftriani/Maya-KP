<div class="modal-dialog">
    <div class="model-content">
        <div class="modal-header">
            <h5 class="modal-title font-bold" id="exampleModalLabel_{{ $data->id }} ">HAPUS JADWAL MENGAJAR</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-tabel="Close"></button>
        </div>
        <form action="{{ route(name: 'jadwal.destroy', parameters: $data->id) }}" method="POST" style="display: inline;">
            @csrf 
            @method('DELETE')
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data {{ $data->nama_guru}}?
            </div>
            <div class="modal-footer">
                <x-secondary-button tag="a" data-bs-dismiss="modal">Batal</x-secondary-button>
                <x-primary-button value="true">Delete</x-primary-button>
            </div>
        </form>
    </div>
</div>