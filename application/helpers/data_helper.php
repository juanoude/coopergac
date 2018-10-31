<?php

function converterDataParaBanco($data){
  $conversao = explode("/", $data);
  return "{$conversao[2]}-{$conversao[1]}-{$conversao[0]}";
}
