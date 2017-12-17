<!--
    * File: flush.php
    * Author: Jason McCoy
    * Date of last revision: Oct. 24, 2014
    * Description:  Clean and flush the output buffer
-->

<?php
    // Clean the output buffer
    ob_clean();
    //  Flush the output buffer
    ob_end_flush();
?>