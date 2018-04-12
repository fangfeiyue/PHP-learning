<?php
//如果提示跨域 就可以在config 里设置 header头 允许全部跨域
header("Access-Control-Allow-Origin:*");

require_once './func.php';

/**
 * 获取应用在24小时内的实时访客信息
 *
 * @param string $app_id 应用的appid
 * @param int $page 页码
 * @return 请求结果
 */
function getUserRealtime($app_id, $page){
    $sign = getSign(compact('app_id', 'page'));
    $url = "http://mta.qq.com/h5/api/ctr_user_realtime?app_id=${app_id}&page=${page}&sign=".$sign;

    return sendRequest($url);
}

// echo getUserRealtime('500602952', '1');

/**
 * 按天查询自定义事件的pv\uv\vv\iv。
 *
 * @param int $app_id 应用ID
 * @param string $custom 自定义事件id
 * @param string $start_date 开始时间
 * @param string $end_date 结束时间
 * @param string $idx 指标列表
 * @return 请求结果
 */
function getCustomEventData($app_id, $custom, $start_date, $end_date, $idx){
    $sign = getSign(compact('app_id', 'page'));
    $url = "http://mta.qq.com/h5/api/ctr_user_realtime?app_id=${app_id}&custom=${custom}&start_date=${start_date}&end_date=${end_date}&idx=${idx}&sign=".$sign;

    return sendRequest($url);
}

/**
 * 按天查询渠道的分析数据
 *
 * @param int $app_id 应用ID
 * @param string $start_date 开始时间
 * @param string $end_date 结束时间
 * @param string $adtags 渠道id
 * @param string $idx 指标列表
 * @return 请求结果
 */
function getAdtagData($app_id, $start_date, $end_date, $adtags, $idx){
    $sign = getSign(compact('app_id', 'start_date', 'end_date', 'adtags', 'idx'));
    $url = "http://mta.qq.com/h5/api/ctr_adtag?app_id=${app_id}&start_date=${start_date}&end_date=${end_date}&adtags=".$adtags."&idx=${idx}&sign=".$sign;
    
    return sendRequest($url);
}

echo getAdtagData('500602952', '2018-04-10', '2018-04-12', urlencode('wx.test'), 'pv');


function getCoreData($app_id, $start_date, $end_date, $idx){
    $sign = getSign(compact('app_id', 'start_date', 'end_date', 'adtags', 'idx'));
    $url = "http://mta.qq.com/h5/api/ctr_core_data?app_id=${app_id}&start_date=${start_date}&end_date=${end_date}&idx=${idx}&sign=".$sign;
    return sendRequest($url);
}

// echo getCoreData('500602952', '2018-04-10', '2018-04-12', 'pv');


function getUserCompare($app_id, $start_date, $end_date){
    $sign = getSign(compact('app_id', 'start_date', 'end_date', 'adtags', 'idx'));
    $url = "http://mta.qq.com/h5/api/ctr_user_compare?app_id=${app_id}&start_date=${start_date}&end_date=${end_date}&sign=".$sign;
    // echo $url;
    return sendRequest($url);
}

// echo getUserCompare('500602952', '2018-04-10', '2018-04-12');

