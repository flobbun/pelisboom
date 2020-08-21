usernameField = document.getElementById("usernameField");
emailField = document.getElementById("emailField");
passwordField = document.getElementById("passwordField");
sendButton = document.getElementById("sendButton");

usernameCheck = false;
emailCheck = false;
passwordCheck = false;

sendButton.disabled = true;



usernameField.addEventListener("keyup", () =>{
    username = usernameField.value;

    if(username.length > 6){
        usernameCheck = true;
    }else{
        usernameCheck = false;
    }
});
emailField.addEventListener("keyup", () =>{
    email = emailField.value;

    if(email.length > 6){
        emailCheck = true;
    }else{
        emailCheck = false;
    }
});
passwordField.addEventListener("keyup", () =>{
    password = passwordField.value;

    if(password.length > 6){
        passwordCheck = true;
    }else{
        passwordCheck = false;
    }
});

addEventListener("keyup", ()=>{
    if(usernameCheck == true && emailCheck == true && passwordCheck == true){
        sendButton.disabled = false;
    }else{
        sendButton.disabled = true;
    }
})




