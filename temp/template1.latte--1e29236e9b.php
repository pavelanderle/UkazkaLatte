<?php
// source: template/template1.latte

use Latte\Runtime as LR;

class Template1e29236e9b extends Latte\Runtime\Template
{
	public $blocks = [
		'sidebar' => 'blockSidebar',
	];

	public $blockTypes = [
		'sidebar' => 'html',
	];


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

    <h2>Výpis pole hodnot pomocí n:atribut;</h2>
<?php
		$iterations = 0;
		foreach ($items1 as $item) {
			?>    <p><?php echo LR\Filters::escapeHtmlText($item) /* line 20 */ ?></p>
<?php
			$iterations++;
		}
?>

    <h2>Použití podmínek - výpis hodnoty "two" barevně</h2>
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

    <h2>Podmínky</h2>
    <p>Úkol: Vypište dle hodnoty proměnné $ovoce alkoholický nápoj, který se z něj vyrábí (jablko,švestka,hruška)</p>
<?php
		if ($ovoce="jablko") {
?>
    <p>vypálíme kalvados</p>
<?php
		}
		elseif ($ovoce="švestky") {
?>
    <p>vypálíme slivovici</p>
<?php
		}
?>

    <h2>Ternární operátor</h2>
    <p>Úkol: Vypište dle hodnoty proměnné $rezervace větu Rezervováno nebo Volné k pronájmu</p>
    <p>dostupnost: <?php echo LR\Filters::escapeHtmlText($rezervace ? 'Rezervováno' : 'Dostupné k pronájmu') /* line 41 */ ?></p>

    <h2>Cyklus Foreach</h2>
    <p>Úkol: Vypište pole $objednávka jako HTML seznam</p>

    <h2>Cyklus For</h2>
    <p>Úkol: Vypište první tři položky pole $objednávka jako HTML seznam (formát výpisu - 1. položka 2.položka atd.)</p>
    
    <h2>Bloky</h2>
    <p>Úkol: Vytvořte blok HTML kódu a použijte na jiném místě šablony</p>
<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('sidebar', get_defined_vars());
?>

<?php
		$this->renderBlock('sidebar', get_defined_vars(), 'html');
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


	function blockSidebar($_args)
	{
?>	<h3>Menu</h3>
	<ul>
        <li>Položka 1</li>
        <li>Položka 2</li>
        <li>Položka 3</li>
    </ul>
<?php
	}

}
