<?php
// source: template/template.latte

use Latte\Runtime as LR;

class Template7c8766c619 extends Latte\Runtime\Template
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
    <form action="#" method="get">
        <input type="number" name="beer">
        <input type="submit" value="Spočti kalorie">
    </form>


    <h2>Počet kalorií: <?php echo LR\Filters::escapeHtmlText($items["prvni"]) /* line 15 */ ?></h2>
</body>
</html>


<?php
		return get_defined_vars();
	}

}
