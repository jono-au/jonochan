<? get_header(); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div id="home" class="home section">
                <?php echo do_shortcode("[rev_slider alias='slider-1'][/rev_slider]"); ?>
            </div>

            
            <div id="about-me" class="about section">
                <div class="row"> 
                    <div class="column a" id="jono" >
                        <!-- <h3>Column 1</h3>
                        <p>Some text..</p> -->
                        <div style="position: relative;">
                        <img
                            id="jono-think" 
                            src="/wp-content/themes/jono/assets/img/think.png" 
                            alt="think"
                        >
                        <img 
                            id="jono-img"
                            src="/wp-content/themes/jono/assets/img/jono-min.png" 
                            alt="jono"
                            
                            >
                        </div>
                       
                    </div>
                    <div class="column a" id="jono-text">
                        <div class="about-txt">
                            <h6 class="webmaster-heading1">//ABOUT ME</h6>
                            <h3 class="heading-txt">
                                <span style="color: #e7618b">I design and code</span>
                                <span > beautiful websites. </span>
                                <span style="color: #3e3de6">I enjoy working with talented designers, developers, marketers, entreprenuers </span>
                                and would 
                                <span style="color: #e7618b">love to work with you.</span>
                            </h3>
                            <p>
                                <strong>Since 2016 I was lucky enough to fall in love with web development.</strong> 
                                I started creating websites just for fun and ever since then I've never stopped learning new languages and programming skills.
                                I enjoy working with different technologies across both frontend and backend development. 
                                I'm a creative problem solver able to take complex ideas and use technology to solve user and business needs.
                            </p>

                        </div>
                        
                    </div>
                </div>
            </div>
       

            <div id="skills" class="skills section">
                <div class="skills-wrapper row">
                    <div class="skills-txt heading-txt">
                        <h6 class="webmaster-heading1">// WHAT I DO?</h6>
                        <h3 style="display:block">
                        <span style="color:#f47aa0;">I can bring your digital ideas to life. </span>
                        Let me <span style="color:#423cc1;">look after your</span> 
                        <span style="color:#f47aa0;">online presence</span> 
                        and give you freedom to focus on 
                        <span style="color:#423cc1;">business.</span>
                        </h3>
                              
                    </div>

                    <div class="row">
                        <div class="column a">
                            <img style="height: 100px; width:100px;"src="/wp-content/themes/jono/assets/img/paintbrush-icon.png" alt="design">
                            <h3>Design</h3>
                            <p>Following your creative and technical brief I'll design the perfect UI/UX that satisfies both user and business needs. I’ll design a responsive website that looks and works great on all devices.</p>
                        </div>
                        <div class="column a">
                                <img style="height: 100px; width:100px;"src="/wp-content/themes/jono/assets/img/code-icon.png" alt="code">
                                <h3>Code</h3>
                                <p>Let's start coding and integrating custom templates and functionality. I code to the highest standards following best practices, producing clean simple code. Your website goes through rigorous testing to ensure it’s of the highest quality with W3C validation.</p>          
                        </div>
                    </div>  

                    <div class="row">
                        <div class="column a">
                            <img style="height: 100px; width:100px;"src="/wp-content/themes/jono/assets/img/cloud-icon.png" alt="cloud">
                            <h3>Cloud</h3>
                            <p>I can architect your servers and deploy an optimised solution for your website. Your website will be secure, fast and handle any amount of traffic. I have experience with WHM, cPanel, VPS and Google Cloud.</p>
                        </div>
                        <div class="column a">
                            <div>
                                <img style="height: 100px; width:100px;"src="/wp-content/themes/jono/assets/img/support-icon.png" alt="support">
                                <h3>Support</h3>
                                <p>I'll continue to service your website and keep it up to date with scheduled maintenance and software updates. I can take care of your Content Management, SEO, SEM, DNS and Google Analytics. Should you have any questions you can contact me anytime on mobile, video call or email. </p>
                            </div>           
                        </div>
                    </div> 

                </div>
            </div>

            

            <div id="works" class="works section">
                <div class="works-wrapper">
                    <div class="works-txt heading-txt">
                        <h6 class="webmaster-heading1">// MY WORK</h6>
                        <h3 style="display:block">
                            <span style="color:#f47aa0;">Feel free to look through some of my recent work.</span> 
                            <span style="color:#423cc1;">Let's work together!</span>
                        </h3>
                    </div>  
                    
                    
                </div>
            </div>
             

            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide"><img
                            srcset="/wp-content/themes/jono/assets/img/silder-hb-mobile.jpg 300w,
                                    /wp-content/uploads/2021/11/slider-hb.jpg 1900w" 
                            sizes="(max-width: 450px) 280px,
                                    1900px"
                            src="/wp-content/uploads/2021/11/slider-hb.jpg" 
                            alt="humminbird"
                            style="padding-bottom:50px;">
                            <h1><a href="https://humminbird.com.au" target="_blank" class="website-links">humminbird.com.au</a></h1>

                        </li>

                        <li class="splide__slide"><img 
                            srcset="/wp-content/themes/jono/assets/img/silder-mk-mobile.jpg 300w,
                                    /wp-content/uploads/2021/11/slider-mk.jpg 1900w" 
                            sizes="(max-width: 450px) 280px,
                                    1900px"
                            src="/wp-content/uploads/2021/11/slider-mk.jpg" 
                            alt="minnkota"
                            style="padding-bottom:50px;">
                            <h1><a href="https://minnkota.com.au" target="_blank" class="website-links">minnkota.com.au</a></h1>
                        </li>

                        <li class="splide__slide"><img
                            srcset="/wp-content/themes/jono/assets/img/silder-bla-mobile.jpg 300w,
                                    /wp-content/uploads/2021/11/slider-bla.jpg 1900w" 
                            sizes="(max-width: 450px) 280px,
                                    1900px" 
                            src="/wp-content/uploads/2021/11/slider-bla.jpg" 
                            alt="bla"
                            style="padding-bottom:50px;">
                            <h1><a href="https://bla.com.au" target="_blank" class="website-links">bla.com.au</a></h1>
                        </li>

                    </ul>
                </div>
            </div>


            




            

        <div id="tech-stack" class="tech section" ">
            <div class="tech-wrapper" style="padding: 100px 7%">
                    <h6 class="webmaster-heading1" style="background: white;">// TECH STACK</h6>
                        <h3 style="display:block; max-width:1080px;">
                            <span style="color:#f47aa0;">Here are some of my favorite technologies.</span> 
                            <span style="color:white;">I enjoy working with both <span style="color:#ffd79c;">Frontend</span> and <span style="color:#ffd79c;">Backend</span> technologies.</span>
                        </h3>
                
                </div>
                

                <div class="parallax">
                    <div class="parallax__layer parallax__layer--back">
                        <img style="opacity: 0.2;"class="title" 
                        srcset="/wp-content/themes/jono/assets/img/tech-mobile-back.png 480w,
                                /wp-content/themes/jono/assets/img/tech-desktop-back.png 1900w"

                        sizes="
                        (max-width: 480px) 420px,
                        1900px
                        "

                        src="/wp-content/themes/jono/assets/img/tech-desktop-back.png" alt=Back"">
                    </div>

                    <div class="parallax__layer parallax__layer--base">
                        <img style="max-width:60%;" class="title" 
                        
                        srcset="/wp-content/themes/jono/assets/img/tech-mobile-front.png 480w,
                                /wp-content/themes/jono/assets/img/tech-desktop-front.png 1900w"

                        sizes="
                        (max-width: 480px) 420px,
                        1900px
                        "
                        src="/wp-content/themes/jono/assets/img/tech-desktop-front.png" alt="Front">
                    </div>
                </div>


            <button id="github-button"><a href="https://github.com/jono-au" target="_blank">GITHUB REPO</a></button>



            </div>



                
            <style>

