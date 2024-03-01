<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

<?php 
$product = [
    ["description" => "nike shoes","quality"=> 15,"price"=> 205.75,],
    ["description" => "adida shoes","quality"=> 35,"price"=> 59.75,],
    ["description" => "topper shoes","quality"=> 75,"price"=> 25.50,],
    ["description" => "mizzuno wave shoes","quality"=> 10,"price"=> 350.75,]
];

//$product [0] = "açaí";
// $product [1] = "bacaba";
// $product [2] = "açaí branco";
// $product [3] = "camarão";

?>
<p><?php echo $product [0] ["description"]; ?></p>
<p><?php echo $product [0] ["quality"]; ?></p>
<p><?php echo $product [0] ["price"]; ?></p>
<hr>

<p><?php echo $product [1] ["description"]; ?></p>
<p><?php echo $product [1] ["quality"]; ?></p>
<p><?php echo $product [1] ["price"]; ?></p>
<hr>

</body>
</html>