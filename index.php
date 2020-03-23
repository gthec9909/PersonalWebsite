<?php
session_start();
if ($_SESSION['submitted']) {
    echo "<div class=\"alert alert-success\" role=\"alert\">Message submitted!</div>";
    $_SESSION['submitted'] = false;
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<div class="jumbotron text-center">
    <div class="container">
        <img src="logo.PNG">
    </div>
</div>


<div class="jumbotron text-center" >
    <div class="container">
        <form action="submitQuote.php" id="submissionForm" method="post">
            <!-- updateTime.php here -->
            <h2><label for="quote">What horrible thing was said?</label></h2>
            <br>
            <div class="form-group">
                <textarea id="quote" name="quote" class="form-control" required></textarea>
            </div>
            <h2><label for="person">Who said it?</label></h2>
            <br>
            <select id="person" name="person">
                <option value="Main Daddy">Main Daddy</option>
                <option value="The Mom">The Mom</option>
                <option value="Small Quick Spanking Hands">Small Quick Spanking Hands</option>
                <option value="Thicc Dirty Blonde">Thicc Dirty Blonde</option>
                <option value="Agatha Clitsie">Agatha Clitsie</option>
                <option value="Little Soup Boy">Little Soup Boy</option>
                <option value="Geordaddy">Geordaddy</option>
            </select>
            <br> <br>
            <button class="btn btn-primary">Submit Debauchery</button>
        </form>

    </div>
</div>
</body>

</html>
