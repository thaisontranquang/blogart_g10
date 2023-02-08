const popupCookie = document.querySelector('.cookie-popup');
const backdropCookie = document.querySelector('.backdrop-cookie')

function ctaCookies(){
    allowCookies = Cookies.get('allowCookies');
    if(allowCookies != 1 && allowCookies != 0){
    Cookies.set('fontSize', 16);
    popupCookie.style.display="block";
    backdropCookie.style.display="flex";
    }
}

function acceptCookie(){
    popupCookie.style.display="none";
    backdropCookie.style.display="none";
    Cookies.set('allowCookies', 1)
}

function refuseCookie(){
    popupCookie.style.display="none";
    backdropCookie.style.display="none";
    Cookies.set('allowCookies', 0)
}

function increaseSize(){
    if(Cookies.get('fontSize') < 36){
    Cookies.set('fontSize', parseInt(Cookies.get('fontSize')) + 2);
    window.location.reload();
    }
}

function decreaseSize(){
    if(Cookies.get('fontSize') > 10){
    Cookies.set('fontSize', parseInt(Cookies.get('fontSize')) - 2);
    window.location.reload();
    }
}

function resetSize(){
    Cookies.set('fontSize', 16);
    window.location.reload();
}
