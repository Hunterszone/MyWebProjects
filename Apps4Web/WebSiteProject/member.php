<?php
		
		include_once 'connection.php';
		$username = htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
		        
        if(mysqli_num_rows($result)> 0){
			//while ($row = mysqli_fetch_assoc($result)){
				$row = mysqli_fetch_assoc($result);
				$mem_id= $row['mem_id'];
                $sqlimg = "SELECT * FROM users WHERE mem_id='$mem_id'";
                $resultimg=mysqli_query($conn,$sqlimg);
				$rowimg = mysqli_fetch_assoc($resultimg);
                //while($rowimg = mysqli_fetch_assoc($resultimg)){
                    echo "<div class=container>";
                        if($mem_id == $row['mem_id']){
                            echo "<img src= './gallery/profile".$mem_id.".jpg'>";
                        }else{

                            echo "<img src='./gallery/pd.jpg'>";
                        }
                        echo "<p>".$row['username']."</p>";
                    echo "</div>";
                //}
            //}
        }

        if(isset($_SESSION['mem_id'])){
            if ($_SESSION['mem_id'] == 1){
                echo "You are logged in as user #1";
            }
            echo "<form action='./upload.php' method='POST'enctype='mutlipart/form-data'>
            <input type='file' name='file'>
            <button type='submit' name='upload_submit'>Upload</button></form>";
        }
			
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyProfile</title>
    <style>
        .container{
            margin:20px;
            padding:10px;
            background:#ccc;
           
        }
        .container img{
            width:50px;
            height:50px
        }
        .container p{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size:20px;
            position:inherit;
            float:right;
            
        }
    </style>
</head>
<body>
</body>
</html>