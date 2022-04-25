<html>
    <head>
        <title>Recibiendo datos con PHP</title>
    </head>
    <body>
        <h1><center>Enviando Datos A PHP</center></h1>
        <?php
            echo "Los valores que recibi son:<br>";
            echo "Para x = ".$_POST["num1"]."<br>";
            echo "Para y = ".$_POST["num2"]."<br>";
        ?>
        <h1><center>Procesamiento de datos</center></h1>
        <?php
        //suma
            $suma=$_POST["num1"] + $_POST["num2"];
            echo $_POST["num1"]. "+" . $_POST["num2"]. "=" .$suma. "<br>";
        //resta
            $resta=$_POST["num1"] - $_POST["num2"];
            echo $_POST["num1"]. "-" . $_POST["num2"]. "=" .$resta. "<br>";
        //multiplicacion
            $multiplicacion=$_POST["num1"] * $_POST["num2"];
            echo $_POST["num1"]. "*" . $_POST["num2"]. "=" .$multiplicacion. "<br>";
        //dividir
            $dividir=$_POST["num1"] / $_POST["num2"];
            echo $_POST["num1"]. "/" . $_POST["num2"]. "=" .$dividir. "<br>";
        //Potencia
            $potencia=$_POST["num1"] ** $_POST["num2"];
            echo $_POST["num1"]. "**" . $_POST["num2"]. "=" .$potencia. "<br>";
        ?>
    </body>
</html>