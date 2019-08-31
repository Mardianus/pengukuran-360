<div class="row">
    <div class="col-md-4 form-horizontal">
        <div class="form-group">
            <label class="text-uppercase col-sm-4">Nama Pegawai <small class="text-danger">*</small></label>
            <div class="col-sm-8">
                <select class="form-control text-uppercase" name="pegawai" required="">
                    <option value="" class="text-uppercase">pilih Nama Pegawai</option>
                    <?php foreach ($value as $pegawai) { ?>
                        <option data-ID="<?= $pegawai->nik ?>" value="<?= $pegawai->nik ?>"><?= $pegawai->nama ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label class="text-uppercase col-sm-4">nik</label>
            <div class="col-sm-8">
                <p id="nikpeg">89798779</p>
            </div>
        </div>
        <div class="form-group">
            <label class="text-uppercase col-sm-4">jabatan</label>
            <div class="col-sm-8">
                <p id="jabatan">dirut</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
    <div class="table">
        <table>
            <thead>
                <th>Nama Kompetensi</th>
                <th>Standar</th>
            <th>HAsil</th>
            </thead>
        </table>
    </div>
    </div>
    <div class="col-md-4">

    </div>
</div>
<div class="form-group">

</div>
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