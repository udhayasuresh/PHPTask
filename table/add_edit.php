<?php 
    session_start();
    require("../config.php");
    if(isset($_POST['form_data'])) :
        $firstname = $db->real_escape_string($_POST['firstname']);
        $lastname = $db->real_escape_string($_POST['lastname']);
        $address = $db->real_escape_string($_POST['address']);
        
		
        $p_id = ($_POST['p_id']!="") ? $_POST['p_id'] : '';
        if($p_id!="") :
        	$query = " UPDATE task SET firstname= '$firstname',
             lastname='$lastname',address='$address'
			 WHERE p_id=$p_id";
        	$msg = "Successfully Updated Your Record";
        else: 
        	$query = " INSERT INTO task SET firstname= '$firstname',
             lastname='$lastname',address='$address'
			 ";
        	$msg = "Successfully Inserted Your Record"; 
		
        endif;
        $sql = $db->query($query);
        $_SESSION['flash_msg'] = $msg;
        header("Location:table.php");
    endif;
    
    if(isset($_POST['ct_id'])) :
        $p_id = ($_POST['ct_id']!="") ? $_POST['ct_id'] : '';
        if($p_id!="") :
            $query = "DELETE FROM task WHERE p_id =$p_id";
            $sql = $db->query($query);
            echo 1;
        else :
            echo 0;
        endif;
    else :
        echo 0;
    endif;
?>

