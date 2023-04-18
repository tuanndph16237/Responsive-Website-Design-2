<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories Education</title>
    
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include './partials/connect.php';?>
<?php include './partials/header.php';?>

<?php
$id=$_GET['story_id'];
$sql="Select * from `stories` where topic_id=$id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
      
      $topic_name=$row['topic_name'];
      $topic_desc=$row['topic_desc'];
      $topic_image=$row['topic_image'];
      
    }

?>
<div class="container-fluid">
    <div class="jumbotron bg-warning rounded">
        <div class="container">
        <h1 class="display-4"><?php echo $topic_name ;?></h1>
  <p class="lead"><?php echo $topic_desc ;?></p>
<button class="btn btn-dark">    <a class="text-light" href="#reading" role="button">Continue Reading</a></button>
        </div>
</div>
    </div>

<div class="container-fluid slider">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    
<ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/img11.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/img10.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/img3.jpg" alt="Third slide">
                </div>
            </div>

</div>
</div>
<div class="container">
<div class="jumbotron jumbotron-fluid bg-warning rounded">
        <div class="container">
        <h1 class="display-4 text-center">Enjoy Reading</h1>
        <img src=<?php echo $topic_image ;?> class="img-fluid" alt="">
  <p class="lead pb-3">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rerum accusantium repellendus harum, sint illo dignissimos quam sed minima molestiae? Exercitationem numquam autem quidem illum dicta totam ad officiis explicabo.</p>
<button class="btn btn-dark">    <a class="text-light" href="#" role="button">Continue Reading</a></button>
        </div>
</div>
</div>

<div class="container-fluid mb-4">
    <h2 class="text-center display-4">Thank you for Reading</h2>
</div>
<?php include './partials/footer.php';?>

</body>
</html>