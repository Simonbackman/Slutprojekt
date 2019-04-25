                <?php    
                    $dbc = mysqli_connect("localhost","root","","thai");
                    $query = "SELECT * FROM recension";
                    mysqli_query($dbc,"SET NAMES utf8");
                    $result = mysqli_query($dbc,$query);
                    while($row = mysqli_fetch_array($result)){
                    ?>
                        <div class="recensioner_container">
                            <table class="recension">
                                <tr><td class="rec_name">Name:<?php echo $row['name']; ?></td></tr>
                                <tr><td class="rec_mail">Mail:<?php echo $row['mail']; ?></td>
                                <tr><td class="rec_recension"><?php echo $row['recension']; ?></td></tr>
                            </table>                 
                        </div>
                <?php
                        }
                    ?> 