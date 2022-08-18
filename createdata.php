<?php
/* This adds the name, email and state from PHP to the MySQL database. Load this once and delete */


$firstnames = array(
"Adenike",
"Chibuzor",
"Oke",
"Ese",
"Ugochi",
"Efiyemi",
"Udaka",
"Pomile",
"Basheed",
"Ware",
"Ejiro",
"Amaka",
"Monika",
"Roda",
"Wandas",
"Itua",
"Musa",
"Ibrahim",
"Odiri",
"Yemi");
$lastnames = array(
"Adekola",
"Eze",
"Ochuko",
"Tega",
"Ekene",
"Prye",
"Akpan",
"Olumide",
"Toheeb",
"Rume",
"Aroture",
"Obinna",
"Abulu",
"Adewole",
"Giba",
"Ituhan",
"Ahmed",
"Abubakar",
"Ovo",
"Olamide"
);
$states = array("Delta","Edo","Abuja","Benue","Kwara","Osun","Imo","Niger","Rivers","Delta","Abuja","Kogi","Kwara","Oyo","Lagos","Delta","Enugu","Abia","Edo","Kaduna");
$count = 50;
$sql = "INSERT INTO `name`, `email`, `state`) VALUES";
$number = array();
for($i=0; $i<=$number; $i++){
    $name = $firstnames[array_rand($firstnames)]." ".$lastnames[array_rand($lastnames)];
    $email = strtolower(str_replace(" ", "",$name)).'@gmail.com';
    $records[] = "(".$name."', '".$email."', '".$states[array_rand($states)]."')";
}

$sql .= implode(",\n",$records).";";
echo $sql;
?>
