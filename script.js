var pages = Array.from(document.getElementsByClassName("page"));
var themeDot = Array.from(document.getElementsByClassName('theme-dot'));

    pages.forEach(page=>{        
        page.addEventListener('click',()=>{
            pages.forEach(page=>{
                page.classList.remove('underline');
            })
            page.classList.add('underline');
        })
    })
    let theme = localStorage.getItem('theme')

    if(theme == null){
        setMode('light')
    }else{
        setMode(theme)
    }
   

themeDot.forEach(theme=>{
    theme.addEventListener('click',()=>{
        var mode = theme.dataset.mode;
        setMode(mode)
    })
})

function setMode(mode){
    
        document.getElementById('theme-style').href=mode+'.css'
    
        localStorage.setItem('theme', mode)
}