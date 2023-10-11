function getData(getUsername, getLastName, getAge, getAddress, getCellphone, getEmail, getProfession ,getSchoolevel){

this.getUsername = getUsername;
this.getLastName = getLastName;
this.getAge = getAge;
this.getAddress = getAddress;
this.getCellphone = getCellphone;
this.getEmail = getEmail;
this.getProfession = getProfession;
this.getSchoolevel = getSchoolevel;

getUsername = document.getElementById('firstName').value;
getLastName = document.getElementById('lasttName').value;
getAge = document.getElementById('ageUser').value;
getAddress = document.getElementById('address').value;
getCellphone = document.getElementById('phoneNumber').value;
getEmail = document.getElementById('email').value;
getProfession = document.getElementById('career').value;

var firstInput = document.getElementById('scholarYes');
var secondInput = document.getElementById('scholarNo');



if (firstInput.checked) {
    getSchoolevel = "You have a high school degree";
    } else if (secondInput.checked) {
    getSchoolevel = "You don't have a high school degree";
    }else{
    getSchoolevel = "!Alert¡ choose either you have a high school or not"
    }

//var data = getUsername +"\n"+ getLastName +"\n"+ getAge +"\n"+ getAddress +"\n"+ getCellphone +"\n"+ getEmail +"\n"+ getProfession +"\n"+ getSchoolevel;

let data = `Your name is: ${getUsername}\nYour lastname is: ${getLastName}\nYour date of birth is: ${getAge}\nyou're located at ${getAddress}\nYour phone number is: ${getCellphone}\nYou email address is: ${getEmail}\nYour profession is: ${getProfession}\nDo you have high school: ${getSchoolevel}`;

document.getElementById('userDescription').value = data;


}

/*
this.showFunction = function(){
    console.log(`Hola mi nombre es ${this.getUsername} y tengo ${this.getAge} años`);
}*/

//const person1 = new getData ("andres", "velez", 30);
//person1.showFunction();

/*
var form = document.getElementById('form');
form.reset();
*/



