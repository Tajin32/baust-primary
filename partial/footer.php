<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../fontawsome/css/font-awesome.min.css">
</head>
<style>
    .info-list li {
        position: relative;
        display: block;
        font-size: 15px;
        padding: 0px 0px 0px 25px;
        margin-bottom: 15px;
    }

    .info-list li i {
        position: absolute;
        left: 0px;
        top: 6px;
        color: white;
    }
</style>

<body>
    <footer class="bg-dark mt-5 p-3 text-light">
        <div style="display: flex;justify-content: space-between;">
            <div>
                <?php
                $sql = "SELECT * FROM teacher_main WHERE `designation`='Head' OR `designation`='Head Teacher'";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                    $sn = $row['sn'];
                ?>
                    <h4>School Head Teacher</h4>
                    <ul class="info-list">
                        <h5 class="mt-2"><?php echo $row['name']; ?></h5>
                        <h6>Email</h6>
                        <p class="text-muted"><?php echo $row['email']; ?></p>
                        <h6>Phone</h6>
                        <p class="text-muted"><?php echo $row['phone']; ?></p>
                    </ul>
                <?php
                }
                ?>
            </div>
            <div>
                <h4>Contact Us</h4>
                <ul class="info-list">
                    <li><i class="fa fa-home" style="color: white;"></i>Canterment,Saidpur</li>
                    <li><i class="fa fa-phone" style="color: white;"></i>+88043453452454</li>
                    <li><i class="fa fa-fax" style="color: white;"></i><a style="color: white;">Fax: 0300-0040</a></li>
                    <li><i class="fa fa-envelope" style="color: white;"></i><a href="http://www.dpe.gov.bd/">Department of Primary Education</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            © 2024 Copyright: Team COBRA
        </div>
    </footer>
</body>

</html>
