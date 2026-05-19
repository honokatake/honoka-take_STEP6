document.addEventListener("DOMContentLoaded", function(){

    document.getElementById('myForm').addEventListener("submit", function(event){
    
    const name = document.getElementById('name').value;
    const companyName = document.getElementById('companyName').value;
    const email = document.getElementById('email').value;
    const age = document.getElementById('age').value;
    const message = document.getElementById('message').value;
    
    if (
        name === "" ||
        companyName === "" ||
        email === "" ||
        age === "" ||
        message === "" 
    ){
        event.preventDefault();
        alert ("必須項目が未入力です。入力内容をご確認ください。");
        return;
        }
    const checkMessage =
    'この内容で送信しますか？\n\n' +
    '名前；'  + name + '\n' +
    '会社名：' + companyName + '\n' +
    'メール：' + email + '\n' +
    '年齢：' + age + '\n' +
    'お問合せ内容：' + '\n' + message;

    const result = confirm(checkMessage);

    if(result === false){
        event.preventDefault();
    }

    });
    
    const footer = document.querySelector("footer");
    const button = document.querySelector(".colorButton");
    
    const colors = ["blue", "red", "yellow", "gray" ];
    
    let index = 0;
    
    button.addEventListener("click", function(){
        footer.style.backgroundColor = colors[index];
        index++;
        if(index >= colors.length){
            index = 0;
            }
        });
    });
    