<?php 
/*

*/
ob_start();
$Api_KEY = '986064370:AAEmAbAuNwn_GNl5dxwurDT4xgawM592Dkk';
define('API_KEY',$Api_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$ALSOH = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ALSOH";
$ALSOH = file_get_contents($url);
return json_decode($ALSOH);}
function Sm($a, $b, $c, $d){bot('sendMessage',['chat_id'=>$a,'text'=>$b,'parse_mode'=>$c,'reply_markup'=> $d]);}
function Fo($e, $f, $g, $h){bot('ForwardMessage',['chat_id'=>$e,'from_chat_id'=>$f,'message_id'=>$g,'text'=>$h]);}
function Sa($chat_id, $action){bot('sendchataction',['chat_id'=>$chat_id,'action'=>$action]);}
function objectToArrays($ALSH){
if (!is_object($ALSH) && !is_array($ALSH)) {
return $ALSH;}
if (is_object($ALSH)) {
$ALSH = get_object_vars($ALSH);}
return array_map("objectToArrays", $ALSH);}
//====================ALSH======================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$from_id = $message->from->id;
$name = $message->from->first_name;
$username = $message->from->username;
$text = $message->text;
$admin = "543150537"; //ايديك
mkdir("Alsh");
$_Ali = json_decode(file_get_contents("Alsh/id.json"),true);
if($text and !in_array($from_id, $_Ali["userid"])){
$_Ali['userid'][] = "$from_id";
file_put_contents("Alsh/id.json", json_encode($_Ali));}
$ALLUSER = json_decode(file_get_contents("Alsh/bc.json"),true);
$_Ali = json_decode(file_get_contents("Alsh/id.json"),true);
$ALO = $_Ali['userid'];
$BC = $ALLUSER["bc"];
$KK = json_encode(['keyboard' => [[['text' => "عدد الاعضاء"],['text' => "ارسال للكل"]],[['text' => "توجية للكل"]],], 'resize_keyboard' => true]);
$ali = "@Api_File_Code";  #@nr768
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
اشترك قنواة البوت.

$ali

ودز /start.",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);return false;}
if($text == "/start"){
Sa($chat_id, 'typing');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• اهلا بك ؛ - $name ' 
في بوت تحميل ستوري انستا.
يمكنك تحميل انواع ستوريات الشخص.
فقط برسال يوزر الشخص ارسل الان ماذا تنتظر.
ارسل يوزر الحساب من دون ل @.
كمثال : google.
#ملاحظه يجب ان يكون حساب الشخص عام وليس خاص.
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"# لشراء نسخةه من البوت -",'url'=>"https://t.me/a5altk"]],
]
])
]);
}
elseif($text and $chat_id != $admin){
Sa($chat_id, 'typing');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"انتظر قليلا من فضلك.",
'parse_mode'=>'MarkDown',
]);
$Api = json_decode(file_get_contents('https://ibcorp.ibuser.xyz/story/?s='.$text)); // ال Api للولد رامي ، @NNNNH
$Ali = objectToArrays($Api);
$Alo =$Ali["count"];
if($Alo){
$p = count($Ali["stoty"]["photo"]);
$v = count($Ali["stoty"]["video"]);
for ($i=0; $i < $p; $i++) {
$Photo = $Ali["stoty"]["photo"][$i]["link"];   
$Array = $i +1;
Sa($chat_id, 'upload_photo');
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$Photo,
'caption'=>"🖼| الصورة رقم : $Array.",
]);
}
for ($i=0; $i < $v; $i++) {
$Video = $Ali["stoty"]["video"][$i]["link"];   
$Array = $i +1;
Sa($chat_id, 'upload_video');
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$Video,
'caption'=>":movie_camera:| فيديو رقم $Array"
]);}
}else{Sa($chat_id, 'typing');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو ليس لديه ستوري او الحساب خاص او الحساب غير موجود.",
'parse_mode'=>'MarkDown',
]);
}
}
if($text and $chat_id != $admin){
Fo($admin,$chat_id,$update->message->message_id,$text);}
if($text and $message->reply_to_message && $text!="/info" && $text!="/ban" && $text!="/unban" && $text!="/forward" and !$data ){
Sm($message->reply_to_message-

Telegram
𝒂𝒍𝒊₁₉₉₈ كومبلس
𓆩 𝑎𝑚 𝑛𝑜𝑡 𝑤𝑖𝑡ℎ 𝑦𝑜𝑢 𝑏𝑜𝑡 𝑖 𝑓𝑒𝑒𝑙 𝑦𝑜𝑢 𓆪
>forward_from->id,$text,null,null);}
if($text == "/start" and $chat_id != $admin){
Sm($admin,"\n*New Member* -  [$chat_id](tg://user?id=$chat_id)\n*Name Member* - [$name](tg://user?id=$chat_id)","Markdown",null);}
if($text == "/start" and $chat_id == $admin){
Sm($chat_id,"اليك الاوامر عزيزي.","Markdown",$KK);}
if($text == "عدد الاعضاء" and $chat_id == $admin){
$ALLMEMBR = count($ALO);
Sm($chat_id,"عدد الاعضاء : $ALLMEMBR","markdown",$KK);}
if($text == "ارسال للكل" and $chat_id == $admin){
$ALLUSER["bc"] = "sendm";
$MY_JSON = json_encode($ALLUSER,true);
file_put_contents("Alsh/bc.json",$MY_JSON);
Sm($from_id, "ارسل رسالتك الان.", "MarkDown", $KK);}
if($text != "/start" and $BC == "sendm" and $chat_id == $admin){
$ALLUSER["bc"] = "none";
$ALS = json_encode($ALLUSER,true);
file_put_contents("Alsh/bc.json",$ALS);
foreach($ALO as $HI => $sendm){
Sm($sendm, $text, "MarkDown",null);}
Sm($from_id, "تم ارسال رساله لللكل", "MarkDown", $KK);}
if($text == "توجية للكل" and $chat_id == $admin){
$ALLUSER["bc"] = "for";
$MY_JSON = json_encode($ALLUSER,true);
file_put_contents("Alsh/bc.json",$MY_JSON);
 Sm($from_id, "آرسل رسالتك لكي اقوم بتوجيةه", "MarkDown", $KK);}
if($text != "/start" and $BC == "for" and $chat_id == $admin){
 $ALLUSER["bc"] = "none";
$ALS = json_encode($ALLUSER,true);
file_put_contents("Alsh/bc.json",$ALS);
 foreach($ALO as $HI => $fors){
 Fo($fors, $chat_id, $message_id,null);}
Sm($from_id, "تم توجية !", "MarkDown", $KK);}
