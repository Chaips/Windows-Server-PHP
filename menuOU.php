<?php include("seguridad.php");?>
    <html>
        <script type="text/javascript">
        function sig(){
                window.location="OU_ADMIN_ADD.php";
        }
        function pag2() {
            window.location="OU_ADMIN_DEL.php";
        }
       
        </script>
    <head>
        <title>Bienvenido al sistema</title>
    </head>
    <body>
    <br><br>
    <center>
        
        Inicio como:  <?php echo $_SESSION["user"]; ?><br>
        <br>
            <table>
            <br><br>
            <tr>
                <td><input type="button" name="opc" id="opc" value="CREACION DE UNIDAD ORGANIZATIVA" onClick="sig()"/></td>
            </tr>
            <tr>
                <td><input type="button" name="opc1" id="opc1" value="ELIMINACION DE UNIDAD ORGANIZATIVA" onClick="pag2()"/></td>
            </tr>
            
            </table>
            </form>
        <a href="app.php">Principal</a>
    </center>
    </body>
    </html>