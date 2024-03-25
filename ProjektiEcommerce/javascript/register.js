const emri = document.getElementById('fname');
const mbiemri = document.getElementById('lname');
const username = document.getElementById('username');
const emaili =document.getElementById('email');
const passwordi = document.getElementById('password');

const emRegex = /^[A-Za-z0-9]{2,}$/;
const usernameRegex = /^[A-Za-z]{6,}$/;
const emailRegex = /^[A-Za-z0-9]{2,10}[@][a-z]{1,10}\.[a-z]{2,3}$/;
const passiRegex = /^([A-Za-z0-9\S]{8,20})$/;

function signUp(){
    if(!emRegex.test(emri.value)||!emRegex.test(mbiemri.value)||!usernameRegex.test(username.value)||!emailRegex.test(emaili.value)||!passiRegex.test(passwordi.value)){
    if(!emRegex.test(emri.value)){
        emri.style.border='1.5px solid red';
    }else{
        emri.style.border='1.5px solid green';
    }
    if(!emRegex.test(mbiemri.value)){
        mbiemri.style.border='1.5px solid red';
    }else{
        mbiemri.style.border='1.5px solid green';
    }
    if(!usernameRegex.test(username.value)){
        username.style.border='1.5px solid red';
    }else{
        username.style.border='1.5px solid green';
    }
    if(!emailRegex.test(emaili.value)){
        emaili.style.border='1.5px solid red';
    }else{
        emaili.style.border='1.5px solid green';
    }
    if(!passiRegex.test(passwordi.value)){
        passwordi.style.border='1.5px solid red';
      }else{
        passwordi.style.border='1.5px solid green';
    }
}else{
   // alert(`Hello dear ${emri.value} shortly u will be redirected to the home page`);
    //window.location.replace('../index.html');
}
};