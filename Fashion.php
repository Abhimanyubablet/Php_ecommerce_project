<?php
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM fashion");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Fashion.css">
    <script src="Some.js" ></script>
</head>
<body>
<section id="news">
        <div class="news-heading">
            <p>LATEST NEWS</p>
            <h2>Fashion New Trends</h2>
        </div>
        <div class="l-news container">
            <div class="row">
            <?php
             $i=0;
              while($row=mysqli_fetch_array($sql))
             {
             ?>
            <div class="l-news1 col-sm-12 col-md-6 col-lg-4 ">
                <div class="news1-img ">
                    <img src="<?php echo $row["Image"] ; ?>" alt="img">
                </div>
                <div class="news1-conte">
                    <div class="date-news1">
                        <p><i class='bx bxs-calendar'></i><?php echo $row["Calender"] ; ?></p>
                        <h4><?php echo $row["F_Text"] ; ?></h4>
                        <a href="" target="_blank">read more</a>
                    </div>
                </div>
            </div>
            <?php
          $i=0;
          }
           ?>
            </div>
        </div>
    </section>
</body>
</html>