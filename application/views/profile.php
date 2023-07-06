<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <?php include "components/header.php"; ?>
    <?php linkCSS("assets/css/dataTables.bootstrap4.min.css"); ?>
</head>
<body>
    <?php include "components/nav.php"; ?>
    <!-- close navbar -->

    <div class="container">
    <div class="row">
    <div class="col-md-10">
    <?php include "components/messages.php"; ?>

    <?php include "components/datatable.php"; ?>

    </div>
    <!-- close col-md-5 -->  
    </div>
    <!-- close row -->
    </div>
    <!-- close container -->
    <?php include "components/footer.php"; ?>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>

    <?php linkJS("assets/js/jquery.dataTables.min.js");?>
    <?php linkJS("assets/js/dataTables.bootstrap4.min.js");?>

</body>
</html>