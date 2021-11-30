    // variables
    let sub = document.getElementById("sub");
    let foodEmoji = document.querySelectorAll(".food-emoji");
    let serviceEmoji = document.querySelectorAll(".service-emoji");
    let leftLink =  document.getElementsByClassName("form");
    let rightLink = document.getElementsByClassName("comment");
    let foodRate = document.getElementById("food-rate");
    let serviceRate = document.getElementById("service-rate");
    let fakeComment = document.getElementById("fakeComment");
    let comment = document.getElementById("comment");
    let next = document.getElementsByClassName("next");
    

        // sets fakeComment value to actual comment
        fakeComment.addEventListener("keyup", function (e) {
            comment.value = e.target.value;
        })


        // loops through elements with className Emoji
        for (let a=0 ; a < foodEmoji.length ; a++) {

            foodEmoji[a].addEventListener("click", function() {
                for (let b=0 ; b < foodEmoji.length ; b++) {
                    // returns previous emojis to current size after click on current emojis
                    foodEmoji[b].classList.remove('make_emoji_big')
                    // removes red and bold properties from previous emoji text after clicking current one
                    foodEmoji[b]['previousElementSibling'].classList.remove('text-stand-out')
                }                    
                // sets ratings input value to emoji text value;
                foodRate.value = foodEmoji[a]['previousElementSibling'].innerHTML
                console.log(`food rate is ${foodRate.value}`)

                // brings service ratings div into view
                next[0].classList.add('bring-x');

                // makes NEXT comes into view after selecting any emoji for food ratings 
                gsap.to(".next", {
                    duration: 0.5,
                    translateX : 0,
                    opacity: 1, 
                    delay: 0, 
                    stagger: 0.1,
                    ease: "elastic", 
                    force3D: true
                }); 

                // makes text on eoojis red when on is clicked - gived classof 'text-stand-out'
                foodEmoji[a]['previousElementSibling'].classList.add('text-stand-out')

                // makes the emoji which was cliked big -- gives it a class of 'make_emoji_big'
                foodEmoji[a].classList.add('make_emoji_big')                     
            })
        }     


        // loops through elements with className Emoji
        for (let a=0 ; a < foodEmoji.length ; a++) {

            serviceEmoji[a].addEventListener("click", function() {
                for (let b=0 ; b < serviceEmoji.length ; b++) {
                    // returns previous emojis to current size after click on current emojis
                    serviceEmoji[b].classList.remove('make_emoji_big')
                    // removes red and bold properties from previous emoji text after clicking current one
                    serviceEmoji[b]['previousElementSibling'].classList.remove('text-stand-out')
                }                    
                // sets ratings input value to emoji text value;
                serviceRate.value = serviceEmoji[a]['previousElementSibling'].innerHTML
                console.log(`service rate is ${serviceRate.value}`)

                // makes text on eoojis red when on is clicked - gived classof 'text-stand-out'
                serviceEmoji[a]['previousElementSibling'].classList.add('text-stand-out')

                // makes the emoji which was cliked big -- gives it a class of 'make_emoji_big'
                serviceEmoji[a].classList.add('make_emoji_big')                     
            })
        }     

        
    // maakes emojis comes to view on first page load
        gsap.from("section", {
            duration: 2,
            translateY : -100,
            opacity: 0, 
            delay: 0.5, 
            stagger: 0.1,
            ease: "elastic", 
            force3D: true
        });     

    // sends emoji div (section) offview when "submit with comments" is clicked
    sub.addEventListener("click" , function() {
        gsap.to("section", {
            duration: 2,
            translateY : -1000,
            opacity: 1, 
            delay: 0.5, 
            stagger: 0.1,
            ease: "elastic", 
            force3D: true
        });        
        
        // brings comment on for textarea into view  when "submit with comments"is cliked
        gsap.to(".form-comment", {
            duration: 2,
            top : 180,
            opacity: 1, 
            delay: 1, 
            stagger: 0.1,
            ease: "elastic", 
            force3D: true
        });        
        
        // brings "sumbit" into view when first emoji  is clicked
        gsap.to(".comment", {
            duration: 2,
            translateX : -1000,
            opacity: 0, 
            delay: 0.3, 
            stagger: 0.1,
            ease: "elastic", 
            force3D: true
        }); 
        
        // brings "submit with comments" into view when first emoji  is clicked
        gsap.to(".form", {
            duration: 0.5,
            translateY : -100,
            opacity: 1, 
            delay: 1, 
            stagger: 0.1,
            ease: "elastic", 
            force3D: true
        });       
        
        gsap.to(".rate-service", {
            duration: 1,
            left: 3000,
            opacity: 1, 
            delay: 1, 
        });         
    })        
    
    // when you on next rate service div appears    
    next[0].addEventListener("click", function() {
        gsap.to(".rate-food", {
            duration: 1,
            translateX : 2000,
            opacity: 0, 
            delay: 1, 
        });    

        gsap.to(".rate-service", {
            duration: 1,
            left: 0,
            opacity: 1, 
            delay: 1, 
        });            
        
        gsap.to(".next" ,  {
            duration: 1,
            translateX : 2000,
            opacity: 0, 
            delay: 1,             
        });

        leftLink[0].classList.add('bring-back');
        rightLink[0].classList.add('bring-back');
    })
   