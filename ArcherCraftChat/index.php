<?php
    session_start();

    if (!isset($_SESSION['userid'])):
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>ArcherCraft VM Chat</title>
    
    <link rel="stylesheet" type="text/css" href="main.css" />
    
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2" type="text/javascript"></script>
   
</head>

<body>

    <div id="page-wrap">
    
    	<div id="header">
        	<h1><a href="/ArcherCraftChat/">ArcherCraftVM Chat</a></h1>
        </div>
        
    	<div id="section">
        	<form method="post" action="jumpin.php">
            	<label>Desired Username:</label>
                <div>
                	<input type="text" id="userid" name="userid" />
                    <input type="submit" value="Check" id="jumpin" />
            	</div>
            </form>
        </div>
        
        <div id="status">
        	<?php if (isset($_GET['error'])): ?>
        		<!-- Display error when returning with error URL param? -->
        	<?php endif;?>
        </div>
        
    </div>
    
</body>

</html>

<?php
    else:
        require_once("chatrooms.php");
    endif;
?>