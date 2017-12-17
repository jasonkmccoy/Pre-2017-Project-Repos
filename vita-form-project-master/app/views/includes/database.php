<?php
    try {
        $db_host = '  ';  //  hostname
        $db_name = '  ';  //  databasename
        $db_username = '  ';  //  username
        $user_password = '  ';  //  password

        $db = new PDO('mysql:host='.$db_host.'; dbname='.$db_name, $db_username, $user_password);  
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $db->exec("SET CHARACTER SET utf8");  //  return all sql requests as UTF-8  
    } catch (PDOException $err) {  
        echo "harmless error message if the connection fails";
        $err->getMessage() . "<br/>";
        file_put_contents('PDOErrors.txt',$err, FILE_APPEND);  // write some details to an error-log outside public_html  
        die();  //  terminate connection
        }
?>

