const popupCookie = document.querySelector('.cookie-popup');
const backdropCookie = document.querySelector('.backdrop-cookie')

function ctaCookies(){
    let choiceCookie = document.cookie;
    if(choiceCookie == ""){
    popupCookie.style.display="block";
    backdropCookie.style.display="flex";
    }
}

function acceptCookie(){
    popupCookie.style.display="none";
    backdropCookie.style.display="none";
    document.cookie = "allowCookies=1";
}

function refuseCookie(){
    popupCookie.style.display="none";
    backdropCookie.style.display="none";
    document.cookie = "allowCookies=0";
}
