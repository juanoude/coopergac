<?php

function converterDataParaBanco($data){
  $conversao = explode("/", $data);
  return "{$conversao[2]}-{$conversao[1]}-{$conversao[0]}";
}

function dataBr($data){
  $data_br = new DateTime($data);
  return $data_br->format('d/m/Y');
}
