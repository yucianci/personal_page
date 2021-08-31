<?php
foreach ($hobby as $data) {
  $image_gamer = $data['img-gamer'];
  $text_gamer = $data['text-gamer'];
  $image_book = $data['img-book'];
  $text_book = $data['text-book'];
  $image_dev = $data['img-dev'];
  $text_dev = $data['text-dev'];
}
echo "
  <div class='hobby__content'>
    <section>
    <p class='hobby__title'>Jogos</p>
    <img src='{$image_gamer}'>
    <p class='hobby__text'>{$text_gamer}</p>
    </section>
    <section>
    <p class='hobby__title'>Livros</p>
    <img src='{$image_book}'>
    <p class='hobby__text'>{$text_book}</p>
    </section>
    <section>
    <p class='hobby__title'>Programar</p>
    <img src='{$image_dev}'>
    <p class='hobby__text'>{$text_dev}</p>
    </section>
    
  </div>
  ";
