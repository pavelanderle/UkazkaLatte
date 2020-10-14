<?php
// source: template/bmiTemplate.latte

use Latte\Runtime as LR;

class Templatee31d257f3d extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Add Article</title>
</head>
<body>
    <div class="container">
        <h1>BMI</h1>
        <form action="#" method="GET">
            <div class="form-group">
                <label for="width">Width</label>
                <input type="text" class="form-control" placeholder="Enter Your Width" name="width" id="width">
            </div>

            <div class="form-group">
                <label for="height">Height</label>
                <input type="text" class="form-control" placeholder="Enter Your Height" name="height" id="height">
            </div>

            <button type="submit" class="btn btn-primary">BMI</button>
        </form>
        <h2> Youre BMI: <?php echo LR\Filters::escapeHtmlText($bmi) /* line 33 */ ?> </h2>
<?php
		if ($bmi==0) {
?>
            <p>Zadejte váhu a výšku</p>
<?php
		}
		elseif ($bmi<21) {
?>
            <p> Podviživený </p>
<?php
		}
		elseif ($bmi<26) {
?>
            <p> Normální váha </p>
<?php
		}
		else {
?>
            <p> Nadváha </p>
<?php
		}
?>
    </div>
</body>
</html>

<?php
		return get_defined_vars();
	}

}
