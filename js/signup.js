function show(){
    var visible = document.getElementById('password')
    var visible1 = document.getElementById('re-password')
    if(visible.type === "password" && visible1.type === "password"){
        visible.type = "text"
        visible1.type = "text"
    }
    else{
        visible.type = "password"
        visible1.type = "password"
    }
    
}
// function passCheck(){
//     var pass1 = document.getElementById('password')
//     var pass2 = document.getElementById('re-password')
//     if(pass1==pass2){
//         alert('true')
//         // alert
//     }
// }