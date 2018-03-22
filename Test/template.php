<!DOCTYPE html>
<html>
<head>
<title>Game</title>
<style type="text/css">
    .box{
    		
    		height: 125px;
    		width: 500px;
    		   			 
    }
    #mc{

    		height: 500px;
    		width: 800px;
    		padding-left: 200px; 
    }
	.items{
	
		padding-top: 100px; 
		padding-left: 416px;
	
	}

	.item{
			padding: 5px;
			height:100px;
			 
	}


</style>
</head>
<body>

<div class="box" >
	<img  id="mc" src="img/1.png"  />
</div>
<div class="items">
	<img class="item" src="<?php echo $a; ?>" alt="item"  />
	<img class="item" src="<?php echo $b; ?>" alt="item"  />
	<img class="item" src="<?php echo $c; ?>" alt="item"  />
</div>
<div>
	<form action="">
    <input type="submit" name="play" value="Play"  />
</form>
</div>
<div>
	<h1><?php echo $ketQua; ?></h1>
</div>
</body>
</html>