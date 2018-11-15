$(function(){
    $("#check").on("click", function(){
        if(document.getElementById("user_name").value == "" ||
            document.getElementById("user_pass").value == ""){
            alert("There is an empty item\nPlease enter.");
            return false;
        }
        if(document.getElementById("user_pass").value !=
            document.getElementById("user_pass2").value){
            alert('Password doesn'+'t match.');
            return false;
        }
    });
})
