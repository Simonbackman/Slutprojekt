                <?php    
                    $dbc = mysqli_connect("localhost","root","","thai");
                    $query = "SELECT * FROM reservation";
                    mysqli_query($dbc,"SET NAMES utf8");
                    $result = mysqli_query($dbc,$query);
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <div >
                        <table class="test">
                                <tr><td class="">Namn: <?php echo $row['name']; ?></td></tr>
                                <tr><td class="">Telefon: <?php echo $row['phone']; ?></td></tr>
                                <tr><td class="">Antal Personer: <?php echo $row['antal']; ?></td></tr>
                                <tr><td class="">Datum: <?php echo $row['date']; ?></td></tr>
                                <tr><td class="">Tid: <?php echo $row['time']; ?></td></tr>
                                <tr><td class="">Bords Nummer: <?php echo $row['bordnr']; ?></td></tr>
                        </table>                 
                    </div>
                <?php
                        }
                    ?> 