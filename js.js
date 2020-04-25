function openemail(evt,E_mails){
    var i,conte_mails,navigation_list_item;
   conte_mails= document.getElementsByClassName('conte_mails');
    for(i = 0; i <conte_mails.length; i++){
        conte_mails[i].style.display="none";
    }
    navigation_list_item= document.getElementsByClassName('navigation_list_item');
    for (i=0; i < navigation_list_item.length; i++){
        navigation_list_item[i].className = navigation_list_item[i].className.replace("active","");

    }
    document.getElementById(E_mails).style.display="block";
    evt.currentTarget.className+="active";

}
document.getElementById("defaultOpen").click();




// delete email

function removeElement(){
    document.getElementById("now").style.display = "none";
};
function removeElement1(){
    document.getElementById("now0").style.display = "none";
};
function removeElement2(){
    document.getElementById("now2").style.display = "none";

};
function removeElement3(){
    document.getElementById("now3").style.display = "none";

} ;   
function removeElement4(){
    document.getElementById("now4").style.display = "none";
};
function removeElement5(){
    document.getElementById("now5").style.display = "none";
};
function removeElement6(){
    document.getElementById("now6").style.display = "none";

}  ;
function removeElement7(){

    document.getElementById("now7").style.display = "none";

};
function removeElement8(){
    document.getElementById("now8").style.display = "none";

};

function removeElement9(){
    document.getElementById("now9").style.display = "none";

};
function removeElement10(){
    document.getElementById("now10").style.display = "none";

};
function removeElement11(){
    document.getElementById("now11").style.display = "none";

};

function removeElement12(){
    
    document.getElementById("now12").style.display = "none";

};

function removeElement13(){
    document.getElementById("now13").style.display = "none";

};

function removeElement14(){
    document.getElementById("now14").style.display = "none";

};

function removeElement15(){
    document.getElementById("now15").style.display = "none";

};

function removeElement16(){
    
    document.getElementById("now16").style.display = "none";

};
function removeElement17(){
    document.getElementById("now17").style.display = "none";

};

function removeElement18(){
    document.getElementById("now18").style.display = "none";

};

function removeElement0(){
    document.getElementById("now1").style.display = "none"
};


// read email
document.querySelector('.off').addEventListener('click',function(){
document.querySelector('.mails__title').classList.remove('main');
document.querySelector('.email_modal').style.display = 'none';
});

document.querySelector('#open').addEventListener('click',
function(){
  document.querySelector('.mails__title').classList.add('main');
  document.querySelector('.email_modal').style.display = 'flex';
});