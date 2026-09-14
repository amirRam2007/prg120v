<?php  /*eksempel-matte2.php */
/*
/* Programmet mottar fra et HTML-skjema et svar på spørmålet "hva er 3 ganger 3 ?"
/* Programmet sjekker om svaret er riktig og skirver ut en melding ang. svaret 
/* Meldingen skrives ut på samme side som HTML-skemaet er 
*/ 
if (isset($_POST ["forsett"]))
{
  $svar=$_POST ["svar"];
 
  if ($svar == 9)
  {
    print("riktig. 3 ganger 3 er 9 ");
  }
  else
  {
    print ("feil. 3 ganger 3 er ikke $svar. 3 ganger 3 er 9 ");
  }
}
?>
  
    
