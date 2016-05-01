<?php 
// https://packagist.org/packages/eventviva/php-image-resize
// https://github.com/eventviva/php-image-resize
//
//

require_once "vendor/autoload.php";
use \Eventviva\ImageResize;

$image = new ImageResize('./images/image.png');
$image->scale(50);
//$image->save('images/image_resize.png');

//echo 'save resized image'; 

date_default_timezone_set("Asia/Seoul");
$date = date("Y-m-d H:i:s");
$username = "jaejun";

$image_name = password_hash($date . $username, PASSWORD_BCRYPT);
//echo $image_name;

//$image->save('./images/' . $image_name . '.png');
//$image->save('./images/' . $image_name);

echo 'save resized image'; 
?>

<img src="./images/jaejun" alt="" /><br />
<img src="./images/jaejun.png" alt="" /><br />
<img src="./images/$2y$10$FJEJCnHlG3ysxi3rp.H0ZOefAUJ57l9lpShivQzIfPv2IrZzbUbi6" alt="" />

