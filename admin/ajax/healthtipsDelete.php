<?php if(session_id()==null || session_id()==""){session_start();}

require("../../config/config.php");
require("../includes/phpfunction.php");

if(isset($_POST['did']))
{

    if(healthtipsDelete($_POST['did']))
    { echo("Delete Successfully !!"); }
    else
    {echo "Unable to Delete Try Again !!";}


}
?>