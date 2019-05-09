                <?php    
                    $dbc = mysqli_connect("localhost","root","","thai");
                    $query = "SELECT * FROM reservation";
                    mysqli_query($dbc,"SET NAMES utf8");
                    $result = mysqli_query($dbc,$query);
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <div >
                        <table class="info_reservation">
                                <tr class="admin_tr"><td class="admin_table">Namn: <?php echo $row['name']; ?></td></tr>
                                <tr class="admin_tr"><td class="admin_table">Telefon: <?php echo $row['phone']; ?></td></tr>
                                <tr class="admin_tr"><td class="admin_table">Antal Personer: <?php echo $row['antal']; ?></td></tr>
                                <tr class="admin_tr"><td class="admin_table">Datum: <?php echo $row['date']; ?></td></tr>
                                <tr class="admin_tr"><td class="admin_table">Tid: <?php echo $row['time']; ?></td></tr>
                                <tr class="admin_tr"><td class="admin_table">Bords Nummer: <?php echo $row['bordnr']; ?></td></tr>
                        </table>                 
                    </div>
                <?php
                        }
                    ?> 