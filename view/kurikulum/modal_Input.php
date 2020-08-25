<!-- ini bagian modal input-->
<div class="modal fade" id="modalInput" aria-labelledby="modalInputLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <form action="input.php" method="post">
                <div class="form-group">
                    <label for="nama" class="font-weight-bold">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Ketik Nama" required="" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="nip" class="font-weight-bold">NIP</label>
                    <input type="text" class="form-control" name="nip" id="nip" placeholder="Ketik NIP" required="" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="alamat" class="font-weight-bold">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="4" placeholder="Tambahkan Alamat" required=""></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>