const scroll = document.querySelector(".arrow");

scroll.onclick = ()=>{
    window.scrollTo({
        top: 0,
         behavior: 'smooth'
    });
}