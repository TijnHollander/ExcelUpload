
<?php
if(isset($_POST["submit_file"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $name = $csv[0];
  $age = $csv[1];
  $country = $csv[2];
  mysql_query("INSERT INTO employee VALUES ('$roepnaam','$tv','$achternaam', '$gebdatum', '$email', '$geslacht', '$datum', '$intaker1', '$intaker2', '$gesprek_score', '$reden_gesprek_software_development', '$gesprek_BOA_YN', '$Reden_gesprek_boa', '$advies_intaker1', '$advies_intaker2', '$definitief_advies', '$opmerkingen')");
 }
}
?>