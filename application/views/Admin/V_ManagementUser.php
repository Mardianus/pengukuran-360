<table class="table table-bordered table-hover table-striped" style="width:100%;">
        <thead>
            <tr>
                <th class="text-center text-uppercase">
                    no.
                </th>
                <th class="text-center text-uppercase">
                    Nama
                </th>
                <th class="text-center text-uppercase">
                    Pegawai
                </th>
                <th class="text-center text-uppercase">
                    Terakhir<br>Login
                </th>
                <th class="text-center text-uppercase">
                    Status<br>Login
                </th>
            </tr>
        </thead>
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