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
                    Terakhir<br>Login
                </th>
                <th class="text-center text-uppercase">
                    Status<br>Login
                </th>
            </tr>
        </thead>
        <tbody>
            
             <?php $i = 1;foreach ($value as $value) { ?>
        <tr>
            <td class="text-center">
                <?= $i ?>
            </td>        
            <td class="text-center">
                <?= $value->id_emp ?>
            </td>
           
            <td class="text-center">
                <?= $value->last_login ?>
            </td>
            <td class="text-center">
                <?php  ($this->session->userdata('id') == $value->id ? print "<i class='text-success glyphicon glyphicon-ok-circle' title='online'></i>" :  "<i class='text-danger glyphicon glyphicon-ok-circle' title='online'></i>");  ?>
            </td>
        </tr>
    <?php $i++;} ?>
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