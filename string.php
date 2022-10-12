<?php
// PHP STRING FUNCTIONS       -        وظائف يستخدم مع بيانات من نوع النصي     

echo "<pre>";
$text = " hello to , 123 php ";
$text_strlen = strlen($text);

echo str_word_count($text)."<br>"; //3
echo str_repeat($text,5)."<br>";
echo str_replace("1723", "test",$text);
echo "<br>";
echo strpos($text,5123);
echo "<br>";
//substr($text,a,b) get the text from a pos and end with a+b pos
echo substr($text,4,3); //o t

echo "<br>";
echo ucwords($text);
echo "<br>";
echo trim($text);
echo "<br>";
//explode == split in python
print_r(explode(" ",$text));
echo implode(" ",explode(" ",$text))


?>

<?php
// -------------------------------- Lesson 1 --------------------------------
// strlen(string)                                        الحصول على طول النص
// str_word_count(string)                   حساب عدد الكلمات في النص المحدد
// strrev (string)                                                   عكس النص
// -------------------------------- Lesson 2 --------------------------------
// str_repeat (string ,0);        لتكرار نص المحدد حسب عدد مرات الذي تحدده      
// str_replace (old text , new text , string)   استبدال النص ضمن النص المحدد
// strpos (string , search text )            لبحث عن نص ضمن النص الذي تحدده
// substr(string,start,length)        لقطع جزء من النص حسب تمركز الذي تحدده
// -------------------------------- Lesson 3 --------------------------------
// ucwords(string)                  لتحويل اول حرف من كل كلمة إلى حرف كبير
// strtoupper (string)                      لتحويل احرف النص إلى احرف كبيرة
// strtolower (string)                      لتحويل احرف النص إلى احرف صغيرة
// trim()                                   لحذف فرغات في بداية ونهاية النص
// ltrim()                                        لحذف فراغات في بداية النص
// rtrim()                                        لحذف فراغات في نهاية النص
// -------------------------------- Lesson 4 --------------------------------
// explode()      يقوم بتحويل بيانات من نوع النصي إلى بيانات من نوع ارراي 
// implode()      يقوم بتحويل بيانات من نوع ارراي إلى بيانات من نوع النصي
// strcmp(string1,string2)                                لمقارنة بين 2 نصوص   
// ---------------------------------------------------------------------------
?>