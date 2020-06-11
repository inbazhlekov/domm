<?php
$link="https://www.sofascore.com/fr/sevilla-real-betis/qgbsIgb";

include_once('simple_html_dom.php');
// Create DOM from URL or file
$html = file_get_html($link);

foreach ($html->find('div.Header__Main-sc-1dyxed1-0.hkVBhG ul li') as $element){
	$links = $element->find('a');
            foreach ($links as $link) {
	 echo $link->plaintext.'<br/>';}}
?>

<input type="text" name="name" value="<?php echo $link->plaintext?>">
