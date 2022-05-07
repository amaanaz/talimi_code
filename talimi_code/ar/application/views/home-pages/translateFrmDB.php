<?php
// server name is localhost as we saw in the chapter 1- phpMyAdmin home page:
$servername = "localhost";
// username by default is root
$username = "root";
// password by default is an empty string
$password = "";
// database name
$dbname = "tryholpz_taleemi";

// Open connection with our database and put the connectionobject into variable $connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is established
if ($connection->connect_error) {
    /* if we have any error (database not found,wrong username/password ...) we stop the php script with a message error */
    die("Connection failed: " . $connection->connect_error);
}



function getLang()
{
    global $connection;

    $sql_command  = "SELECT lang FROM `translate`;";

    $data =  $connection->query($sql_command);

    if ($data->num_rows > 0) {
        $row = $data->fetch_assoc();
        // return $row['lang'];
        echo json_encode($row['lang']);
        // echo $lang;
        // return $lang;
    } else {
        echo json_encode("missing data");
    }
}

function updateToArb()
{
    global $connection;

    $sql_command  =  "UPDATE `translate` SET `lang`= 1 WHERE `lang` = 0;";
    $connection->query($sql_command);
}

function updateToEng()
{
    global $connection;

    $sql_command  =  "UPDATE `translate` SET `lang`= 0 WHERE `lang` = 1;";
    $connection->query($sql_command);
}

// $result;

// switch ($_POST['functionname']) {
//     case 'getLang':
//         $result = getLang();
//         break;
//     case 'updateToArb':
//         updateToArb();
//         break;
//     case 'updateToEng':
//         updateToEng();
//         break;
//     default:
//         $result = "error";
// }



$connection->close();
