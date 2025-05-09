<!DOCTYPE html>
<html>
<head>
    <?php include_once './partials/head.php' ?>
</head>
<body>
  <div class="hero_area">
    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>
   <?php include_once './partials/header.php' ?>
    <!-- end header section -->
     <?php
        $sliders = [
            [
                'slider_title'   => 'Crypto <br> Currency 1',
                'slider_content' => 'Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.',
                'button_text'    => 'Read More',
                'image_url'      => 'images/slider-img.png',
            ],
            [
                'slider_title'   => 'Crypto <br> Currency 2',
                'slider_content' => 'Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.',
                'button_text'    => 'Read More',
                'image_url'      => 'images/slider-img.png',
            ],
            [
                'slider_title'   => 'Crypto <br> Currency 3',
                'slider_content' => 'Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.',
                'button_text'    => 'Read More',
                'image_url'      => 'images/slider-img.png',
            ],
        ]
     
     ?>
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php foreach( $sliders as $index => $slide ) : ?>
                <div class="carousel-item <?php echo $index == 0 ? 'active' : ''  ?> ">
                    <div class="container ">
                    <div class="row">
                        <div class="col-md-6 ">
                        <div class="detail-box">
                            <h1><?php echo $slide['slider_title'] ?></h1>
                            <p><?php echo $slide['slider_content'] ?></p>
                            <div class="btn-box">
                            <a href="" class="btn1">
                                <?php echo $slide['button_text'] ?>
                            </a>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="img-box">
                            <img src="<?php echo $slide['image_url'] ?>" alt="">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>
    <?php include_once './pages/home.php' ?>
    <?php include_once './partials/footer.php' ?>
</body>
</html>