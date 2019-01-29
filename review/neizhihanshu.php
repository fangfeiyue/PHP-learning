<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

function echoRes(string $str="") {
  echo $str."<hr/>";
}

// strlen
echoRes(strlen("hello world")); // 11
echoRes(strlen("世界"));  // 6
echoRes(mb_strlen("世界")); // 2
echoRes(ucfirst("hello world")); //Hello world
echoRes(ucwords("hello world")); //Hello World
echoRes(str_replace("a", "b", "javascript")); // jbvbscript
echoRes(str_ireplace("a", "b", "jAvascript")); // jbvbscript
$str = "ZenD_CONTROLLER_Front";
echoRes(str_replace(" ", "_", ucwords(strtolower(str_replace("_", " ", $str))))); // Zend_Controller_Front
echoRes(htmlspecialchars("a<b,b<c,tom&jon,he said:\"i'm ok\""));
echoRes(ltrim("  hello world    "));
echoRes(rtrim("  hello world    "));
echoRes(trim("  hello world    "));
echoRes(strpos("hello world", "l"));
echoRes(stripos("Hello world", "h"));
echoRes(strrev("hello world"));
echoRes(md5("hello world"));
echoRes(str_shuffle("hello world"));
print_r(explode(" ", "hello world"));
echoRes(implode("_", ["hello", "world"]));
echoRes(sprintf("there are %d monkeys in the %s", 5, "tree"));
echoRes(sprintf("带有两位小数的结果是%1\$.2f<br/>,不带小数点的是%1\$d", 123));
echoRes(pow(2, 3));
echoRes(sqrt(9));
echoRes(max([34, 10, 3, 4,5]));
echoRes(min([1, 10, 3, 4,5]));
echoRes(rand());
echoRes(fmod(9.4, 2));
echoRes(number_format(1452353211));
echoRes(date("Y-m-d H:i:s", time()));
echoRes(date_default_timezone_get());
echoRes(md5(uniqid(microtime().mt_rand())));
print_r(getdate());
echo "<hr/>";
print_r(range(3, 20, 12));
echo "<hr/>";

$city = "BJ";
$state = "CA";
$event = "handleClose";
$arr = ["state", 'event'];
print_r(compact("city", "hello", $arr));
echoRes('city');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>hello</h1> 
</body>
  <script>
    const arr = [10, 10, 10, 10, 60];
    const world = "1111";
    let test = "<?php ehco?>";
    console.log(test);
    const sum = arr.reduce((sum, cur)=> sum += cur);
  </script>
</html>