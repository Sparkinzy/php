<?php
$from = '10.0.2.52:6379/7';
$to   = '127.0.0.1:6379/7';
$from_redis = redis_init($from);
$to_redis   = redis_init($to);
$keys  = $from_redis->keys('*');
$count = 0;
$total = count($keys);
foreach($keys as $key){
    if(++$count % 100 == 1){
        echo "$count/$total\n";
    }
    $type = $from_redis->type($key);
    switch($type){
        case Redis::REDIS_STRING:
            $val = $from_redis->get($key);
            $to_redis->set($key, $val);
            break;
        case Redis::REDIS_LIST:
            $list = $from_redis->lRange($key, 0, -1);
            foreach($list as $val){
                $to_redis->rPush($key, $val);
            }
            break;
        case Redis::REDIS_HASH:
            $hash = $from_redis->hGetAll($key);
            $to_redis->hMSet($key, $hash);
            break;
        case Redis::REDIS_ZSET:
            $zset = $from_redis->zRange($key, 0, -1, true);
            foreach($zset as $val=>$score){
                $to_redis->zAdd($key, $score, $val);
            }
            break;
    }
}
function redis_init($conf){
    $redis = new Redis();
    preg_match('/^([^:]+)(:[0-9]+)?\\/(.+)?/', $conf, $ms);
    $host = $ms[1];
    $port = trim($ms[2], ':');
    $db = $ms[3];
    $redis->connect($host, $port);
    $redis->select($db);
    return $redis;
}