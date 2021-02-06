"use strict";

function Pimp(){
    var ptext=$("ptext");
    if (!ptext.style.fontSize) {
        ptext.style.fontSize = '12pt';
    }
    ptext.style.fontSize=parseInt(ptext.style.fontSize)+2+"pt";
}

function PimpTimer(){
    setInterval(Pimp,500);
}

function Bling(){
    var ptext=$("ptext");
    var cbox=$("cbox");
    var bg=$("bg");
    if(cbox.checked){
        ptext.style.fontWeight="bold";
        ptext.style.color="green";
        ptext.style.textDecoration="underline";
        bg.style.backgroundImage='url("http://selab.hanyang.ac.kr/courses/cse326/2015/problems/images/7/hundred.jpg")';
    }else{
        ptext.style.fontWeight="normal";
        ptext.style.color="black";
        ptext.style.textDecoration="none";
        bg.style.backgroundImage='none';
    }
}

function Snoopify(){
    var ptext=$("ptext");
    var temp=ptext.value.toUpperCase();
    var arr=temp.split('.');
    temp=arr.join("-izzle.");
    ptext.value=temp;   
}

function IgpayAtinlay(){
    var ptext=$("ptext");
    var temp=ptext.value;
    var arr=temp.split(' ');
    for(var i=0; i<arr.length; ++i){
        if(arr[i].length>=1) arr[i]=arr[i].substring(1,arr[i].length)+arr[i][0]+"ay";
    }
    temp=arr.join(' ');
    ptext.value=temp;  
}

function Malkovitch(){
    var ptext=$("ptext");
    var temp=ptext.value;
    var arr=temp.split(' ');
    for(var i=0; i<arr.length; ++i){
        if(arr[i].length>=5) arr[i]="Malkovitch";
    }
    temp=arr.join(' ');
    ptext.value=temp;  
}

window.onload =()=>{
    var pimp=$("pimp");
    pimp.onclick=PimpTimer;
    var bling=$("cbox");
    bling.onchange=Bling;
    var snoop=$("snoopify");
    snoop.onclick=Snoopify;
    var ig=$("ig");
    ig.onclick=IgpayAtinlay;
    var malko=$("malko");
    malko.onclick=Malkovitch;
}