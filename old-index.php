<?php get_header(); ?>

<div class="parallax">

            <section id="home">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <?php echo do_shortcode("[rev_slider alias='slider-1'][/rev_slider]"); ?>
                        </div>
                    </div>
                </div>
            </section>
    
            <section id="about-me">
                <div class="container-fluid about section">
                    <div class="row"> 
                        <div class="col-lg-6" >
                            <div>
                                <img src="/wp-content/themes/upchannel/assets/img/think.png" alt="think">
                                <!-- <img src="/wp-content/themes/jono/assets/img/jono-min.png" alt="jono"> -->
                                <img src="<?php $image = get_field('about_image'); echo $image[url]; ?>" alt="jono">
                            </div>
                        
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <?php the_field('about_heading')?>
                                <?php the_field('about_text')?>
                                <?php the_field('about_info') ?>
                            </div>    
                        </div>
                    </div>
                </div>
            </section>


<section id="skills">
            <div  class="container-fluid skills section">
                <div class="row skills-wrapper">
                    <div class="col-12 skills-txt">
                        <?php the_field('skills_heading') ?>
                        <?php the_field('skills_text') ?>  
                    </div>
                </div> 

           
                <?php if( have_rows('skills_repeater') ): ?>

                <div class="container-fluid skills-repeater">
                    <div class="row">
                    <?php while( have_rows('skills_repeater') ) : the_row(); 
                        $image = get_sub_field('skills_image');
                        $heading = get_sub_field('skills_heading');
                        $text = get_sub_field('skills_text');
                    ?>
                        <div class="col-md-6">
                            <img src="<?php echo $image['url'];?>" alt="jono">
                            <h3><?php echo $heading ?></h3>
                            <p><?php echo $text;?></p>
                        </div>     

                    <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
</section>
        
          
<section id="works">
            <div class="works section">
                <div class="works-wrapper">
                    <div class="col-12 works-txt">
                        <?php the_field('work_heading')?>
                        <?php the_field('work_text')?>
                    </div>      
                </div>
            
                </div>

            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <picture>
                                <source srcset="/wp-content/uploads/2022/10/slider-hb-mobile.jpg" media="(max-width: 500px)" />
                                <source srcset="/wp-content/uploads/2022/10/slider-hb-tablet.jpg" media="(max-width: 950px)" />
                                <img src="/wp-content/uploads/2022/10/slider-hb.jpg" alt="humminbird" style="padding-bottom:50px;"/>
                            </picture>
              
                            <h1><a href="https://humminbird.com.au" target="_blank" class="website-links">humminbird.com.au</a></h1>
                        </li>
                       
                        <li class="splide__slide">
                            <picture>
                                <source srcset="/wp-content/themes/upchannel/assets/img/slider-mk-mobile.jpg" media="(max-width: 500px)" />
                                <source srcset="/wp-content/themes/upchannel/assets/img/slider-mk-tablet.jpg" media="(max-width: 950px)" />
                                <img src="/wp-content/themes/upchannel/assets/img/slider-mk.jpg" alt="minnkota" style="padding-bottom:50px;"/>
                            </picture>
                            <h1><a href="https://minnkota.com.au" target="_blank" class="website-links">minnkota.com.au</a></h1>
                        </li>

                        <li class="splide__slide">
                            <picture>
                                <source srcset="/wp-content/themes/upchannel/assets/img/slider-bla-mobile.jpg" media="(max-width: 500px)" />
                                <source srcset="/wp-content/themes/upchannel/assets/img/slider-bla-tablet.jpg" media="(max-width: 950px)" />
                                <img src="/wp-content/themes/upchannel/assets/img/slider-bla.jpg" alt="bla" style="padding-bottom:50px;"/>
                            </picture>
                            <h1><a href="https://bla.com.au" target="_blank" class="website-links">bla.com.au</a></h1>
                        </li>

                    </ul>
                </div>
            </div>
</section>

<section id="tech-stack">

