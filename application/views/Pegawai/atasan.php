<div class="text-center">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th class="text-center text-uppercase">
                    Soal
                </th>

            </tr>
            </thead>
            <tbody>
                <tr>
                   <td> 1.Soal</td>
                </tr>
                <tr>
                    <td>
                        <ol type="a">
                            <li>Jawaban 1 <input type="checkbox"></li>
                            <li>Jawaban 2 <input type="checkbox"></li>
                            <li>Jawaban 3 <input type="checkbox"></li>
                            <li>Jawaban 4 <input type="checkbox"></li>
                        </ol></td>
                </tr>
                <tr>
                    <td> 2.Soal</td>
                </tr>
                <tr>
                    <td>
                        <ol type="a">
                            <li>Jawaban 1 <input type="checkbox"></li>
                            <li>Jawaban 2 <input type="checkbox"></li>
                            <li>Jawaban 3 <input type="checkbox"></li>
                            <li>Jawaban 4 <input type="checkbox"></li>
                        </ol></td>
                </tr>
                <tr>
                    <td> 3.Soal</td>
                </tr>
                <tr>
                    <td>
                        <ol type="a">
                            <li>Jawaban 1 <input type="checkbox"></li>
                            <li>Jawaban 2 <input type="checkbox"></li>
                            <li>Jawaban 3 <input type="checkbox"></li>
                            <li>Jawaban 4 <input type="checkbox"></li>
                        </ol></td>
                </tr>
            </tbody>
        </table>
        <a onclick="simpan()" class="btn btn-sm btn-success">
            Simpan
        </a>
    </div>
</div>
<script>
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            $(".right_col").removeClass("hidden");
        }
        simpan = () => {
            alert('Data Tersimpan');
            window.location.href = "../pkp";
        }
    };

</script>