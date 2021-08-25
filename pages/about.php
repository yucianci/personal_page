<?php
foreach ($profile as $data) {
  $image = $data['img'];
  $description = $data['description'];
  $carrer = $data['carrer'];
  $github = $data['github'];
  $linkedin = $data['linkedin'];
  $instagram = $data['instagram'];
}
echo "
  <div class='about__content'>
    <section>
      <p class='about__carrer'>{$carrer}</p>
      <h1>Yuri Fuzifaru Cianci</h1>
      <div class='description'>
        <p>{$description}</p>
        <div class='description__icons'>  
          <button>
            <img src='{$github}'>
          </button>
          <button>
            <img src='{$linkedin}'>
          </button>
          <button>
            <img src='{$instagram}'>
          </button>
        </div>
      </div>
    </section>
    <section class='profile'>
      <div class='profile__border'>
        <div class='geometry left'></div>
        <div class='geometry top'></div>
        <div class='geometry right'></div>
        <div class='geometry bottom'></div>
      </div>
      <img class='profile__image'  src='{$image}'>
    </section>
  </div>
  ";
