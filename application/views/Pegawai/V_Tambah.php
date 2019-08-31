<form method="post" action="<?= base_url('Admin/Pegawai/Simpan'); ?>">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="text-uppercase">n i k <small class="text-danger">*</small></label>
                <input type="text" name="nik" class="form-control" autocomplete="off" required="">
            </div>
            <div class="form-group">
                <label class="text-uppercase">Nama <small class="text-danger">*</small></label>
                <input type="text" name="nama" class="form-control" autocomplete="off" required="">
            </div>
            <div class="form-group">
                <label class="text-uppercase">kelompok jabatan</label>
                <input type="text" name="kelompok" class="form-control" required="" autocomplete="off">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="text-uppercase">kode jabatan <small class="text-danger">*</small></label>
                <select class="form-control text-uppercase" name="kode_jabatan" required="">
                    <option value="" class="text-uppercase">pilih kode jabatan</option>
                    <?php foreach ($kode_jabatan as $kode_jabatan) { ?>
                        <option value="<?= $kode_jabatan->kode_jabatan ?>"><?= $kode_jabatan->kode_jabatan . $kode_jabatan->nama_jabatan ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label class="text-uppercase">divisi</label>
                <input type="text" name="divisi" class="form-control" required="" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="text-uppercase">nik atasan</label>
                <input type="text" name="nikatasan" class="form-control" required="" autocomplete="off">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="text-uppercase">unit kerja</label>
                <input type="text" name="unitkerja" class="form-control" required="" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="text-uppercase">level jabatan</label>
                <input type="text" name="lvljbtn" class="form-control" required="" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="text-uppercase">kode matrik</label>
                <input type="text" name="kdmatrik" class="form-control" required="" autocomplete="off">
            </div>
        </div>
    </div>
    <div class="form-group text-right">
        <div class="btn-group" role="group" aria-label="...">
            <input type="submit" name="simpan" class="btn btn-default btn-success" value="Save">
            <button type="reset" class="btn btn-default btn-danger">cancel</button>
        </div>
    </div>
</form>
<script>
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            $(".right_col").removeClass("hidden");
        }
    };
    window.onload = function () {
        $('table').dataTable({});
    };
</script>