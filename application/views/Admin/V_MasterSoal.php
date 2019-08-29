<form action="<?= base_url('Admin/MasterSoal/Simpan/'); ?>" method="POST">
    <table class="table table-bordered table-hover table-striped" style="width:100%;">
        <thead>
            <tr>
                <th class="text-center text-uppercase">
                    no.
                </th>
                <th class="text-center text-uppercase">
                    kode<br>kompetensi
                </th>
                <th class="text-center text-uppercase">
                    kode<br>matrik<br>jabatan
                </th>
                <th class="text-center text-uppercase">
                    diri<br>sendiri
                </th>
                <th class="text-center text-uppercase">
                    bukan<br>diri<br>sendiri
                </th>
                <th class="text-center text-uppercase">
                    Jawab
                </th>
                <th class="text-center text-uppercase">
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">
                    
                    <input type="text" name="id" class="form-control" value="<?= count($value) + 1; ?>"readonly="">
                </td>
                <td class="text-center">
                    <select name="kompetensi" class="form-control text-uppercase" required="" style="width:100%;">
                        <option value="">pilih kode kompetensi</option>
                        <?php foreach ($kompetensi as $kompetensi) { ?>
                            <option value="<?= $kompetensi->kode_kompetensi ?>"><?= $kompetensi->nama_kompetensi ?></option>
                        <?php } ?>
                    </select>
                </td>
                <td class="text-center">
                    <select name="kdmatrik" class="form-control text-uppercase" required="" style="width:100%;">
                        <option value="">pilih kode matrik jabatan</option>
                        <?php foreach ($Mtjabatan as $Mtjabatan) { ?>
                            <option value="<?= $Mtjabatan->kode_matrik ?>"><?= $Mtjabatan->kode_matrik ?></option>
                        <?php } ?>
                    </select>
                </td>
                <td class="text-center">
                    <textarea class="form-control" name="ds" required="" style="width:100%;"></textarea>
                </td>
                <td class="text-center">
                    <textarea class="form-control" name="bds" required="" style="width:100%;"></textarea>
                </td>
                <td>
                    
                </td>
                <td class="text-center">
                    <button type="submit" class="btn btn-default btn-xs btn-success"><i class="glyphicon glyphicon-save"></i></button>
                </td>
            </tr>
            <?php foreach ($value as $value) { ?>
                <tr>
                    <td>
                        <?php
                        static $norut = 1;
                        echo $norut++;
                        ?>
                    </td>
                    <td>
                        <?= $value->kode_kompetensi ?>
                    </td>
                    <td>
                        <?= $value->kode_matrik_jabatan ?>
                    </td>
                    <td>
                        <?= substr($value->soal_ds, 0, 25) ?> ...
                    </td>
                    <td>
                        <?= substr($value->soal_bds, 0, 25) ?> ...
                    </td>
                    <td>
                        <div class="btn-group">
                            
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</form>
<script>
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            $(".right_col").removeClass("hidden");
        }
    };
    window.onload = function () {
        $('table').dataTable({
            
        });
    };
</script>