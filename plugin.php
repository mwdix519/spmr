<?php
if(preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $msg, $text);
$count = $text[2];
$txt = $text[3];
$spm = "";
for($i=1; $i <= $count; $i++){
$spm .= "$txt \n";
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => $spm]);
}
if(preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $msg, $text);
$count = $text[2];
$txt = $text[3];
for($i=1; $i <= $count; $i++){
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => $txt]);
}
}
if(preg_match("/^[\/\#\!]?(mestor) ([0-9]+) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(mestor) ([0-9]+) (.*)$/i", $msg, $text);
$count = $text[2];
$id = $text[3];
for($i=1; $i <= $count; $i++){
$MadelineProto->messages->sendMessage(['peer' => $id, 'message' => 'متن مورد نظر را در سورس وارد کنید']);
}
}
if($msg == 'ping'){
    $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => "PonG!"]);
}
if($msg == 'help'){
    $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => "← راهنمای ربات اسپمر ↓
💢 ping 
•  جهت اطلاع از وضعیت ربات 
〰〰〰〰〰〰〰〰〰〰 
💢 flood tedad matn
•  اسپم پیام در یک متن ( استفاده در گروه )
〰〰〰〰〰〰〰〰〰〰 
💢 spam tedad matn
•  اسپم پیام در متن های مجزا ( استفاده در گروه )
〰〰〰〰〰〰〰〰〰〰 
💢 mestor tedad id
•  اسپم پیام در پیوی فرد با استفاده از ایدی عددی ( ربات نباید ریپورت باشد )
〰〰〰〰〰〰〰〰〰〰 
💠 مثال Pv :  
mestor 20 126754896
💠 مثال گروه :
flood 20 TEST
spam 20 TEST
🔰 سازنده 🔰 :
@Im3ti"]);
}
