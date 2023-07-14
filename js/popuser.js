function usertab(){
    pop = document.getElementById('user').classList.add('active')
    over = document.getElementById('overlay').classList.add('active')

}
function closeusertab(){
    pop = document.getElementById('user').classList.remove('active')
    over = document.getElementById('overlay').classList.remove('active')
}
function activate(press) {
    Cobtn = document.getElementById('complete').classList.remove('active')
    Hbtn = document.getElementById('home').classList.remove('active')
    Pbtn = document.getElementById('persinfo').classList.remove('active')
    Cbtn = document.getElementById('getid').classList.remove('active')
    Abtn = document.getElementById('getpass').classList.remove('active')
    Rbtn = document.getElementById('reqchng').classList.remove('active')
    Tbtn = document.getElementById('taxid').classList.remove('active')
    yes = press
    yes.classList.add('active')
}

function progress(){
    var val = document.getElementById('progressvalue').value
    
    var width = document.getElementById('actualprogress').style
    wide = val.concat('%')
    
    width.width = wide
    // alert(width)
    // alert (val)
}
    
    // poper = 0
    // if(poper = 0){
        // pop.classList.add('active')
        // pop.style = 0
    // }
    // else {
    //     pop.classList.remove('active')
    // }
    // trying = document.getElementById(yes).classList.add('active')
// act = document.getElementById('home').classList.add('active')