const con = document.getElementById('contact');
const adr=document.getElementById('address');
const cityy=document.getElementById('city');
const zipp=document.getElementById('zip');
const tel=document.getElementById('phone');
const country = document.getElementById('country');
const conRegex= /^[A-Za-z\s]{3,}$/;
const adrRegex= /^[A-Za-z0-9\ \.]+$/;
const cityRegex=/^[A-Za-z]+$/;
const zipRegex=/^[A-Za-z0-9\ \.]{3,}$/;
const telRegex=/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/;

function order(){
  if(country.value === ''||!conRegex.test(con.value)||!adrRegex.test(adr.value)||!zipRegex.test(zipp.value)||!telRegex.test(tel.value)){
    if (country.value === '') {
      country.style.border='2px solid red';
    }else{
      country.style.border='2px solid green';
    }
    if(!conRegex.test(con.value)){
        con.style.border='2px solid red';
      }
      else{
        con.style.border='2px solid green';
      }
      if(!adrRegex.test(adr.value)){
        adr.style.border='2px solid red';
      }else{
        adr.style.border='2px solid green';
      }
      if(!cityRegex.test(cityy.value)){
        cityy.style.border='2px solid red';
      }else{
        cityy.style.border='2px solid green';
      }
      if(!zipRegex.test(zipp.value)){
        zipp.style.border='2px solid red';
      }else{
        zipp.style.border='2px solid green';
      }
      if(!telRegex.test(tel.value)){
        tel.style.border='2px solid red';
      }else{
        tel.style.border='2px solid green';
      }
    }else{
      alert(`YOUR ORDER HAS BEEN PLACED.\nThanks dear ${con.value}.`);
      window.location.replace('products.html');
    }
   
   
}