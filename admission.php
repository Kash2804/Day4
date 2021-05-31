<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Kishan Group Tuition</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include'./theme/menu.php';
include'./theme/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="logo.jpg" width="400" height="200" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">ADMISSION FORM </a></h2>
				
				
				<div class="entry">
                                    <form method="POST" action="admissionform.php">
                                        <table>
          <tr>
             <td>FirstName</td>
             <td><input type="text" name="txt1" required/></td>
          </tr>
          <tr>
            <td>LastName</td>
            <td><input type="text" name="txt2" required/></td>
          </tr>
          <tr>
            <td>Email Address</td>
            <td><input type="email" name="txt3"  required/></td>
          </tr>
          <tr>
            <td>Age</td>
            <td><input type="number" name="txt4" min="1" max="100" required/></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><input type="radio"  name="txt5"  required />Male</td>

            <td><input type="radio"  name="txt5"  required/>Female</td>
          </tr>
          <tr>
            <td><input type="submit"/></td>
            <td><input type="reset"/></td>
          </tr>
       </table>
                                        
                                    </form>
				</div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		
</div>
</body>
</html>