</section>
           

            <div id="group2" class="parallax__group">
            <div class="container"  >
                        <div class="row">
                            <div class="col-12">
                                <?php the_field('tech_heading')?>
                                <?php the_field('tech_text') ?>
                            </div>
                        </div>
                    </div>
                <div class="parallax__layer parallax__layer--base">
                    <picture>
                            <source srcset="/wp-content/themes/upchannel/assets/img/tech-mobile-front.png" media="(max-width: 500px)" style="width:100vw;"class="title" alt="Front"/>
                            <source srcset="/wp-content/themes/upchannel/assets/img/tech-tablet-front.png" media="(max-width: 950px)" style="width:100vw;"class="title" alt="Front"/>
                            <img src="/wp-content/themes/upchannel/assets/img/tech-desktop-front.png" alt="bla" style="padding-bottom:50px" class="title" alt="Front"/>
                    </picture>
                    <button id="github-button"><a href="https://github.com/jono-au" target="_blank">GITHUB REPO</a></button>

                </div>
                <div class="parallax__layer parallax__layer--back">
                    <picture>
                            <source srcset="/wp-content/themes/upchannel/assets/img/tech-mobile-back.png" media="(max-width: 500px)" style="opacity: 0.2; width:100vw;" class="title" alt="Back"/>
                            <source srcset="/wp-content/themes/upchannel/assets/img/tech-tablet-back.png" media="(max-width: 950px)" style="opacity: 0.2; width:100vw;" class="title" alt="Back"/>
                            <img src="/wp-content/themes/upchannel/assets/img/tech-desktop-back.png" alt="bla" style="padding-bottom:50px; opacity: 0.2;" class="title" alt="Back"/>
                    </picture>
                </div>
            </div>




<section id="contact">
        <div class="contact section" >
         <div class="container-fluid">
            <div class="row wrapper-contact">
                <div>
                    <?php the_field('contact_heading')?>
                    <?php the_field('contact_text')?>                  
                </div>
            </div>
                
               
            <div class="row contact-details">
                    <div class="col-md-6">
                        <div class="contact-detail">
                            <?php the_field('contact_details') ?>
                        </div>
                    </div>  

                    <div class="col-md-6">
                        <div class="form-wrapper">
                        <?php echo do_shortcode("[contact-form-7 id='39' title='Contact form 1']"); ?>
                        </div>
                    </div>  

            </div>
         </div>
        </div>
</section>
      
    <script>
        // let section = document.querySelectorAll('section');
        // let navLinks = document.querySelectorAll('.main-nav a');

        // window.onscroll = () => {

        //     section.forEach(sec => {
        //         let top = window.scrollY;
        //         let offset = sec.offsetTop - 150;
        //         let height = sec.offsetHeight;
        //         let id = sec.getAttribute('id');

        //         if(top >= offset && top < offset + height) {
        //             navLinks.forEach(links => {
        //                 links.classList.remove('active');
        //                 document.querySelector('.main-nav a[href*=' + id + ']').classList.add('active');
        //             });

        //         };
        //     });
        // };
                







//         let menuSection = document.querySelectorAll('.main-nav li');

// // for clickable event
// menuSection.forEach(v=> {
//   v.onclick = (()=> {
//    setTimeout(()=> {
//       menuSection.forEach(j=> j.classList.remove('active'))
//     v.classList.add('active')
//   },300)
//    })
// })

//window scrolldown event

// window.onscroll = (()=> {
//   let mainSection = document.querySelectorAll('section');

//   mainSection.forEach((v,i)=> {
//     let rect = v.getBoundingClientRect().y
//     if(rect < window.innerHeight-200){
//       menuSection.forEach(v=> v.classList.remove('active'))
//       menuSection[i].classList.add('active')
//     }
//   })
// })


    </script>

    <style>
        /* .main-nav li{
            transition: .3s;
        }
        .main-nav li.active a{
            color: #ffd79c;
        } */
        /* .main-nav li.active{
            background: pink;
        } */
        /* .main-nav li a {
            color: white;
        } */
    </style>

<?php get_footer(); ?>
