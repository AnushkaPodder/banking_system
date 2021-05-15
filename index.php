<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Softora | Home</title>
    <style type="text/css">
        button{
            position: relative;
    display: inline-block;
    padding: 12px 36px;
    margin: 10px 0;
    color: #000000;
    text-decoration: underline;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: bolder;
    letter-spacing: 2px;
    border: #000000;
    border-style: solid;
    border-radius: 8px;
    border-width: 5px;
    box-shadow: 5px 10px;
    background-color: #7176b8;
    background-image: linear-gradient(315deg, #ffff 20%, #8e2525 74%);
        }
        body{
            background-image: url("img/bkgrnd.jpg");
            background-repeat: no-repeat;
            background-size: 1550px 900px;
        }
       
        
    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1">
            <div >
                <div >
                   <center> <h1 style="color: black; text-shadow: 5px 3px 5px #36454f; font-weight: bolder; font-size: 60px;">SOFTORA BANK</h1></center>
                   

                   
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
                <img src="img/user.png" class="img-fluid">
                <br><br>
                <a href="transfermoney.php"><button>View all Users</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/money_transfer1.png" class="img-fluid">
                <br><br>
                <a href="transfermoney.php"><button>Transfer Money</button></a>
            </div>
            <div class="col-md act">
                <img src="img/history.png" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button >View Transfer History</button></a>
            </div>
        </div>
    </div>
    

    
    
    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Anushka Podder</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
