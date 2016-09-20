<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th><i class="fa fa-key text-warning"></i> License Key</th>
                        <th>Username <i class="text-danger">!</i></th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    include "koneksi.php";
                $txtcari=@$_GET['txtcari'];
                if(isset($txtcari))
                {
                   $myquery="SELECT * FROM a_kwk ORDER BY id_a_kwk";
                }
                else
                {
                     $myquery="SELECT * FROM a_kwk ORDER BY id_a_kwk";
                }   
                $daftarsiswa=mysql_query($myquery) or die (mysql_error());
                while($dataku=mysql_fetch_object($daftarsiswa))
                {
            ?>
                      <tr>
                        <td><?php echo $dataku->nik?></td>
                        <td><?php echo $dataku->nama?></td>
                        <td><?php echo $dataku->tanggal_lahir?></td>
                      </tr>
					  <?php } ?>
                    </tbody>
                  </table>