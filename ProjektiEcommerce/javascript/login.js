const emaili = document.getElementById('Lemail');
const passwordi = document.getElementById('Lpassword');
const emailRegex = /^[A-Za-z0-9]{2,10}[@][a-z]{1,10}\.[a-z]{2,3}$/;
const passiRegex = /^([A-za-z0-9]{8,})$/;

function login(){
  if(!emailRegex.test(emaili.value)||!passiRegex.test(passwordi.value)){
      if(!emailRegex.test(emaili.value)){
        emaili.style.border='2px solid red';
      }else{
        emaili.style.border='2px solid green';
      }
      if(!passiRegex.test(passwordi.value)){
        passwordi.style.border='2px solid red';
      }else{
        passwordi.style.border='2px solid green';
      }
    }else{
      //window.location.replace('../index.php');
      //alert(`Hello ${emailSplit(emaili.value)}, shortly you will be redirected to the homepage.`)
    }
};
function emailSplit(email){
  let e = email.split('@');
  let user = e[0];
  console.log(user);
  return user;
};