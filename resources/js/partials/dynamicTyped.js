import Typed from "typed.js";


const dynamicTypeSpan = document.querySelector('#jsTyping')

if(dynamicTypeSpan){
    const typed = new Typed("#jsTyping", {
        strings: ["Niezapomniane góry", "Urokliwe szlaki", "Malownicze krajobrazy" , 'Spokojne Jeziora i Góry '],
        typeSpeed: 200,
        loop: true,
        loopCount: Infinity,
        backDelay: 700,
    });
}