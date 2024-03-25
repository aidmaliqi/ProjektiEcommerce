const emri = document.getElementById('name');
const emaili = document.getElementById('email');

const subject = document.getElementById('c1');

const emriRegex =/^[A-Za-z\s]{3,}$/;
const emailRegex = /^[A-Za-z0-9]{2,10}[@][a-z]{1,10}\.[a-z]{2,3}$/;


function send(){
    if(!emriRegex.test(emri.value)||!emailRegex.test(emaili.value)||subject.value.trim()==''||subject.value.length<=10){
    if(!emriRegex.test(emri.value)){
        emri.style.border='2px solid red';
    }else{
        emri.style.border='2px solid green';
    }
    if(!emailRegex.test(emaili.value)){
        emaili.style.border='2px solid red';
    }else{
        emaili.style.border='2px solid green';
    }
    if(subject.value.trim()==''||subject.value.length<=10){
        subject.style.border='2px solid red';
    }else{
        subject.style.border='2px solid green';
    }
    }else{
        alert(`Thanks dear ${emri.value} we will get back to you ASAP!`);
        window.location.replace('contact.html');
    }
};