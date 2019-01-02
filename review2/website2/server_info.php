 <?php

function echoRes($str){
  echo $str, "<br/>";
}

# 创建服务器数组信息
$server = [
  "Http_Host"       => $_SERVER["HTTP_HOST"],
  "Sever Addr"      => $_SERVER["SERVER_ADDR"],
  "Script_Name"     => $_SERVER["SCRIPT_NAME"],
  "Current Page"    => $_SERVER["PHP_SELF"],
  "Document Root"   => $_SERVER["DOCUMENT_ROOT"],
  "Absolute Path"   => $_SERVER["SCRIPT_FILENAME"],
  "Host Sever Name" => $_SERVER["SERVER_NAME"],
  "Server Software" => $_SERVER["SERVER_SOFTWARE"],
];

// # 当前请求头中 Host
// echoRes($server["Http_Host"]);
// # 包含当前脚本的路径
// echoRes($server["Script_Name"]);
// # 当前运行脚本所在的文档根目录
// echoRes($server["Document Root"]);
// # 当前运行脚本所在的服务器的主机名
// echoRes($server["Host Sever Name"]);
// # 服务器标识字符串，在响应请求时的头信息中给出
// echoRes($server["Server Software"]);
// # 和script_name拿到的内容一样
// echoRes($server["Current Page"]);

# 创建客户端数组信息

$client = [
  # 浏览当前页面的用户的 IP 地址
  "Client IP" => $_SERVER["REMOTE_ADDR"],
  # 用户机器上连接到 Web 服务器所使用的端口号
  "Remote Port" => $_SERVER["REMOTE_PORT"],
  # 当前请求头中 User-Agent: 项的内容
  "Client System Info" => $_SERVER["HTTP_USER_AGENT"],

];

// echoRes($client["Remote Port"]);
// echoRes($client["Client IP"]);
// echoRes($client["Client System Info"]);