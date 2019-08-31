<div class="text-center">
   <h1 class="text-center">Pengukuran Kompetensi Pegawai</h1>
    <p>Anda akan menjalankan pengukuran kompetensi pegawai</p>
    <a href="<?= base_url('admin/pkp/page2') ?>" class="btn btn-success">Lanjut</a>
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