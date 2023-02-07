    
    
    <footer id="footer" class="site-footer">
        <p class="source" ><a href="<?php echo esc_url( home_url('/')); ?>" rel="home"><span style="color:#ff77a4;">&#60;</span><span style="color:#ffd79c">JONO</span><span style="color:#ff77a4;">&#62;</span><span style="color:#aef1ff">Web</span><span style="color:#ff77a4;">++</span></a></p>
    </footer>
    
    </div>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>


</script>
<script>
   $(window).scroll(function() {
        $(".top").css("opacity", 1 - $(window).scrollTop() / 150);
        $(".top-content").css("opacity", 1 - $(window).scrollTop() / 700);
});
</script>


<script>

window.addEventListener("scroll", function() {
    if (window.scrollY > 50) {
        document.querySelector(".contact-icons").style.transform= "translateX(0)";
    } else {
        document.querySelector(".contact-icons").style.transform= "translateX(-35px)";
    }
});

</script>






<script>
//Intersection observer #aboutme section
const sectionAboutme = document.querySelector('#aboutme');

const observerAboutme = new IntersectionObserver( 
    entries => {

       entries.forEach(entry => {
        if (entry.isIntersecting){
                document.querySelector('#aboutme .txtcontent').classList.add('show');
            
                var textWrapper = document.querySelector('.ml6 .letters');
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                const insertAfter = (element, htmlString) => element.insertAdjacentHTML("afterend",htmlString);
                const element = document.querySelector('#aboutme .letters .letter:nth-child(5)');
                const htmlString = '<br>'
                insertAfter(element, htmlString);

                anime.timeline()
                .add({
                    targets: '.ml6 .letter',
                    translateY: ["1.1em", 0],
                    translateZ: 0,
                    duration: 750,
                    delay: (el, i) => 50 * i
                }).add({
                    targets: '.ml6',
                    opacity: 1,
                    duration: 1000,
                    easing: "easeOutExpo",
                    delay: 1000
                });

                observerAboutme.unobserve(sectionAboutme);

            } return;
        })
    }, {
        threshold: 0.5,   
    });

observerAboutme.observe(sectionAboutme);

</script>



<script>
//Intersection observer #skills section
const sectionSkills = document.querySelector('#skills');

const observerSkills = new IntersectionObserver( 
    entries => {
       entries.forEach(entry => {
        if (entry.isIntersecting){
        
            document.querySelector('#skills .txtcontent').classList.add('show');
                 
            var textWrapper4 = document.querySelector('.ml9 .letters');
            textWrapper4.innerHTML = textWrapper4.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

            anime.timeline()
            .add({
                targets: '.ml9 .letter',
                translateY: ["1.1em", 0],
                translateZ: 0,
                duration: 750,
                delay: (el, i) => 50 * i
            }).add({
                targets: '.ml9',
                opacity: 1,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });

            observerSkills.unobserve(sectionSkills);

        } return;
      })

    }, {
    threshold: 0.3,   
});

observerSkills.observe(sectionSkills);

</script>





<script>

//intersection observer #technology section
 const sectionTechnology = document.querySelector('#technology');

 const observerTechnology = new IntersectionObserver( 
     entries => {
        entries.forEach(entry => {
        
            if (entry.isIntersecting){
                document.querySelector('#technology .txtcontent').classList.add('show');

                var textWrapper = document.querySelector('.ml10 .letters');
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                const insertAfter = (element, htmlString) => element.insertAdjacentHTML("afterend",htmlString);
                const element = document.querySelector('#technology .letters .letter:nth-child(9)');
                const htmlString = '<br>'
                insertAfter(element, htmlString);

                anime.timeline()
                .add({
                    targets: '.ml10 .letter',
                    translateY: ["1.1em", 0],
                    translateZ: 0,
                    duration: 750,
                    delay: (el, i) => 50 * i
                }).add({
                    targets: '.ml10',
                    opacity: 1,
                    duration: 1000,
                    easing: "easeOutExpo",
                    delay: 1000
                });

                observerTechnology.unobserve(sectionTechnology);

            } return;    
        })

     }, {
        threshold: 0.5,
    });

    observerTechnology.observe(sectionTechnology);
</script>





<script>
//Intersection observer #contact section
const sectionContact = document.querySelector('#contact');

const observerContact = new IntersectionObserver( 
    entries => {
       entries.forEach(entry => {

            if (entry.isIntersecting){
                document.querySelector('#contact .txtcontent').classList.add('show');
            
                    var textWrapper3 = document.querySelector('.ml8 .letters');
                    textWrapper3.innerHTML = textWrapper3.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                    //after splitting letters add link break between lets work / together
                    const insertAfter3 = (element3, htmlString3) => element3.insertAdjacentHTML("afterend",htmlString3);
                    const element3 = document.querySelector('#contact .letters .letter:nth-child(9)');
                    const htmlString3 = '<br>';
                    insertAfter3(element3, htmlString3);



                    anime.timeline()
                    .add({
                        targets: '.ml8 .letter',
                        translateY: ["1.1em", 0],
                        translateZ: 0,
                        duration: 750,
                        delay: (el, i) => 50 * i
                    }).add({
                        targets: '.ml8',
                        opacity: 1,
                        duration: 1000,
                        easing: "easeOutExpo",
                        delay: 1000
                    });

                observerContact.unobserve(sectionContact);
            } return;
         
        })

    }, {
    threshold: 0.2,   
});

observerContact.observe(sectionContact);

</script>



<script>

  // animate
document.addEventListener("DOMContentLoaded", ()=>{
	let options = {
		root: null,
		threshold: 0.5
	};
	let observer = new IntersectionObserver(beTouching,options);
	document.querySelectorAll('.svg-animate').forEach(line=>{
		observer.observe(line);
	})
});

function beTouching(entries, observer){

	entries.forEach(entry=> {

		if(entry.isIntersecting){
      entry.target.classList.add('visible');
          anime({
            targets: ".svg-animate.visible #image-svg path",
            strokeDashoffset: [anime.setDashoffset,0],
            easing: 'linear',
            duration: 1500,
            direction: 'normal',
            })

            // observer.unobserve(entry.target);
            } 
 
	});

};
</script>
<style>
    .svg-animate {
    width: 100%;
    height: auto;
    max-width: 500px;
    position: absolute;
}
.svg-animate {
    opacity: 0;
}

  .svg-animate.visible {
    opacity: 1;
  }
</style>


    <?php wp_footer(); ?>
    </body>
</html>