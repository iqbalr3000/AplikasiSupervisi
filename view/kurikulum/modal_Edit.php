<!-- ini bagian modal edit-->
<div class="modal fade" id="modalEdit<?php echo $data['id']; ?>" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="edit.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    
                    <div class="form-group">
                        <label for="nama" class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Ketik Nama" required="" autocomplete="off" value="<?php echo $data['nama'] ?>" >
                    </div>
                    <div class="form-group">
                        <label for="nip" class="font-weight-bold">NIP</label>
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="Ketik NIP" required="" autocomplete="off"value="<?php echo $data['nip'] ?>" >
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="font-weight-bold">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="4" placeholder="Tambahkan Alamat" required=""><?php echo $data['alamat'] ?></textarea>
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
</div>