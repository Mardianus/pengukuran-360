<div class="">
    <label for="">Kelompok :</label>
    <input type="text" style="margin: 5" class="form-control" name="kelompok" placeholder="kelompok">
</div>
<div class="form-group text-right">
    <a href="<?= base_url('Admin/Pegawai/Tambah/'); ?>" class="btn btn-default btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah data karyawan"><i class="glyphicon glyphicon-plus"></i></a>
</div>

<table class="table table-bordered table-striped table-hover" style="width:100%;">
    <thead>
    <tr>
        <th class="text-center text-uppercase">
            kelompok
        </th>

        <th class="text-center text-uppercase">
            action
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($value as $value) { ?>
        <tr>

            <td>
                <?= $value->kelompok ?>
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
<div class="modal fade" id="Deletemodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?= base_url('Admin/Pegawai/Hapus/'); ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="nikdelete">
                    <p id="deletemsg"></p>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
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
