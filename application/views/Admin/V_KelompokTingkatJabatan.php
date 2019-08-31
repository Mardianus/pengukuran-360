<div class="">
    <label for="">Kelompok Tingkat Jabatan :</label>
    <input type="text" style="margin: 5" class="form-control" name="kelompok" placeholder="kelompok">
</div>
<div class="form-group text-right">
    <a href="<?= base_url('Admin/Pegawai/Tambah/'); ?>" class="btn btn-default btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data Kelompok"><i class="glyphicon glyphicon-plus"></i></a>
</div>
<table>
    <table class="table table-bordered table-striped table-hover" style="width:100%;">
    <thead>
    <tr>
        <th class="text-center text-uppercase">
            kelompok<br>Jabatan
        </th>

        <th class="text-center text-uppercase">
            Level
        </th>
        <th class="text-center text-uppercase">
            action
        </th>
    </tr>
    </thead>
    <tbody>
       <?php foreach ($value as $value) { ?>
        <tr>

            <td class="text-center">
                <?= $value->kelompok ?>
            </td>
            <td class="text-center">
                <?= $value->level ?>
            </td>
            <td class="text-center">
                <div class="btn-group">
                    <a href="<?= base_url('Admin/Pegawai/Detail/' . $value->id . ''); ?>" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="bottom" title="Detail data karyawan"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?= base_url(); ?>" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit data karyawan"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a class="btn btn-default btn-xs btn-danger" onclick="Delete('<?= $value->id ?>', '<?= $value->kelompok ?>')" data-toggle="tooltip" data-placement="bottom" title="Delete data karyawan"><i class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#Deletemodal"></i></a>
                </div>
            </td>
        </tr>
    <?php } ?>
    </tbody>
    
</table>
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