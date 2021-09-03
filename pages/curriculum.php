<?php
foreach ($curriculum as $data) {
  $description = $data['description'];
  $experience = $data['experience'];
  $school = $data['school'];
  $university = $data['university'];
}
echo "
  <div class='curriculum__content'>
  <div class='curriculum__description'>
    <p class='about__carrer'>Sobre mim</p>
    {$description}
  </div>
  <div class='curriculum__description'>
    <p class='about__carrer'>Experiência</p>
    <strong>15/02/2021 - EMPRESA ATUAL</strong>
    <h4>DESENVOLVEDOR WEB, <strong>MS1 SISTEMAS</strong></h4>
    {$experience}
  </div>
  <div class='curriculum__description'>
    <p class='about__carrer'>Escolaridade</p>
    <strong>2016 - 2019</strong>
    <h4>CURSO TÉCNICO DE INFORMÁTICA INTEGRADO AO ENSINO MÉDIO,
      <strong>INSTITUTO FEDERAL DO PARANÁ (IFPR)</strong>
    </h4>
    {$school}
    <br/>
    <br/>
    <br/>
    <p class='about__carrer'>Escolaridade</p>
    <strong>2021 – FACULDADE ATUAL</strong>
    <h4>SISTEMAS PARA INTERNET (WEBDESIGN E DISPOSITIVOS MÓVEIS), <strong>FACULDADE ALFA DE UMUARAMA (FAU)
    </strong></h4>
    {$university}
  </div>
  </div>
  ";
