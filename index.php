<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .left, .right {
            min-height: 1000px;
        }

        .tweet {
            min-height: 1000px;
            background-color: rgba(124, 255, 0, 0.17);
        }
    </style>
</head>
<body>

<?php
session_start();
?>

<div class="container tweet">
    <div class="row">
        <div class="col-md-2 left"></div>
        <div class="col-md-8">
            <h1>Twitter. Search tweet.</h1>
            <form role="form" class="form-inline" method="post" action="tweet_backend.php">
                <div class="form-group">
                    <label for="email">Request: </label>
                    <input type="text" name="request" class="form-control" id="request" placeholder="type request">
                </div>
                <button type="submit" class="btn btn-success">GO</button>
            </form>

            <div class="tweets">
                <?php
                echo "<h3>Last request</h3>";
                foreach ($_SESSION['tweets_global']->statuses as $value) {
                    if(isset($value->entities->media[0]->media_url)){
                        $img_url = $value->entities->media[0]->media_url;
                        $mediaUrls[] = $img_url;

                    } else {
                        $img_url = "";
                    }
                    $text = $value->text;
                    $img = "$img_url";
                    echo "<p>$text<p>";
                    echo "<img alt='may image not' src='$img' width='200px;'>";
                }
                ?>
            </div>

        </div>
        <div class="col-md-2 right"></div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>




