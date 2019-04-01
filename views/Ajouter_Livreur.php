<?PHP
include "../entities/livreur.php";
include "../cores/livreurC.php";




 if (($_POST['cinL']!="") and ($_POST['nomL']!="") and ($_POST['prenomL']!="") and ($_POST['telL']!="") and ($_POST['adresseL']!="") and ($_POST['mailL']!="") )
{

if (strlen($_POST['cinL'])!=8)
echo "CIN invalide";
else
{
$livreur1=new livreur($_POST['cinL'],$_POST['nomL'],$_POST['prenomL'],$_POST['telL'],$_POST['mailL'],$_POST['adresseL']);

$livreur1C=new livreurC();
$livreur1C->ajouterLivreur($livreur1);
header('Location: Afficher_Livreur.php');

}
}
//*/

?>
