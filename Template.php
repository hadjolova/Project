<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="css/Stylesheet.css" />
    </head>
    <body>
    <?php echo "Welcome!<br><a href='logout.php'>Logout</a>"; ?>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Dog.php">Dog</a></li>                  
                    <li><a href="About.php">About</a></li>
                    <li><a href="Management.php">Management</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>M &copy S</p>
            </footer>
        </div>
    </body>
</html>
