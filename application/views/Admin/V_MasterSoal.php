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
            <tr class="hidden">
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
                    <td class="text-center">
                        <button class="btn btn-default btn-xs" type="button" data-toggle="modal" data-target="#Jawaban" onclick="Jawaban(<?= $value->id_soal ?>)"><i class="glyphicon glyphicon-eye-open"></i></button>
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
<div class="modal fade" id="Jawaban" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Master Jawaban</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-uppercase">kode jawaban</label>
                            <p id="kd_jawaban"></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-uppercase">jawaban ds</label>
                            <p id="jawaban_ds"></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-uppercase">jawaban bds</label>
                            <p id="jawaban_bds"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function Jawaban(obj) {
        $.ajax({
            type: 'GET', dataType: 'JSON', url: "<?= base_url('Admin/MasterSoal/Jawaban/'); ?>" + obj,
            statusCode: {
                200: function (data) {
                    if (data['code'] === 'Error') {
                        alert(data['msg']);
                    } else {
                        document.getElementById('kd_jawaban').innerHTML = data[0][0]['kd_jawaban'];
                        document.getElementById('jawaban_ds').innerHTML = data[0][0]['jawaban_ds'];
                        document.getElementById('jawaban_bds').innerHTML = data[0][0]['jawaban_bds'];
                    }
                }
            },
            500: function () {
                alert('Error while load data !');
                location.reload();
            }
        });
    }
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