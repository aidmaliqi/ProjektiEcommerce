
// const produkti1 = document.getElementsByClassName("produkti")[0];
// const produkti2 = document.getElementsByClassName("produkti")[1];
// const produkti3 = document.getElementsByClassName("produkti")[2];
// const produkti4 = document.getElementsByClassName("produkti")[3];
// const produkti5 = document.getElementsByClassName("produkti")[4];
// const produkti7 = document.getElementsByClassName("produkti")[6];
// const produkti6 = document.getElementsByClassName("produkti")[5];
// const produkti8 = document.getElementsByClassName("produkti")[7];

//Elementet qe duhet te ndryshohen ne faqen produkti.html
var h1shi = document.getElementById('h1shi');
var h3shi = document.getElementById('h3shi');
var paragrafi = document.getElementById('paragrafi');
var imgs = document.getElementById('fotoja');

//Fotot per secilin produkt
var images = ['../images/1.jpg','../images/2.jpg','../images/3.jpg','../images/4.jpg','../images/5.jpg','../images/6.jpg','../images/7.jpg','../images/8.jpg'];
// var img1= '../images/1.jpg';
// var img2= '../images/2.jpg';
// var img3= '../images/3.jpg';
// var img4= '../images/4.jpg';
// var img5= '../images/5.jpg';
// var img6= '../images/6.jpg';
// var img7= '../images/7.jpg';
// var img8= '../images/8.jpg';


//Funksioni qe i ndryshon elementet varesisht prej parametrit
function produktiNR(n){
    if(n==1){
        imgs.src=images[0];
        h1shi.innerHTML= 'Eco-Friendly Bamboo Chair';
        h3shi.innerHTML='80 $';
        paragrafi.innerHTML = 'The "Eco-Friendly Bamboo Chair" is a stylish and sustainable seating option made from 100% natural bamboo. It features a comfortable padded seat and backrest, and its lightweight design makes it easy to move around. ';  
        }else if(n==2){
            imgs.src=images[1];
            h1shi.innerHTML= 'The "Luxury Memory Foam Mattress';
            h3shi.innerHTML='2000 $';
            paragrafi.innerHTML = 'The "Luxury Memory Foam Mattress" is a high-quality and comfortable bed that conforms to your bodys shape for ultimate support. It has a thick layer of memory foam and a supportive base layer, and its hypoallergenic design makes it perfect for allergy sufferers. ';
        }else if(n==3){
            imgs.src=images[2];
            h1shi.innerHTML= 'Contemporary Platform Bed';
            h3shi.innerHTML='1500 $';
            paragrafi.innerHTML = 'The "Contemporary Platform Bed" is a modern and sleek bed that is perfect for a minimalistic bedroom. It has a low profile design with a sturdy wooden frame and a slatted base, and its simple design makes it easy to pair with any decor. ';
        }else if(n==4){
            imgs.src=images[3];
            h1shi.innerHTML= 'Rustic Farmhouse Bed';
            h3shi.innerHTML='1350 $';
            paragrafi.innerHTML = 'The "Rustic Farmhouse Bed" is a stylish and classic bed that adds a touch of charm to any bedroom. It has a sturdy wooden frame and a distressed finish, and its simple design makes it a versatile and timeless piece. ';
        }else if(n==5){
            imgs.src=images[4];
            h1shi.innerHTML= 'Orthopedic Memory Foam Mattress';
            h3shi.innerHTML='1450 $';
            paragrafi.innerHTML = 'The "Orthopedic Memory Foam Mattress" is a high-quality and supportive bed that is perfect for people with back or joint pain. It has a thick layer of memory foam and a supportive base layer, and its orthopedic design helps to align the spine and reduce pressure points. ';
        }else if(n==6){
            imgs.src=images[5];
            h1shi.innerHTML= 'Hybrid Innerspring Mattress';
            h3shi.innerHTML='1150 $';
            paragrafi.innerHTML = 'The "Hybrid Innerspring Mattress" is a comfortable and supportive bed that combines the benefits of memory foam and innerspring coils. It has a layer of memory foam for pressure relief and a layer of coils for support, and its medium-firm feel makes it suitable for most sleepers. ';
        }else if(n==7){
            imgs.src=images[6];
            h1shi.innerHTML= 'Wingback Armchair';
            h3shi.innerHTML='50 $';
            paragrafi.innerHTML = 'The "Wingback Armchair" is a classic and stylish chair that adds a touch of elegance to any room. It has a high backrest with wings and padded armrests, and its upholstered seat and backrest provide comfort and support. ';
        }else if(n==8){
            imgs.src=images[7];
            h1shi.innerHTML= 'Compact Armchair';
            h3shi.innerHTML='50 $';
            paragrafi.innerHTML = 'The "Compact Armchair" is a stylish and space-saving chair that is perfect for small living spaces. It has a sleek design with a narrow profile and a low backrest, and its padded seat and backrest provide comfort and support. Its compact size makes it easy to fit in tight spaces, and its lightweight design makes it easy to move around.';
        }
    };

//klasa per variablen statike
    class VStatic{
        static n = 1;
        static updateStatic(newValue){
            this.n=newValue;
            //shtimi i variables statike ne local storage pastaj per tu aksesuar ne faqen tjeter
            localStorage.setItem("myStaticVariable", newValue);
        }
    }
//funksioni onclick i cili e ndrron faqen dhe ja ndryshon vleren variables statike
    function redirectTo(num){
        console.log('clicked');
        VStatic.updateStatic(num);
        window.location.href= 'produkti.php';
        console.log(VStatic.n);
        
    }
    console.log(VStatic.n);
    //thirrja e funksionit per ndryshimin e elementeve duke aksesuar variablen statike
    function change(){
        VStatic.n = localStorage.getItem("myStaticVariable");
        produktiNR(VStatic.n);
    }