<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // definimos las variables dentro
    $jugador1 = $jugador2 = $jugador3 = $jugador4 = $correo1 = $correo2 = $correo3 = $correo4 = $partida1j1 = $partida2j1 = $partida3j1 = $partida1j2 = $partida2j2 = $partida3j2 = $partida1j3 = $partida2j3 = $partida3j3 = $partida1j4 = $partida2j4 = $partida3j4 = "";
    $jugador1Err = $jugador2Err = $jugador3Err = $jugador4Err = $correo1Err = $correo2Err = $correo3Err = $correo4Err = $partida1Errj1 = $partida2Errj1 = $partida3Errj1 = $partida1Errj2 = $partida2Errj2 = $partida3Errj2 = $partida1Errj3 = $partida2Errj3 = $partida3Errj3 = $partida1Errj4 = $partida2Errj4 = $partida3Errj4 = "";

    
    //Jugadores
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["jugador1"])) {
            $jugador1Err = "Se necesita un nombre";
        } else {
            $jugador1 = test_input($_POST["jugador1"]);
          // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$jugador1)) {
            $jugador1Err = "Solo se permite letras y espacios";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["jugador2"])) {
            $jugador2Err = "Se necesita un nombre";
        } else {
            $jugador2 = test_input($_POST["jugador2"]);
          // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$jugador2)) {
            $jugador2Err = "Solo se permite letras y espacios";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["jugador3"])) {
            $jugador3Err = "Se necesita un nombre";
        } else {
            $jugador3 = test_input($_POST["jugador3"]);
          // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$jugador3)) {
            $jugador3Err = "Solo se permite letras y espacios";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["jugador4"])) {
            $jugador4Err = "Se necesita un nombre";
        } else {
            $jugador4 = test_input($_POST["jugador4"]);
          // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$jugador4)) {
            $jugador4Err = "Solo se permite letras y espacios";
            }
        }
    }




    // Correos
    if (empty($_POST["correo1"])) {
        $correo1Err = "Email is required";
    } else {
        $correo1 = test_input($_POST["correo1"]);
        // check if e-mail address is well-formed
        if (!filter_var($correo1, FILTER_VALIDATE_EMAIL)) {
            $correo1Err = "Invalid email format";
        }
    }

    if (empty($_POST["correo2"])) {
        $correo2Err = "Email is required";
    } else {
        $correo2 = test_input($_POST["correo2"]);
        // check if e-mail address is well-formed
        if (!filter_var($correo2, FILTER_VALIDATE_EMAIL)) {
            $correo2Err = "Invalid email format";
        }
    }

    if (empty($_POST["correo3"])) {
        $correo3Err = "Email is required";
    } else {
        $correo3 = test_input($_POST["correo3"]);
        // check if e-mail address is well-formed
        if (!filter_var($correo3, FILTER_VALIDATE_EMAIL)) {
            $correo3Err = "Invalid email format";
        }
    }

    if (empty($_POST["correo4"])) {
        $correo4Err = "Email is required";
    } else {
        $correo4 = test_input($_POST["correo4"]);
        // check if e-mail address is well-formed
        if (!filter_var($correo4, FILTER_VALIDATE_EMAIL)) {
            $correo4Err = "Invalid email format";
        }
    }




    // Las partidas son numeros enteros
    if (empty($_POST["partida1j1"])) {
        $partida1Errj1 = "Se necesita un numero entero";
    } else {
        $partida1j1 = test_input($_POST["partida1j1"]);
        // Revisar si es entero
        if (!filter_var($partida1j1, FILTER_VALIDATE_INT)) {
            $partida1Errj1 = "Se necesita un numero entero";
        }
    }
    if (empty($_POST["partida2j1"])) {
        $partida2Errj1 = "Se necesita un numero entero";
    } else {
        $partida2j1 = test_input($_POST["partida2j1"]);
        // Revisar si es entero
        if (!filter_var($partida2j1, FILTER_VALIDATE_INT)) {
            $partida2Errj1 = "Se necesita un numero entero";
        }
    }
    if (empty($_POST["partida3j1"])) {
        $partida3Errj1 = "Se necesita un numero entero";
    } else {
        $partida3j1 = test_input($_POST["partida3j1"]);
        // Revisar si es entero
        if (!filter_var($partida3j1, FILTER_VALIDATE_INT)) {
            $partida3Errj1 = "Se necesita un numero entero";
        }
    }


    // Jugador2
    if (empty($_POST["partida1j2"])) {
        $partida1Errj2 = "Se necesita un numero entero";
    } else {
        $partida1j2 = test_input($_POST["partida1j2"]);
        // Revisar si es entero
        if (!filter_var($partida1j2, FILTER_VALIDATE_INT)) {
            $partida1Errj2 = "Se necesita un numero entero";
        }
    }
    if (empty($_POST["partida2j2"])) {
        $partida2Errj2 = "Se necesita un numero entero";
    } else {
        $partida2j2 = test_input($_POST["partida2j2"]);
        // Revisar si es entero
        if (!filter_var($partida2j2, FILTER_VALIDATE_INT)) {
            $partida2Errj2 = "Se necesita un numero entero";
        }
    }
    if (empty($_POST["partida3j2"])) {
        $partida3Errj2 = "Se necesita un numero entero";
    } else {
        $partida3j2 = test_input($_POST["partida3j2"]);
        // Revisar si es entero
        if (!filter_var($partida3j2, FILTER_VALIDATE_INT)) {
            $partida3Errj2 = "Se necesita un numero entero";
        }
    }

    //Jugador 3
    if (empty($_POST["partida1j3"])) {
        $partida1Errj3 = "Se necesita un numero entero";
    } else {
        $partida1j3 = test_input($_POST["partida1j3"]);
        // Revisar si es entero
        if (!filter_var($partida1j3, FILTER_VALIDATE_INT)) {
            $partida1Errj3 = "Se necesita un numero entero";
        }
    }
    if (empty($_POST["partida2j3"])) {
        $partida2Errj3 = "Se necesita un numero entero";
    } else {
        $partida2j3 = test_input($_POST["partida2j3"]);
        // Revisar si es entero
        if (!filter_var($partida2j3, FILTER_VALIDATE_INT)) {
            $partida2Errj3 = "Se necesita un numero entero";
        }
    }
    if (empty($_POST["partida3j3"])) {
        $partida3Errj3 = "Se necesita un numero entero";
    } else {
        $partida3j3 = test_input($_POST["partida3j3"]);
        // Revisar si es entero
        if (!filter_var($partida3j3, FILTER_VALIDATE_INT)) {
            $partida3Errj3 = "Se necesita un numero entero";
        }
    }

    //Jugador 4
    if (empty($_POST["partida1j4"])) {
        $partida1Errj4 = "Se necesita un numero entero";
    } else {
        $partida1j4 = test_input($_POST["partida1j4"]);
        // Revisar si es entero
        if (!filter_var($partida1j4, FILTER_VALIDATE_INT)) {
            $partida1Errj4 = "Se necesita un numero entero";
        }
    }
    if (empty($_POST["partida2j4"])) {
        $partida2Errj4 = "Se necesita un numero entero";
    } else {
        $partida2j4 = test_input($_POST["partida2j4"]);
        // Revisar si es entero
        if (!filter_var($partida2j4, FILTER_VALIDATE_INT)) {
            $partida2Errj4 = "Se necesita un numero entero";
        }
    }
    if (empty($_POST["partida3j4"])) {
        $partida3Errj4 = "Se necesita un numero entero";
    } else {
        $partida3j4 = test_input($_POST["partida3j4"]);
        // Revisar si es entero
        if (!filter_var($partida3j4, FILTER_VALIDATE_INT)) {
            $partida3Errj4 = "Se necesita un numero entero";
        }
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <header>
        <h1>Solo puede quedar uno</h1>
    </header>
    <p><span class="error">* Campos requeridos</span></p>
    <p><span class="error">Los numeros son enteros. Ejemplo: 3</span></p>
        <!-- Formulario -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p>Jugador1</p>
        Nombre: <input type="text" name="jugador1" value="<?php echo $jugador1;?>">
            <span class="error">* <?php echo $jugador1Err;?></span>
            <br></br>
        Email: <input type="text" name="correo1" value="<?php echo $correo1;?>">
            <span class="error">* <?php echo $correo1Err;?></span>
            <br></br>
        Partida 1: <input type="text" name="partida1j1" value="<?php echo $partida1j1;?>">
            <span class="error">* <?php echo $partida1Errj1;?></span>
            <br></br>
        Partida 2: <input type="text" name="partida2j1" value="<?php echo $partida2j1;?>">
            <span class="error">* <?php echo $partida2Errj1;?></span>
            <br></br>
        Partida 3: <input type="text" name="partida3j1" value="<?php echo $partida3j1;?>">
            <span class="error">* <?php echo $partida3Errj1;?></span>
            <br></br>

        
        <p>Jugador2</p>
        Nombre: <input type="text" name="jugador2" value="<?php echo $jugador2;?>">
            <span class="error">* <?php echo $jugador2Err;?></span>
            <br></br>
        Email: <input type="text" name="correo" value="<?php echo $correo2;?>">
            <span class="error">* <?php echo $correo2Err;?></span>
            <br></br>
        Partida 1: <input type="text" name="partida1j2" value="<?php echo $partida1j2;?>">
            <span class="error">* <?php echo $partida1Errj2;?></span>
            <br></br>
        Partida 2: <input type="text" name="partida2j2" value="<?php echo $partida2j2;?>">
            <span class="error">* <?php echo $partida2Errj2;?></span>
            <br></br>
        Partida 3: <input type="text" name="partida3j2" value="<?php echo $partida3j2;?>">
            <span class="error">* <?php echo $partida3Errj2;?></span>
            <br></br>

        <p>Jugador3</p>
        Nombre: <input type="text" name="jugador3" value="<?php echo $jugador3;?>">
            <span class="error">* <?php echo $jugador3Err;?></span>
            <br></br>
        Email: <input type="text" name="correo3" value="<?php echo $correo3;?>">
            <span class="error">* <?php echo $correo3Err;?></span>
            <br></br>
        Partida 1: <input type="text" name="partida1j3" value="<?php echo $partida1j3;?>">
            <span class="error">* <?php echo $partida1Errj3;?></span>
            <br></br>
        Partida 2: <input type="text" name="partida2j3" value="<?php echo $partida2j3;?>">
            <span class="error">* <?php echo $partida2Errj3;?></span>
            <br></br>
        Partida 3: <input type="text" name="partida3j3" value="<?php echo $partida3j3;?>">
            <span class="error">* <?php echo $partida3Errj3;?></span>
            <br></br>

        <p>Jugador4</p>
        Nombre: <input type="text" name="jugador4" value="<?php echo $jugador4;?>">
            <span class="error">* <?php echo $jugador4Err;?></span>
            <br></br>
        Email: <input type="text" name="correo4" value="<?php echo $correo4;?>">
            <span class="error">* <?php echo $correo4Err;?></span>
            <br></br>
        Partida 1: <input type="text" name="partida1j4" value="<?php echo $partida1j4;?>">
            <span class="error">* <?php echo $partida1Errj4;?></span>
            <br></br>
        Partida 2: <input type="text" name="partida2j4" value="<?php echo $partida2j4;?>">
            <span class="error">* <?php echo $partida2Errj4;?></span>
            <br></br>
        Partida 3: <input type="text" name="partida3j4" value="<?php echo $partida3j4;?>">
            <span class="error">* <?php echo $partida3Errj4;?></span>
            <br></br>

        <input type="submit" value="Enviar">
    </form>
    <?php   
    // La media     
    $array_partidas_total = array($partida1j1,$partida1j2,$partida1j3,$partida2j1,$partida2j2,$partida2j3,$partida3j1,$partida3j2,$partida3j3); 
    $suma_partidas_total = array_sum($array_partidas_total);
    $total_partidas = count($array_partidas_total);
    $media_partidas = $suma_partidas_total / $total_partidas;
    echo "La media de las partidas es: $media_partidas";

    // Clasificación 
    $p_jugador1 = array($partida1j1,$partida2j1,$partida3j1);
    $p_jugador2 = array($partida1j2,$partida2j2,$partida3j2);
    $p_jugador3 = array($partida1j3,$partida2j3,$partida3j3);
    $p_jugador4 = array($partida1j4,$partida2j4,$partida3j4);

    $clasificacion = array($jugador1 => array_sum($p_jugador1), $jugador2 => array_sum($p_jugador2), $jugador3 => array_sum($p_jugador3), $jugador4 => array_sum($p_jugador4));
    sort($clasificacion);
    foreach ($clasificacion as $clave => $valor) {
        echo "[" . $clave . "] = " . $valor . "\n";
    }
    ?>
</body>
</html>