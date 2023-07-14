function show(){
    var visible = document.getElementById('new-password')
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