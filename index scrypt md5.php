<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>0nline md5 DECRYPT/ENCRYPT</title>
<style type="text/css">
<!--
body,td,th {
        font-family: Geneva, Arial, Helvetica, sans-serif;
        color: #00FF00;
        font-weight: bold;
}
body {
        background-color: #000000;
}
a:link {
        color: #FF0000;
        text-decoration: none;
}
a:visited {
        text-decoration: none;
        color: #00FF00;
}
a:hover {
        text-decoration: none;
        color: #99FFFF;
}
a:active {
        text-decoration: none;
        color: #9900FF;
}
.style3 {
        color: #00FF00
        }
a {
        font-weight: bold;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"></head>
<body>
<style type='text/css'>
body {
    background-color: #000000;
    color: green;
    font-family:courier new;
    font-size:12px;
}
text,input,table,tr,td,th {
    border-color: green;
    border-style: solid;
    border-width: 1px;
    color: green;
    background:#0f0f0f;
    font-family:courier new;
    font-size:12px;
}
</style>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
  <center><br>
MASUKKAN  KODE md5  DI KOTAK INI <br>
<br>
<input name="hash" type="text" class="style3" size="32"><br><br>
<input type="submit" class="style3" value="Crack Me..."></center>
</form>
<?php
/***
* Online Md5 cracker by gunslinger_
* Version : 1.0
* Visit : http://www.devilzc0de.com
*/
$city = strtolower(trim($_POST["hash"]));
if(ereg("([0-9a-f]{32})", $city)) {
    $urls = array(
                 0 => ("http://md5.rednoize.com/?p&s=md5&q=" . $city),
                 1 => ("http://gdataonline.com/qkhash.php?mode=txt&hash=" . $city),
                 2 => ("http://milw0rm.com/cracker/search.php"),
                 3 => ("http://md5decryption.com/"),
                 4 => ("http://alimamed.pp.ru/md5/?md5e=&md5d=" . $city),
                 5 => ("http://ice.breaker.free.fr/md5.php?hachage=" . $city),
                 6 => ("http://passcracking.com/"),
                 7 => ("http://md5.hashcracking.com/search.php?md5=" . $city),
                 8 => ("http://www.hashchecker.com/index.php?_sls=search_hash"),
                 9 => ("http://md5crack.it-helpnet.de/index.php?op=search"),
                 10 => ("http://blacklight.gotdns.org/cracker/crack.php"),
                 11 => ("http://md5.ip-domain.com.cn/"),
                 12 => ("http://www.bigtrapeze.com/md5/"),
                 13 => ("http://opencrack.hashkiller.com/"),
                 14 => ("http://www.md5oogle.com/decrypt.php?input=" . $city),
                 15 => ("http://www.tydal.nu/php/sakerhet/md5.php?q=" . $city)
                 );
    $params = array(
                    0 => (null),
                    1 => (null),
                    2 => ("hash=" . $city . "&submit=Submit"),
                    3 => ("hash=" . $city . "&submit=Decrypt It!"),
                    4 => (null),
                    5 => (null),
                    6 => ("datafromuser=" . $city . "&submit=DoIT"),
                    7 => (null),
                    8 => ("search_field=" . $city . "&Submit=search"),
                    9 => ("md5=" . $city . "&submit=Search now"),
                    10 => ("hash=" . $city . "&algos=MD5&crack=Crack"),
                    11 => ("text=" . $city . "&submit=submit"),
                    12 => ("query=" . $city . "&submit= Crack "),
                    13 => ("oc_check_md5=" . $city ."&oc_submit=Search MD5"),
                    14 => (null),
                    15 => (null)
                    );
    $patterns = array(
                     0 => (null),
                     1 => ("/<\/td><td width=\"35%\"><b>(.*)<\/b><\/td><\/tr>/"),
                     2 => ("/<\/TD><TD align=\"middle\" nowrap=\"nowrap\" width=90>(.*)<\/TD><TD align=\"middle\" nowrap=\"nowrap\" width=90>cracked<\/TD><\/TR>/"),
                     3 => ("/<h2>Results<\/h2><b>Md5 Hash:<\/b> " . $city . "<br\/><b class='red'>Normal Text: <\/b>(.*)<br\/>/"),
                     4 => ("/: <b>(.*)<\/b><br><form action=\"\">/"),
                     5 => ("/: <b><br \/><br \/> - (.*)<\/b>/"),
                     6 => ("/<\/td><td>md5 Database<\/td><td>" . $city . "<\/td><td bgcolor=#FF0000>(.*)<\/td><td>/"),
                     7 => ("/Cleartext of " . $city . " is (.*)/"),
                     8 => ("/<td><li>Your md5 hash is :<br><li>" . $city . " is <b>(.*)<\/b> used charl/"),
                     9 => ("/<\/td><td>" . $city . "<\/td><td>(.*)<\/td>/"),
                     10 => ("/" . $city . " -> <b>(.*)<\/b><br><br>/"),
                     11 => ("/<strong>result:<\/strong><font color=red>(.*)<\/font> /"),
                     12 => ("/The hash <strong>" . $city . "<\/strong> has been deciphered to: <strong>(.*)<\/strong>/"),
                     13 => ("/<\/div><div class=\"result\">" . $city . ":(.*)<br\/>/"),
                     14 => ("/<br\/><center><div style=\"background: lightblue;\"><b>Result: (.*)<\/b><br \/><\/div><\/center><br \/>/"),
                     15 => ("/(.*)<\/b><\/h5>/")
                     );
    if((count($urls) !== count($params)) || (count($urls) !== count($patterns)) || (count($params) !== count($patterns))) { die("Error"); }
    for($i = 0; $i < count($urls); $i++) {
        echo "\n<br>\n";
        $url = $urls[$i];
        $param = $params[$i];
        $pattern = $patterns[$i];
        $message = ereg_replace("(http|https)://", null, $url);
        $message = ereg_replace("/(.*)", null, $message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, "4");
        if(!empty($param)) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)");
        curl_setopt($ch, CURLOPT_TIMEOUT, "4");
        $result = @curl_exec($ch);
        curl_close($ch);
        if(!empty($result)) {
            if(empty($pattern)) {
                $final = $result;
            } else {
                preg_match($pattern, $result, $final);
                $final = $final[1];
            }
        }
        echo (md5($final) === $city || md5(htmlentities($final)) === $city)?("[+]" . $message . ": <b>" . htmlentities($final) . "</b>"):("[-]" . $message . ": Not Found");
    }
}
?>
<br>
</div>
</body>