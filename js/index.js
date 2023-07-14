function tab(){
    // document.getElementsByI('message').classList.add('active')
    document.getElementById('services').classList.add('active')
    document.getElementById('overlay').classList.add('active')
}

function closetab(){
    // document.getElementsByI('message').classList.add('active')
    document.getElementById('services').classList.remove('active')
    over = document.getElementById('overlay').classList.remove('active')
}

function mov(){
    document.getElementById('services').classList.remove('active')
    document.getElementById('overlay').classList.remove('active')
    var height = document.getElementById('top').scrollHeight + document.getElementById('main').scrollHeight
    window.scrollTo({
        top: height,
        behavior: 'smooth',
    })
}
function movp(){
    document.getElementById('services').classList.remove('active')
    document.getElementById('overlay').classList.remove('active')
    var height = document.getElementById('top').scrollHeight + document.getElementById('main').scrollHeight
    height += 200
    window.scrollTo({
        top: height,
        behavior: 'smooth',
    })

}