<?php /* eksempel-3.php */
/*
/*     programmen mottar emnekode fra et HTML-skjema
/*     programmet skjekke om emnekode er korrekt fylt ut 
*/
  $emnekode=$_POST['emnekode'];

  $lovligEmnekode=true;

  if (!$emnekode) /* emnekode er ikke fylt ut */
    {
      $lovligEmnekode=false;
      print("Emnekode er ikke fylt ut <br />");
    }
    else if (strlen($emnekode)!=7) /* emnekode er ikke 7 teng */
    {
      $lovligEmnekode=false;
      print("Emnekode er ikke 7 tegn <br />");
    }
    else
    {
        $del1=substr($emnekode,0,3); /* de 3 første tegnene */
        $del2=substr($emnekode,3,3); /* de 3 neste tegnene */
        $del3=substr($emnekode,6,1); /* det siste tegnet */

        if (!ctype_alpha($del1)) /* de 3 første tegnene er ikke bokstaver */
        {
            $lovligEmnekode=false;
            print("Tegn 1-3 innholder ikke bare bokstaver <br />");
            }

        if (!ctype_digit($del2)) /* de 3 neste tegnene er ikke sifre */
        {
            $lovligEmnekode=false;
            print("Tegn 4-6 innholder ikke bare sifre <br />");
        }

        if (!ctype_alnum($del3)) /* det siste tegnet er ikke bokstav eller siffer */
        {
            $lovligEmnekode=false;
            print("Tegn 7 innholder ikke bokstav eller siffer <br />");
        }

    }

    if ($lovligEmnekode) /* emnekode er korrekt fylt ut */
    {
        print("Emnekode er korrekt fylt ut <br />");
    }
    
    ?>
    
