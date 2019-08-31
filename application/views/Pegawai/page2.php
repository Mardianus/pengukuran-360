<div class="text-center">
    <div class="row col-md-6">
        <ul style="list-style: none">
            <li>Nama : <?= $uname ?></li>
            <li>
                 <select id="pegawai" name="pegawai" class="form-control" onChange="getDetail()">
                     <option value="<?= $uname ?>">Pilih Penilai</option>
                     <option value="<?= $uname ?>">Diri Sendiri</option>
                        <option value="Bodo">Atasan</option>
                        <option value="null">Rekanan</option>
                        <option value="Begeng">Bawahan</option>

                    </select>
            </li>
        </ul>
    </div>
    <div class="row col-md-6" >
        <ul style="list-style: none">
            <li></li>
            <li><p id="nikpeg"></p></li>
            <li> <a href="<?= base_url('admin/pkp/atasan') ?>" id="bodo" class="btn btn-sm-btn-success hidden">Lanjut</a>
                <a href="<?= base_url('admin/pkp/bawahan')?>" id="begeng" class="btn btn-sm-btn-success hidden">Lanjut</a>
                <a href="<?= base_url('admin/pkp/')  ?>" id="null" class="btn btn-sm-btn-success hidden">Lanjut</a>
            </li>
        </ul>

    </div>
    
</div>
<script>
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            $(".right_col").removeClass("hidden");
        }
        getDetail = () => {
            var data = pegawai.options[pegawai.selectedIndex].value;
            document.getElementById('nikpeg').innerHTML = data;
           if(data = "bodo"){
               $('#bodo').removeClass("hidden");
           }
        }
    };
    window.onload = function () {
        $('table').dataTable({});
    };
</script>