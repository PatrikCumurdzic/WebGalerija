var text = document.getElementById('tekst');
var text2 =document.getElementById('tekst2');
var about =document.getElementById('about');
var newDom = '';
var newDom2 = '';
var newDom3 = '';
var animationDelay = 6;

        for(let i = 0; i < text.innerText.length; i++)
        {
            newDom += '<span class="char">' + (text.innerText[i] == ' ' ? '&nbsp;' : text.innerText[i])+ '</span>';
        }

        text.innerHTML = newDom;
        var length = text.children.length;

        for(let i = 0; i < length; i++)
        {
            text.children[i].style['animation-delay'] = animationDelay * i + 'ms';
        }


        for(let i = 0; i < text2.innerText.length; i++)
        {
            newDom2 += '<span class="char1">' + (text2.innerText[i] == ' ' ? '&nbsp;' : text2.innerText[i])+ '</span>';
        }

        text2.innerHTML = newDom2;
        var length2 = text2.children.length;

        for(let i = 0; i < length; i++)
        {
            text2.children[i].style['animation-delay'] = animationDelay * i + 'ms';
        }


        for(let i = 0; i < about.innerText.length; i++)
        {
            newDom3 += '<span class="char1">' + (about.innerText[i] == ' ' ? '&nbsp;' : about.innerText[i])+ '</span>';
        }

        about.innerHTML = newDom3;
        var length2 = about.children.length;

        for(let i = 0; i < length; i++)
        {
            about.children[i].style['animation-delay'] = animationDelay * i + 'ms';
        }