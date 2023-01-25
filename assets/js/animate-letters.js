 //what to observe
 const content = document.querySelectorAll('.txtcontent');

 const observer = new IntersectionObserver( 
     entries => {
        entries.forEach(entry => {
        entry.target.classList.toggle('show', entry.isIntersecting);





                //animate letters
                // Wrap every letter in a span
                var textWrapper = document.querySelector('.ml6 .letters');
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                //after splitting letters add link break between love / websites
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

                //animate letters
                // Wrap every letter in a span
                var textWrapper2 = document.querySelector('.ml7 .letters');
                textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                //after splitting letters add link break between designer / websites
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


                //animate letters
                // Wrap every letter in a span
                var textWrapper3 = document.querySelector('.ml8 .letters');
                textWrapper3.innerHTML = textWrapper3.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                //after splitting letters add link break between designer / websites
                const insertAfter3 = (element3, htmlString3) => element3.insertAdjacentHTML("afterend",htmlString3);
                const element3 = document.querySelector('#contact .letters .letter:nth-child(7)');
                const element4 = document.querySelector('#contact .letters .letter:nth-child(16)');
                const element5 = document.querySelector('#contact .letters .letter:nth-child(23)');
                const htmlString3 = '<br>';
                insertAfter3(element3, htmlString3);
                insertAfter3(element4, htmlString3);
                insertAfter3(element5, htmlString3);


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





 })

 }, {
     threshold: 0.5,
    
     
 });

content.forEach(cons => {
observer.observe(cons);
});


 