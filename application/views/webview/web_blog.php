<?php $this->load->view('webview/header_blog.php'); ?>

<header>
    <div class="hero-text-box">
        <h1><span style="color:#c7252a">Patazon Marketplace</span><br><span class="tagline" style="text-transform: capitalize; font-size: 90%"> The only choice for a premium and affordable shopping experience.</span></h1>
        <a href="#motto" class="btn btn-full"> Find Out More</a>
        <a href="https://patazone.co.ke/" class="btn btn-ghost">Shop</a>
    </div>
    </div>
</header>
<section class="section--motto js--section-motto" id="motto">
    <div class="row">
        <h2>Our Core</h2>
        <p class="long-copy">
            Hello, Karibu. We are Patazon. A reliable online store, built from a shared dream of creating a product dedicated to providing great services.
        </p>
    </div>
    <div class="row">
        <div class="col span-1-of-3 box">
            <i class="fas fa-feather-alt icon-motto"></i>
            <h3>Swift</h3>
            <p>
                Stress Free Shopping! With great products, from dependable brands. Friendly customer service, prompt delivery and after sales services.
        </div>
        <div class="col span-1-of-3 box">
            <i class="fas fa-stopwatch icon-motto"></i>
            <h3>Fast</h3>
            <p>
                Patazon server is hosted on multiple servers here and abroad. Our inventory is stocked and growing. Couriers ready to be dispatched to any and all locations countrywide.
            </p>
        </div>
        <div class="col span-1-of-3 box">
            <i class="far fa-check-circle icon-motto"></i>
            <h3>Easy</h3>
            <p>
                We are tirelessly working with banks and other financial lenders to provide other payment options especially in these trying times.
            </p>
        </div>
    </div>
</section>


<section class="section--products js--section-products" id="products">
    <h2> Glimpse of our Products</h2>
    <ul class="products-show clearfix">
        <li>
            <figure class="products-image">
                <a href="https://patazone.co.ke/shop/Smart%20Phones/MQ==" target="_blank">
                    <img src="<?= base_url(); ?>assets/img/1.webp" alt="smartphone">
                </a>
            </figure>
        </li>
        <li>
            <figure class="products-image">
                <a href="https://patazone.co.ke/home/search?searchProducts=tv" target="_blank">
                    <img src="<?= base_url(); ?>assets/img/2.webp" alt="tv">
                </a>
            </figure>
        </li>
        <li>
            <figure class="products-image">
                <a href="https://patazone.co.ke/shop/Woofers%20&%20Sub%20Woofers/MjA=" target="_blank">
                    <img src="<?= base_url(); ?>assets/img/3.webp" alt="audio">
                </a>
            </figure>
        </li>
        <li>
            <figure class="products-image">
                <a href="https://patazone.co.ke/shop/Kettles/NDQ=" target="_blank">
                    <img src="<?= base_url(); ?>assets/img/4.webp" alt="small appliances">
                </a>
            </figure>
        </li>
    </ul>
    <ul class="products-show clearfix">
        <li>
            <figure class="products-image">
                <a href="https://patazone.co.ke/shop/Freezers%20&%20Refrigerators/Mzg=" target="_blank">
                    <img src="<?= base_url(); ?>assets/img/5.webp" alt="fridges">
                </a>
            </figure>
        </li>
        <li>
            <figure class="products-image">
                <a href="https://patazone.co.ke/shop/Cookers%20&%20Ovens/Mzc=" target="_blank">
                    <img src="<?= base_url(); ?>assets/img/6.webp" alt="cookers">
                </a>
            </figure>
        </li>
        <li>
            <figure class="products-image">
                <a href="https://patazone.co.ke/shop/Water%20Dispensers/Mzk=" target="_blank">
                    <img src="<?= base_url(); ?>assets/img/7.webp" alt="furniture">
                </a>
            </figure>
        </li>
        <li>
            <figure class="products-image">
                <a href="https://patazone.co.ke/shop/Furniture%20&%20Bath/Mjk=" target="_blank">
                    <img src="<?= base_url(); ?>assets/img/8.webp" alt="fridges">
                </a>
            </figure>
        </li>
    </ul>


</section>

