<form action="<?= base_url('Admin/KamusKompetensi/Simpan/'); ?>" method="POST">
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
                    Nama<br>Kompetensi
                </th>
                <th class="text-center text-uppercase">
                    Level
                </th>
                <th class="text-center text-uppercase">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    
                </td>
            </tr>
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
        $('table').dataTable({});
    };
</script>
