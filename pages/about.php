<?php
foreach ($profile as $data) {
  $image = $data['img'];
  $description = $data['description'];
  $carrer = $data['carrer'];
  $github = $data['github'];
  $url_github = $data['url_github'];
  $linkedin = $data['linkedin'];
  $url_linkedin = $data['url_linkedin'];
  $instagram = $data['instagram'];
  $url_instagram = $data['url_instagram'];
}
echo "
  <div class='about__content'>
    <section>
      <p class='about__carrer'>{$carrer}</p>
      <h1>Yuri Fuzifaru Cianci</h1>
      <div class='description'>
        <p>{$description}</p>
        <div class='description__icons'>  
          <a href='{$url_github}' target='_blank'>
            <img src='{$github}' title='Github' width='28'>
          </a>
          <a href='{$url_linkedin}' target='_blank'>
            <img src='{$linkedin}' title='Linkedin' width='28'>
          </a>
          <a href='{$url_instagram}' target='_blank'>
            <img src='{$instagram}' title='Instagram' width='28'>
          </a>
        </div>
      </div>
    </section>
    <section class='profile'>
      <div class='profile__border'></div>
      <img class='profile__image'  src='{$image}'>
    </section>
  </div>
  ";
