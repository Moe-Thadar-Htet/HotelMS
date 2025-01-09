<?php require_once("../layout/header2.php") ?>
<?php include_once("../layout/navbar2.php") ?>

<div class="content">
    <?php
        if(isset($_GET['available'])){
            require_once("../available.php");
        }  else if(isset($_GET['soldout'])) {
            require_once("../sold_out.php");
        } else if(isset($_GET['booked'])){
            require_once("../booked.php");
        } else if(isset($_GET['home'])){
            require_once("../admin/index.php");
        }else{
            require_once("../all_room.php");
        }
     ?>
</div>
<?php require_once("../layout/footer2.php") ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
    <script>
        // $("#openBookModal").click();
        document.querySelector("#openBookModal").click();
    </script>
    <?php 
}
?>