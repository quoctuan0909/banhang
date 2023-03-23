<?php
include 'autoload/autoload.php';

$sqlhomecate = "SELECT name, id FROM category WHERE home = 1 ORDER BY update_at";


$Categoryhome = $db->fetchsql($sqlhomecate);
$data = [];
foreach ($Categoryhome as $item) {
    $cateID = intval($item['id']); 
    
    $sql = "SELECT * FROM product WHERE category_id = $cateID ORDER BY ID DESC LIMIT 4";
    $productHome = $db->fetchsql($sql); 
    $data[$item['name']] = $productHome;
}
$pannel = $db->fetchAll("panel");
$count = count($db->fetchAll("panel"));

$a=1;
?>
<?php include 'header.php'?>
<a style="font-size: 24px; color: black"> Mọi thắc mắc hay đánh giá chất lượng dịch vụ vui lòng liên hệ trực tiếp <br><b style="font-size: 24px; color: red">hotline: 0926600090</b></br>
<b style="font-size: 24px; color: red">Email: voquoctuan090901hiie@gmail.com</b> </a>   
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62719.33935459971!2d106.69332291329403!3d10.73766582019738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752560b050b093%3A0x6dcb89c51055ccc9!2zUXXhuq1uIDcsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1669030019795!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="870" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
<?php include 'footer.php' ?>