function show(){
    var visible = document.getElementById('password')
    if(visible.type === "password"){
        visible.type = "text"
    }
    else{
        visible.type = "password"
    }
    
}