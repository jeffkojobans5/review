    // variables
    let sub = document.getElementById("sub");
    let emoji = document.getElementsByClassName("emoji");
    let leftLink = document.getElementsByClassName("form");
    let rightLink = document.getElementsByClassName("comment");
    let ratings = document.getElementById("ratings");
    let fakeComment = document.getElementById("fakeComment");
    let comment = document.getElementById("comment");


        // sets fakeComment value to actual comment
        fakeComment.addEventListener("keyup", function (e) {
            comment.value = e.target.value;
        })


        // loops through elements with className Emoji
        for (let a=0 ; a < emoji.length ; a++) {
            emoji[a].addEventListener("click", function() {
                for (let a=0 ; a < emoji.length ; a++) {
                    // returns previous emojis to current size after click on current emojis
                    emoji[a].classList.remove('make_emoji_big')
                    // removes red and bold properties from previous emoji text after clicking current one
                    emoji[a]['previousElementSibling'].classList.remove('text-stand-out')
                }    

                // sets ratings input value to emoji text value;
                ratings.value = emoji[a]['previousElementSibling'].innerHTML
                console.log(ratings.value)

                // brings "submit wiht comments" into view when 1 emoji is clicked
                rightLink[0].classList.add('bring-back') 

                // brings 'submit' into view when 1 emoji is clicked
                leftLink[0].classList.add('bring-back')

                // makes text on eoojis red when on is clicked - gived classof 'text-stand-out'
                emoji[a]['previousElementSibling'].classList.add('text-stand-out')

                // makes the emoji which was cliked big -- gives it a class of 'make_emoji_big'
                emoji[a].classList.add('make_emoji_big')                     
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
            translateY : 400,
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
    })        
   