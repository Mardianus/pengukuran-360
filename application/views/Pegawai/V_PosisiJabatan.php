<div class="table-responsive">
    <button class="btn btn-success"> <i class="fa fa-plus"></i> Tambah Data</button>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th class="text-center text-uppercase">
                    kode<br>jabatan
                </th>
                <th class="text-center text-uppercase">
                    nama<br>jabatan
                </th>
                <th class="text-center text-uppercase">
                    divisi
                </th>
                <th class="text-center text-uppercase">
                    unit<br>kerja
                </th>
                <th class="text-center text-uppercase">
                    kode<br>matrik
                </th>
                <th class="text-center text-uppercase">
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($value as $item) {?>
                <tr>

                    <td class="text-center text-uppercase">
                        <?= $item->kode_jabatan ?>
                    </td>
                    <td class="text-center text-uppercase">
                        <?= $item->nama_jabatan ?>
                    </td>
                    <td class="text-center text-uppercase">
                        <?= $item->divisi ?>
                    </td>
                    <td class="text-center text-uppercase">
                        <?= $item->unit_kerja ?>
                    </td>
                    <td class="text-center text-uppercase">
                        <?= $item->kode_matrik ?>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="<?= base_url(''); ?>" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="<?= base_url(''); ?>" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                        </div>
                    </td>
                </tr>

            <?php }?>



        </tbody>
    </table>
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