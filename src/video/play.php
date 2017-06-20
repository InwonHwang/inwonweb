<!DOCTYPE html>
<html lang="ko">
<head>
  <title>Inwonweb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-Frame-Options" content="sameorigin" />
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/custom.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
  </style>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class = "col-xs-0 col-md-2">
        </div>

        <div class = "col-xs-12 col-md-8">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">InwonHwang</a>
                </div>  

                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="../../index.html">Home</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li class="active"><a href="dx9.php">Video</a></li>
                    <li><a href="../game.html">Game</a></li>
                </ul>
                </div>
            </div>
        </div>

        <div class = "col-xs-0 col-md-2">
        </div>
    </nav>
    
    
    <div class="container-fluid">   
        <div class="spaceblock"></div>
        <div class="spaceblock"></div>
        <div class="col-xs-1 col-md-2">
        </div>
        <div class="col-xs-10 col-md-8">
            <?php
                $id = $_POST["id"];;
                $pdo = new PDO("mysql:host=localhost;dbname=inwonweb", "inwon", "bitnami") or die("PDO creation failure");

                $stm = $pdo->prepare("SELECT * FROM board WHERE id=:id");
                $stm->execute([ ":id" => $id]) or die("execute failed");
                $result = $stm->fetchAll();

                foreach ($result as $row) {?>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=6ySoUF-9Ofk&list=RDQM3N61Ix9b8yc&index=22"></iframe>
                        <iframe width="420" height="315" src=<?php echo $row["url"]; ?> frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="spaceblock">&nbsp</div>
                    <div class="embed-responsive embed-responsive-4by3">
                        <p><?php echo $row["content"]; ?></p>
                        <p><?php echo $row["url"]; ?></p>
                    </div>
             <?php   }  ?>
            
           
        </div>
        <div class="col-xs-1 col-md-2">
        </div>
    </div>

    <footer>
    </footer>

</body>
</html>
