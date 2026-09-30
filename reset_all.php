<?php
$key = $_GET['key'] ?? '';
if($key !== 'Digi2026'){ die('Forbidden - Key Required'); }

$folders = ['buyer','seller','marketer','notary'];
foreach($folders as $f){
  $path = __DIR__."/$f/status.json";
  if(file_exists($path)){
    $data = [
      "step" => 1,
      "deal" => "DD-".strtoupper(substr(md5(time().$f),0,4)),
      "status" => "ready_for_test",
      "amount" => 0,
      "commission" => 0,
      "updated_at" => date('Y-m-d H:i:s'),
      "auto_mode" => true
    ];
    file_put_contents($path, json_encode($data, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
  }
  // تصفير اللوجز
  $log = __DIR__."/$f/log.json";
  if(file_exists($log)) file_put_contents($log, "[]");
}

file_put_contents(__DIR__."/status.json", json_encode(["global_step"=>1,"mode"=>"AUTO_DIGITAL","last_reset"=>date('Y-m-d H:i:s')], JSON_PRETTY_PRINT));

echo "✅ تم تصفير كل المنصات 4/4 وتفعيل الوضع الرقمي<br>";
echo "Buyer, Seller, Marketer, Notary -> step = 1<br>";
echo "الآن كل منصة تحسب لحالها";