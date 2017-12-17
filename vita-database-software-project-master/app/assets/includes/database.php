<?php
    $user = 'database-username';
    $pass = 'database-password';
    try {
        $db = new PDO('mysql:host=localhost;dbname=database-name', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
    } catch (Exception $e) {
        echo "Failed: " . $e->getMessage();
        $db->rollBack();
    }
?> 