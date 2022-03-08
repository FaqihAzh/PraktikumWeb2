<?php
function kelulusan($nilai_total){
  if ($nilai_total > 55){
    return 'LULUS';
  } else {
    return 'TIDAK LULUS';
  }
}
?>

<?php
function grade($nilai_total){
  if ($nilai_total > 0 && $nilai_total <35){
    return 'E';
  } elseif ($nilai_total > 35 && $nilai_total <55){
    return 'D';
  } elseif ($nilai_total > 55 && $nilai_total <70){
    return 'C';
  } elseif ($nilai_total >= 70 && $nilai_total <85){
    return 'B';
  } elseif ($nilai_total >= 85 && $nilai_total <= 100){
    return 'A';
  } else {
    return 'I';
  }
}
?>

<?php
function predikat($grade){
  switch ($grade){
    case 'A':
      return 'Sangat Memuaskan';
      break;
    case 'B':
      return 'Memuaskan';
      break;
    case 'C':
      return 'Cukup';
      break;
    case 'D':
      return 'Kurang';
      break;
    case 'E':
      return 'Sangat Kurang';
      break;
    default :
      return '';
  }
}
?>