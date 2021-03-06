<!DOCTYPE html>
<html lang="ko">
<head>
  <title>Inwonweb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <li class="active"><a href="#">Video</a></li>
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
        <div class="col-xs-1 col-md-2">
        </div>
        <div class="col-xs-10 col-md-8">
            <br> 
            <div>       
                <ul class="nav nav-tabs">
                    <li class="leftspace">&nbsp</li>
                    <li class="active" role="presentation"><a href="#">DX9</a></li>
                    <li role="presentation"><a href="unity.html">Unity</a></li>
                    <li role="presentation"><a href="etc.html">Etc..</a></li>
                </ul>     
            </div>
            
            <div class="spaceblock">&nbsp</div>

            <div class = "row">
            
            <?php

                $pdo = new PDO("mysql:host=localhost;dbname=inwonweb", "inwon", "bitnami") or die("PDO creation failure");

                $stm = $pdo->prepare("SELECT * FROM board");
                $stm->execute() or die("execute failed");
                $result = $stm->fetchAll();

                foreach ($result as $row) {?>
                    <div class="col-xs-6 col-md-2">
                        <form action="play.php?id=<?php echo $row['id']; ?>" method="post">
                        <input type="image" src="http://cfile230.uf.daum.net/image/1645BF224BCA11571EBB01" class="img-responsive" style="width:100%" alt="Image">
                        <input type="hidden" name="id" value=<?php echo $row["id"];?>>
                        <p> <?php echo $row["title"]; ?></p>
                        </form>
                    </div>
             <?php   }  ?>
           
            

            </div>
        <div class="col-xs-1 col-md-2"></div>
        </div>
    </div>

    <div class="col-xs-1 col-md-2"></div>
        <div class="col-xs-10 col-md-8">
            <div class="spaceblock">&nbsp</div>
            <a class="pull-right btn btn-lg btn-primary" href="../../white.html" role="button">글쓰기</a>
       
        </div>
    <div class="col-xs-1 col-md-2">

        

    <footer>
    </footer>

</body>
</html>
