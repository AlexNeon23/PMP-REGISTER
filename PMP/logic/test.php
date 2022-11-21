<?php
	$svr = 'Private';
	$dbname = 'Private';
	$username = 'Private';
	$password = 'Private';

    
 
    try {
        $conn = new PDO("mysql:host=$svr;dbname=$dbname", $username, $password);
        echo "Connected to $dbname at $svr successfully 🤙";
        //id = placeholder, dato a tomar en cuenta en input
        $st = $conn->prepare('SELECT * FROM tecnicos WHERE NumTecProd = :id');
        $st->execute(
            array(':id' => 21030127)
        );

        $res = $st->fetch();

        print_r($res);

        //$res = $conn->query('SELECT * FROM tecnicos');
        //foreach($res as $f){
        //    echo $f ['NumTecProd'] . '<br/>';
        //}

    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

    
?>
