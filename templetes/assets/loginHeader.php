<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?php echo $title;?></title>
<link href="<?php echo ROOT_URL;?>/css/mainStyles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id='loginWrapper'>
        <div id='headerLoginMain'>
            <div id='headerLoginTop'>
            	<div id='headerLoginTopRight'>
                	<?php
						if ($page == "user")
							echo "<a href='" . ROOT_URL . "/managers' class='mainButton' title='for managers'>for managers</a>";
						else
							echo "<a href='" . ROOT_URL . "' class='mainButton' title='for reservations'>for reservations</a>";
					?>                	
                </div>
            </div>
            <div id='headerLoginBottom'>
            <img src='<?php echo ROOT_URL;?>/img/logo.png' alt='UPSCALE™' />
            </div>
        </div>     