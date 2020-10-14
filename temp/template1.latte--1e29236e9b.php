<?php
// source: template/template1.latte

use Latte\Runtime as LR;

class Template1e29236e9b extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukázka template</title>
</head>
<body>
   

    <h2>Výpis PHP proměnné </h2>
    <p><?php echo LR\Filters::escapeHtmlText($items2) /* line 12 */ ?></p>

    <h2>Výpis pole hodnot</h2>
<?php
		$iterations = 0;
		foreach ($items1 as $item) {
			?>        <p><?php echo LR\Filters::escapeHtmlText($item) /* line 16 */ ?></p>
<?php
			$iterations++;
		}
?>

    <h2>Výpis pole hodnot pomoc9 n:atribut;</h2>
<?php
		$iterations = 0;
		foreach ($items1 as $item) {
			?>    <p><?php echo LR\Filters::escapeHtmlText($item) /* line 20 */ ?></p>
<?php
			$iterations++;
		}
?>

    <h2>Použití podmínek - </h2>
<?php
		$iterations = 0;
		foreach ($items1 as $item) {
			if ($item=="two") {
				?>            <p style="color:red"><?php echo LR\Filters::escapeHtmlText($item) /* line 25 */ ?></p>
<?php
			}
			else {
				?>            <p><?php echo LR\Filters::escapeHtmlText($item) /* line 27 */ ?></p>
<?php
			}
			$iterations++;
		}
?>

    
    
</body>
</html>


<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 15, 20, 23');
		
	}

}
