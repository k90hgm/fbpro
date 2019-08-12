<?php
/*
      Gửi lời cảm ơn đặc biệt đến: 
             https://github.com/tomiashari/fb-autoreaction
             https://github.com/dfmcvn/getFBtoken
             https://github.com/tro1d/bot-reaction-gettoken
*/
//////Upload By K90 Hack Game Mobile//////
function code($user1, $pass1, $r_male1,$r_female1,$max_status1){
$buat = '<?php
$user = "'.$user1.'";
$pass = "'.$pass1.'";
$r_male = "'.$r_male1.'";
$r_female = "'.$r_female1.'";
$max_status = "'.$max_status1.'";
?>';
$file = fopen('lib/config.php','w');
fputs($file,$buat);
fclose($file);
echo "Sukses Disetting";
}
echo "\033[1;35m  ___ ___ _____   _    ___   ___ ___ _  _ \n";
echo " / __| __|_   _| | |  / _ \ / __|_ _| \| | \n";
echo " \__ \ _|  | |   | |_| (_) | (_ || || .` | \n";
echo " |___/___| |_|   |____\___/ \___|___|_|\_| \n";
echo "\033[1mAre Bạn có chắc muốn làm?\n";
echo "Gõ yes để tiếp tục: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
     echo "THOÁT!\n"; 
    exit;
} 
echo "\n";
echo "\033[1m======HỆ THỐNG AUTO THẢ ICON======\n";
print "|       TYPE OF REACTION        |\n";
print "| 1 là thích      3 là Wow    |\n";
print "| 2 là yêu        4 là haha    |\n";
print "| 7 là buồn       8 là tức giận   |\n";
print "--------------★★★★★★-------------\n";
print "\n";
print "\n";
echo "\033[0m \n"; 
echo "Tên Người Dùng/Email: ";
$user1 = trim(fgets(STDIN));
echo "Mật Khẩu : ";
$pass1 = trim(fgets(STDIN));
echo "Cứ ghi là 1 : ";
$r_male1 = trim(fgets(STDIN));
echo "Cứ ghi là 2: ";
$r_female1 = trim(fgets(STDIN));
echo "Bạn muốn thả tối đa (ví dụ:100) : ";
$max_status1 = trim(fgets(STDIN));
$execute = code($user1, $pass1, $r_male1,$r_female1,$max_status1);
print $execute;
?>
