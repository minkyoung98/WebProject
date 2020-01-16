<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM customer_reviews ORDER BY seq DESC ";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/bootstrap-4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome-free-5.1.0-web/css/all.css">
    <link rel="shortcut icon" href="logo.png">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="../index.css" rel="stylesheet">
    <link href="../index2.css" rel="stylesheet">
    <link href="../index3.css" rel="stylesheet">
    <title>그린가구</title>
    <style>
    table, td, th{
        font-size: 12px;
    }
    table #text:hover{
        color: gray;
        cursor: pointer; 
    }
    .main{
        margin: 2em auto;
    }

</style> 
</head>
<body>

<div class="frame" id="header">
    <?php include '../header.inc.php'; ?>
    <?php include '../nav.inc.php'; ?>
    <?php include 'editor.customer_reviews.inc.php'; ?>
    <div style="padding-top: 1000px;"></div>
    <?php include '../footer.inc.php'; ?>
</div>

<a href="#logo"><div class="floating"></div></a>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/bootstrap-4.1.1/js/bootstrap.min.js"></script>
<script src="../index.js"></script>
<script src="../index2.js"></script>
<script>
    $(document).ready(function() {
        $('#basicNav #navCommunity').addClass('clicked');
        $('#sideNav #dropCommunity').show();
        $('#sideNav #dropCommunity > a:nth-child(2)').css({
            'font-weight': 'bold',
            color: 'salmon'
        });
    });
    $('#sideNav #navCommunity').hover(function() {
        $('#sideNav #dropCommunity').show();        
    }, function() {
        $('#sideNav #dropCommunity').show();
    });
</script>
<script>
    
    $(document).on('click', '.table td', function(){
        var seq = $(this).parent().find(':eq(0)').text();
        //console.log(seq);
        $.get('text_form.customer_reviews.php',{
            seq: seq
        }).done(function(data){
            if($.trim(data)){
                //$('#pocket').html(data);
                location.href = 'text_form.customer_reviews.php?seq='+ seq; 
               // $('#exampleModal').modal('show');    
            }
        });
    }); 
    
    </script>  

</body>
</html>