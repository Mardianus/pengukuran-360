<div class="table-responsive">
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
            <tr>
                <td class="text-center text-uppercase">
                    <input type="text" name="kode_jabatan" class="form-control" autocomplete="off" required="" style="width:100%;">
                </td>
                <td class="text-center text-uppercase">

                </td>
                <td class="text-center text-uppercase">

                </td>
                <td class="text-center text-uppercase">

                </td>
                <td class="text-center text-uppercase">

                </td>
                <td class="text-center text-uppercase">

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="<?= base_url(''); ?>" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
                        <a href="<?= base_url(''); ?>" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </td>
            </tr>
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