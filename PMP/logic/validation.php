<?php session_start();
//$_SESSION['initial'] = 0;
//require 'conexion.php';
$errors = '';
$svr = 'Private';
$dbname = 'Private';
$username = 'Private';
$password = 'Private';



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $emp = filter_var($_POST['employeenum'], FILTER_SANITIZE_STRING);
    
    //echo "$emp";


    if (empty($emp)) {
        $errors .= '<li>Ingresa tu numero de empleado</li>';
    }else {
        
		//ConectarDB($dbconfig);

		try {
            $conn = new PDO("mysql:host=$svr;dbname=$dbname", $username, $password);
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
		//$st: se encarga de verificar si hay registros en la DB.
		//$conn->prepare: asignamos que $st es igual a la conexion y adicionalmente ejecutamos una consulta preparada.
        $st = $conn->prepare('SELECT * FROM tecnicos WHERE NumTecProd = :emp LIMIT 1');
        $st->execute(array(':emp' => $emp));
        $res = $st->fetch();


        if ($res == false) {
            $errors .= '<li>N. de empleado no registrado, contacta a Mtto Software📣.</li>';
        }else{
				//$_SESSION['initial'];
				//header('location : content.php');

				$_SESSION['initial'] = true;
				//header('location : content.php');

				$area = $conn->prepare('SELECT AREA FROM tecnicos WHERE NumTecProd = :emp LIMIT 1');
        		$area->execute(array(':emp' => $emp));
        		$res = $area->fetch();
				//print_r($res["AREA"]);

				switch ($res["AREA"]) {
					case 'Software':
						header('location : software-format.php');
						break;
					
					default:
					print_r($res["AREA"]); 
					echo " aun no esta disponible, contacta a mtto. software para mas informacion.";
						break;
				}

	

				
				
		}
    }
	//SELECT AREA FROM TimeReport2.tecnicos WHERE NumTecProd = "21030127"; <- Esta sentencia detecta el area al que pertenece el tecnico 

}

//try {
//	$conn = new PDO("mysql:host=$svr;dbname=$dbname", $username, $password);
	//echo "Connected to $dbname at $svr successfully 🤙";
	//id = placeholder, dato a tomar en cuenta en input
	//$st = $conn->prepare('SELECT * FROM tecnicos WHERE NumTecProd = :id');
	//$st->execute(
	//	array(':id' => 21030127)
	//);

	//$res = $st->fetch();

	//print_r($res);


//} catch (PDOException $pe) {
//	die("Could not connect to the database $dbname :" . $pe->getMessage());
//}


 ?>