<div class="row">
    <div class="col-md-4 form-horizontal">
        <div class="form-group">
            <label class="text-uppercase col-sm-4">Nama Pegawai <small class="text-danger">*</small></label>
            <div class="col-sm-8">
                <select onChange="getDetail()" class="form-control text-uppercase" id="pegawai" name="pegawai" required="">
                    <option value="" class="text-uppercase">pilih Nama Pegawai</option>
                    <?php foreach ($value as $pegawai) { ?>
                        <option id="option" data="<?= $pegawai->nama_jabatan ?>" value="<?= $pegawai->nik ?>"><?= $pegawai->nama ?></option>
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

    </div>
    <div class="col-md-4">

    </div>
    <div class="table">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <th>No</th>
            <th>Kompetensi</th>
            <th>Standar</th>
            <th>Hasil</th>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Kerja Sama</td>
                <td>5</td>
                <td>3.5</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Dorongan</td>
                <td>5</td>
                <td>3.5</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Orientasi</td>
                <td>5</td>
                <td>3.5</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pemecahan Masalah</td>
                <td>5</td>
                <td>3.5</td>
            </tr>
            </tbody>
        </table>

    </div>
</div>
<div class="form-group">

</div>
<script>
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            $(".right_col").removeClass("hidden");
        }
        getDetail = () => {
            var data = pegawai.options[pegawai.selectedIndex].value;
            var jabatan = pegawai.options[pegawai.selectedIndex].getAttribute('data');
            document.getElementById('nikpeg').innerHTML = data;
            document.getElementById('jabatan').innerHTML = jabatan.toUpperCase()    ;
        }
    };
    window.onload = function () {
        $('table').dataTable({});
    };

</script>