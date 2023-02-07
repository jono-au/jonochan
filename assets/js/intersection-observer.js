//Intersection observer #projects section
 const sectionProjects = document.querySelector('#projects');

 const observerProjects = new IntersectionObserver( 
     entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting){
                document.querySelector('#projects .txtcontent').classList.add('show');
   
                    var textWrapper2 = document.querySelector('.ml7 .letters');
                    textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                    const insertAfter2 = (element2, htmlString2) => element2.insertAdjacentHTML("afterend",htmlString2);
                    const element2 = document.querySelector('#projects .letters .letter:nth-child(8)');
                    const htmlString2 = '<br>'
                    insertAfter2(element2, htmlString2);

                    anime.timeline()
                    .add({
                        targets: '.ml7 .letter',
                        translateY: ["1.1em", 0],
                        translateZ: 0,
                        duration: 750,
                        delay: (el, i) => 50 * i
                    }).add({
                        targets: '.ml7',
                        opacity: 1,
                        duration: 1000,
                        easing: "easeOutExpo",
                        delay: 1000
                    });

                    observerProjects.unobserve(sectionProjects);
            } return;
        })
     }, {
     threshold: 0.8,   
 });

 observerProjects.observe(sectionProjects);




 //Intersection observer #contact section
const sectionContact = document.querySelector('#contact');

const observerContact = new IntersectionObserver( 
    entries => {
       entries.forEach(entry => {

            if (entry.isIntersecting){
                document.querySelector('#contact .txtcontent').classList.add('show');
            
                    var textWrapper3 = document.querySelector('.ml8 .letters');
                    textWrapper3.innerHTML = textWrapper3.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

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



