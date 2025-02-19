<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $coon= mysqli_connect('localhost','root','','hospital');
    if($coon){
        echo "تم الاتصال بنجاح";
    }else{
        echo "لم يتم الاتصال";
    }
    //ادخال
   // $coon->query("INSERT INTO doctors(id,name,specialty) VALUES (1,'Osamah','cardiology')");
   // $coon->query("INSERT INTO doctors(id,name,specialty) VALUES (2,'Ahmed','cardiology')");
   // $coon->query("INSERT INTO patient(id,name,age,doctor_id) VALUES (1,'omar',30,0)");
//تعديل
   //$coon->query("UPDATE patient SET doctor_id=1 WHERE id=1");
   //حذف
  // $coon->query("DELETE FROM doctors WHERE id=2");
//طباعة الجدول الاول
$rseult = $coon->query("SELECT * FROM doctors");
echo "<h1>Doctors</h1><table border='1'><tr><th>Id</th><th>Name</th><th>Specialty</th><br/>";
while($row = $rseult->fetch_assoc()){
    echo"<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['specialty']}</td></tr>";
}
   echo"</table>.</br>";
//طباعة الجدول الثاني
$rseult1 = $coon->query("SELECT * FROM patient ");
echo "<h1>Patient</h1><table border='1'><tr><th>Id</th><th>Name</th><th>agey</th><th>doctor_id</th><br/>";
while($row = $rseult1->fetch_assoc()){
    echo"<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['age']}</td><td>{$row['doctor_id']}</td></tr>";
}
   echo"</table>"
    ?>
</body>
</html>