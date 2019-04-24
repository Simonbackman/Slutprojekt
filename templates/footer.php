    <footer class="footer">
        <p>Copyright © 2019 Thai Tanic AB. Alla rättigheter reserverade. <br/>Org.nummer: 565432181-32159 </p> 

            <p>Enter password:</p> <input id='password' type='password'/>
            <a class="admin" href="admin.php" onclick="javascript:return validatePass()">Admin Panel</a>
        <script>
            function validatePass(){
            if(document.getElementById('password').value == 'admin'){
            return true;
            }else{
            alert('wrong password!!');
            return false;
            }
                }
        </script>
    </footer>