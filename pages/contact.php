<?php
foreach ($contact as $data) {
  $image = $data['img'];
  $description = $data['description'];
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
      <div class='description'>
        <p class='about__carrer'>Espero que tenha gostado do meu portfólio!</p>
        <br/>
        <p>{$description}</p>
        <br/>
        <br/>
        <p class='about__carrer'>Fale comigo:</p>
        <br/>
        <p><strong>e-mail: </strong>yucianci@gmail.com</p>
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
    <section class='contact'>
      <img class='contact__image'  src='{$image}'>
    </section>
  </div>
  ";
