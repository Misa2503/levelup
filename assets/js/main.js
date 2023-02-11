var box = document.querySelector('.box')
// window.addEventListener('load', function(){
//     console.log(box)
// })

var hideBtn = document.querySelector('#hide-div-btn')
var showBtn = document.querySelector('#show-div-btn')


hideBtn.addEventListener('click', function() {
    box.style.display = "none"
    
})

showBtn.addEventListener('click', function(){
    box.style.display = "inline-block"
})


