<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
	<div class="row-fluid">
            <div class="span4">
                
                <div class="log">
                    <p class="t" style="margin-bottom: 40px;"> Entra con Facebook:</p>
                    <form action="sesion.php" method="POST">
                    	<table>
                    		<tr>
                    			<td><p style="width:100px;">Usuario</p></td>
                    			<td><input type="text" name="usuario" placeholder="Usuario"></td>
                    		</tr>
                    		<tr>
                    			<td><p style="width:100px;">Contraseña</p></td>
                    			<td><input type="password" name="pass" placeholder="Contraseña"></td>
                    		</tr>
                    		<tr>
                    			<td><p style="width:100px;"></p></td>
                    			<td><input type="submit" value="Entra a tu sorpresa"></td>
                    		</tr>
                    	</table>
                    </form>
                    
                </div>

            </div>
            <div class="span8">
            <div>
        </div>
</body>
</html>