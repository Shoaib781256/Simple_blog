<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header session -->
    <header class="p-4 bg-dark text-center ">
        <h1><a href="index.php" class="text-light text-decoration-none">Simple Blog</a></h1>
    </header>
    <div class="post-list mt-5">
        <div class="container">
            <?php
                $id = $_GET['id']; // Here i am changing something
                if($id){
                    include("connect.php");
                    $sqlSelect = "SELECT * FROM posts WHERE id = $id";
                    $result = mysqli_query($conn, $sqlSelect);
                    while($data = mysqli_fetch_array($result)){
                    ?>
                        <div class="post bg-light p-4 mt-5">
                            <h1><?php echo $data['title'];?></h1>
                            <p><?php echo $data['date'];?></p>
                            <p><?php echo $data['content'];?></p>
                        </div>
                    <?php
                    }
                }else{
                    echo "No post found";
                }
            ?>
        </div>
    </div>
    <!-- Footer session -->
    <div class="footer bg-dark p-4 mt-4">
        <a href="admin/index.php" class="text-light">Admin Panel</a>
    </div>
</body>
</html>