<!-- ini bagian modal input-->
<div class="modal fade" id="modalJadwal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <form action="inputJadwal.php" method="post">
                <div class="form-group">
                    <label for="senin" class="font-weight-bold">Senin</label>
                    <input type="text" class="form-control" name="senin" id="senin" required="" placeholder="Masukan Nama Supervisor" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="selasa" class="font-weight-bold">Selasa</label>
                    <input type="text" class="form-control" name="selasa" id="selasa" required="" placeholder="Masukan Nama Supervisor" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="rabu" class="font-weight-bold">Rabu</label>
                    <input type="text" class="form-control" name="rabu" id="rabu" required="" placeholder="Masukan Nama Supervisor" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="kamis" class="font-weight-bold">Kamis</label>
                    <input type="text" class="form-control" name="kamis" id="kamis" required="" placeholder="Masukan Nama Supervisor" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="jumat" class="font-weight-bold">Jumat</label>
                    <input type="text" class="form-control" name="jumat" id="jumat" required="" placeholder="Masukan Nama Supervisor" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="sabtu" class="font-weight-bold">Sabtu</label>
                    <input type="text" class="form-control" name="sabtu" id="sabtu" required="" placeholder="Masukan Nama Supervisor" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="minggu" class="font-weight-bold">Minggu</label>
                    <input type="text" class="form-control" name="minggu" id="minggu" required="" placeholder="Masukan Nama Supervisor" autocomplete="off">
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