<section class="section--info" id="info">
    <div class="row">
        <h2>Getting you up and ready</h2>
    </div>
    <div class="row">
        <!-- <div class="col span-1-of-3">
            <div class="info--box">
                <div>
                    <h5>High Quality</h5>
                </div>
                <div>
                    <ul>
                        <li><i class="fa-solid fa-check icon-small"></i>Trusted Brands</li>
                        <li><i class="fa-solid fa-check icon-small"></i>Variety</li>
                        <li><i class="fa-solid fa-check icon-small"></i>Warranties</li>
                    </ul>
                </div>
                <div>
                    <a href="<?php echo base_url() . 'pblog/webbrands' ?>" class="btn btn-full">Find Out More</a>
                </div>
            </div>
        </div> -->
        <div class="col span-1-of-2">
            <div class="info--box">
                <div>
                    <h5>Great Prices</h5>
                </div>
                <div>
                    <ul>
                        <li><i class="fa-solid fa-check icon-small"></i>Affordable prices</li>
                        <li><i class="fa-solid fa-check icon-small"></i>Discounted prices</li>
                        <li><i class="fa-solid fa-check icon-small"></i>Payment plans</li>
                    </ul>
                </div>
                <div>
                    <a href="<?php echo base_url() . 'pblog/webpay' ?>" class="btn btn-ghost">Find Out More</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-2">
            <div class="info--box">
                <div>
                    <h5>Quick Delivery</h5>
                </div>
                <div>
                    <ul>
                        <li><i class="fa-solid fa-check icon-small"></i>Safe</li>
                        <li><i class="fa-solid fa-check icon-small"></i>Verified Couriers</li>
                        <li><i class="fa-solid fa-check icon-small"></i>Insured</li>
                    </ul>
                </div>
                <div>
                    <a href="<?php echo base_url() . 'pblog/webdel' ?>" class="btn btn-ghost">Find Out More</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section--choice" id="choice">
    <div class="row">
        <h2>101 Questions</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-3">
            <div class="blogbox">
                <div>
                    <h5>iPhones</h5>
                </div>
                <div>
                    <img src="<?= base_url(); ?>assets/img/iphone.webp" alt="ios">
                </div>
                <div>
                    <p class="blog-cap">What Makes It A Must-Have?</p>
                </div>
                <div>
                    <a href="<?php echo base_url() . 'pblog/iosblog' ?>" class="btn btn-ghost" id="btn_ios"> Read More</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="blogbox">
                <div>
                    <h5>Android</h5>
                </div>
                <div>
                    <img src="<?= base_url(); ?>assets/img/android.webp" alt="google">
                </div>
                <div>
                    <p class="blog-cap">The Best Android Smartphone?</p>
                </div>
                <div>
                    <a href="<?php echo base_url() . 'pblog/androidblog' ?>" class="btn btn-ghost" id="btn_android"> Read More</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="blogbox">
                <div>
                    <h5>TV</h5>
                </div>
                <div>
                    <img src="<?= base_url(); ?>assets/img/tv.webp" alt="tvs">
                </div>
                <div>
                    <p class="blog-cap">For Movie and Game Nights?</p>
                </div>
                <div>
                    <a href="<?php echo base_url() . 'pblog/tvblog' ?>" class="btn btn-ghost" id="btn_tvs"> Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col span-1-of-3">
            <div class="blogbox">
                <div>
                    <h5>Audio</h5>
                </div>
                <div>
                    <img src="<?= base_url(); ?>assets/img/audio.webp" alt="woofers">
                </div>
                <div>
                    <p class="blog-cap">How Loud Do You want To Be?</p>
                </div>
                <div>
                    <a href="<?php echo base_url() . 'pblog/audioblog' ?>" class="btn btn-ghost" id="btn_audios"> Read More</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="blogbox">
                <div>
                    <h5>Fridges</h5>
                </div>
                <div>
                    <img src="<?= base_url(); ?>assets/img/fridge.webp" alt="fridges">
                </div>
                <div>
                    <p class="blog-cap">It's Freezing In Here!</p>
                </div>
                <div>
                    <a href="<?php echo base_url() . 'pblog/fridgeblog' ?>" class="btn btn-ghost" id="btn_ios"> Read More</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="blogbox">
                <div>
                    <h5>Cookers and Ovens</h5>
                </div>
                <div>
                    <img src="<?= base_url(); ?>assets/img/cookers.webp" alt="cookers">
                </div>
                <div>
                    <p class="blog-cap">I Can Cook, If Only I had...</p>
                </div>
                <div>
                    <a href="<?php echo base_url() . 'pblog/cookerblog' ?>" class="btn btn-ghost" id="btn_android"> Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col span-1-of-3">
            <div class="blogbox">
                <div>
                    <h5>Hot vs Cold</h5>
                </div>
                <div>
                    <img src="<?= base_url(); ?>assets/img/heatcold.webp" alt="weather">
                </div>
                <div>
                    <p class="blog-cap">Weather Woes?</p>
                </div>
                <div>
                    <a href="<?php echo base_url() . 'pblog/heatcoldblog' ?>" class="btn btn-ghost" id="btn_tvs"> Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('webview/footer_blog.php'); ?>