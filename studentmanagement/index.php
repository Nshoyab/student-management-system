<?php
  session_start();
  session_destroy();

  include 'connect.php';

  $sql="select*from teacher";

  $result=mysqli_query($con,$sql);

 


?>

<?php

  include 'connect.php';
  $sqls="select*from cource";

  $res=mysqli_query($con,$sqls);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>student management system</title>
  </head>
  <body>

    <nav>
        <lable class="logo">w-school</lable>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#Cources">Cources</a></li>
            <li><a href="#Admission">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <lable class="img-test">we teach student with care</lable>
        <img class="main_image" src="school_management.jpg">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
               <img class="welcm-img" src="school2.jpg">
            </div>
            <div class="col-md-8">
                <h1>welcome to w-tech school</h1>
                <p>My school is my second home where I spend most of my time. Above all, it gives me a platform to do better in life and also builds my personality. I feel blessed to study in one of the most prestigious and esteemed schools in the city. In addition, my school has a lot of assets which makes me feel fortunate to be a part of it. Let us look at the essay on my school written below.My school is my second home where I spend most of my time. Above all, it gives me a platform to do better in life and also builds my personality. I feel blessed to study in one of the most prestigious and esteemed schools in the city. In addition, my school has a lot of assets which makes me feel fortunate to be a part of it. Let us look at the essay on my school written below.</p>
            </div>
        </div>

        <center>
            <h1>our teacher</h1>
        </center>

        <div class="container">
            <div class="row">

            <?php
               while ($fetch=mysqli_fetch_array($result)) {
                
              
            ?>
                <div class="col-md-4">
                    <img class="teacher" src="<?php echo $fetch['image']?>">
                    <h3><?php echo $fetch['name'] ?></h3>
                    <h5><?php echo $fetch['dicription'] ?>this is it</h5>
                </div>
                <?php
               }     

                ?>
            </div>
        </div>

    </div>

    <center>
        <h1 id="Cources">our Cources</h1>
    </center>
    <div class="container">
        <div class="row">
        <?php
               while ($fetchd=mysqli_fetch_array($res)) {
                
              
            ?>
                <div class="col-md-4">
                    <img class="teacher" src="<?php echo $fetchd['image']?>">
                    <h3><?php echo $fetchd['name'] ?></h3>
                </div>
                <?php
               }     

                ?>
        </div>
    </div>

</div>

<center>
    <h1 class="dfm" id="Admission">Admisson form</h1>
</center>

<div align="center" class="admission_form">
    <form action="" method="post">
        <div class="adm-i">
            <lable class="lable_forms">Name</lable>
            <input class="input_fields" type="text" name="Name">
        </div>
        <div class="adm-i">
            <lable class="lable_forms">Email</lable>
            <input class="input_fields" type="text" name="Email">
        </div>
        <div class="adm-i">
            <lable class="lable_forms">Phone</lable>
            <input class="input_fields" type="text" name="Phone">
        </div>
        <div class="adm-i">
            <lable class="lable_forms">Message</lable>
            <textarea class="input-textarea" name="Message" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input id="submit" class="btn btn-primary" type="submit" value="apply" name="apply">
        </div>
       
    </form>
</div>
<?php
  
  include 'connect.php';
    if (isset($_POST['apply'])) {
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];
        $Message=$_POST['Message'];

        $sql = "INSERT INTO admossion (Name,Email,Phone,Message) 
        VALUES('$Name','$Email','$Phone','$Message')";

        $result = mysqli_query($con,$sql);

        if ($result) {
            ?>
            <script>
                alert("your application sennt succesfully");
            </script>
            <?php
           
        }else{
            echo "data is not inserted";
        }
    }
?>

<footer>
    <h4 class="footer_text">All @copyright reserved by shoyab Nadaf</h4>
</footer>



   

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>

