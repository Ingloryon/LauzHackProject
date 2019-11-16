<?php

$sql = "INSERT INTO test.Oeuvre (Titre, Artiste, Annee,Technique,Format,Prix,Acheteur)
VALUES ('Le style', 'Moi', '2021','sans toile','hyper grand','MILLE!','Personne')";

if(query($sql)===True){
  echo "It should have worked"
}else{
  echo "It shouldn't have worked"
}
?>