* { margin:0; padding:0; }
                .tech.section {
                    background-color: #5300a1;
                }
                   
    .parallax{
        height:100vh;
        overflow-x:hidden;
        overflow-y:auto;
        -webkit-perspective:1px;
        perspective:3px;
        
    }

    .parallax::-webkit-scrollbar {
  display: none;
}
    .parallax__layer{
        position:absolute;
        top:0;
        left:0;
        right:0;
        bottom:0;
    }

.parallax__layer--base{
    -webkit-transform:translateZ(0);
    transform:translateZ(0);
}

.parallax__layer--back {
    -webkit-transform:translateZ(-1px);
    transform:translateZ(-1px);
}
/* *{margin:0;padding:0;} */
.parallax{font-size:200%;}

.parallax__layer{padding:60vh 0;}

    .title{
        position:absolute;
        left:50%;
        top:50%;
        -webkit-transform:translate(-50%, -50%);
        transform:translate(-50%, -50%);
    }

                </style>
                
             
            <div class="contact section" id="contact" >
                
                    <div class="wrapper-contact">
                        <div class="row">
                        <div class="works-txt">
                            <div class="works-heading heading-txt">
                                <h6 class="webmaster-heading1" style="color: white; background: rgb(255 255 255 / 2%);">// SAY HELLO</h6>
                                <h3> <span style="color:#aef1ff;">Love to hear about your big ideas!</span> <span style="color:#f2f5ff;">Let's talk about your</span><span style="color:#ffd79c;"> web project</span><span style="color:#e8a3ec;">?</span> </h3>                    
                            </div>

                            <div class="row contact-details">

                                <div class="column col-contact">
                                    <div class="contact-detail">
                                        <h4>Available Now</h4>
                                        <p>Feel free to contact me anytime by phone or email and let's organise a catch up.</p>
                                        <h4>Mon - Sun</h4>
                                        <h3>24hrs</h3>
                                        <h4>Mobile</h4>
                                        <h3>0421 238 196</h3>
                                        <h4>Brisbane, Australia</h4>
                                    </div>
                                </div>  

                                <div class="column col-contact2">
                                    <div class="form-wrapper">
                                    <?php echo do_shortcode("[contact-form-7 id='39' title='Contact form 1']"); ?>
                                    </div>
                                </div>  

                            </div>
                        </div>
                    </div>
                </div>
            
            </div>  
        </main>
    </div>
    
<? get_footer(); ?>