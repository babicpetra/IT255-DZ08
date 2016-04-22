<?php
include("funtions.php");
if(isset($_POST['submit'])){
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if(!empty($ime) && !empty($prezime) && !empty($username) && !empty($password)){
dodajKorisnik($ime,$prezime,$username,$password);
echo "Uspešna registracija";

} else{
echo "Niste popunili sva polja";
}
}
?>