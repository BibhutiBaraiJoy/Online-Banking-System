// form validation function //
function validate(form) {
 /* var name = document.form.name.value;
  var email = form.email.value;
  var gender = form.gender.value;
  var message = form.message.value;*/
 //my.......................................// 
  var customerID = form.customerID.value;
  var customerName = form.customerName.value;
  var password = form.password.value;
  var confirmPassword = form.confirmPassword.value;
  var fathersName = form.fathersName.value;
  var mothersName = form.mothersName.value;
  var husbandWifeName = form.husbandWifeName.value;
  var nationality = form.nationality.value;
  var dateOfBirth = form.dateOfBirth.value;
  var sex = form.sex.value;
  var profession = form.profession.value;
  var religion = form.religion.value;
  
  var accountType = form.accountType.value;
  var openingDate = form.openingDate.value;
  var referenceAccountNo = form.referenceAccountNo.value;
  var referenceName = form.referenceName.value;
  var referenceAccountType = form.referenceAccountType.value;
  
  var nomineeAccountNo = form.nomineeAccountNo.value;
  var nomineeName = form.nomineeName.value;
  var nomineeAccountType = form.nomineeAccountType.value;
  var relation = form.relation.value;
  var nomineeNationalIdNo = form.nomineeNationalIdNo.value;
  
  var mailingAddress = form.mailingAddress.value;
  var parmanentAddress = form.parmanentAddress.value;
  var zipCode = form.zipCode.value;
  var city = form.city.value;
  var country = form.country.value;
  var contactNo = form.contactNo.value;
  var email = form.email.value;
  
  var nameRegex = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  var messageRegex = new RegExp(/<\/?\w+((\s+\w+(\s*=\s*(?:".*?"|'.*?'|[^'">\s]+))?)+\s*|\s*)\/?>/gim);
  if(customerID == "") {
	  alert("error");
    //inlineMsg('customerID','You must enter your customerID.');
    return false;
  }
  if(customerID.length<13) {
	  //alert("error");
    inlineMsg('customerID','You must enter your customerID 13 digit.',2);
    return false;
  }
  if(customerName == "") {
	  //alert("error");
    inlineMsg('customerID','You must enter your customerName.',2);
    return false;
  }
  if(!customerName.match(nameRegex)) {
    inlineMsg('customerName','You have entered an invalid name.',2);
    return false;
  }
  if(password == "") {
	  //alert("error");
    inlineMsg('password','You must enter your password.',2);
    return false;
  }
  
  if(confirmPassword == "") {
	  //alert("error");
    inlineMsg('confirmPassword','You must enter your confirmPassword.',2);
    return false;
  }
  
  if(password !=confirmPassword) {
	  //alert("error");
    inlineMsg('confirmPassword','You must enter same password and confirmPassword.',2);
    return false;
  }
  
  if(fathersName == "") {
	  //alert("error");
    inlineMsg('fathersName','You must enter your fathersName.',2);
    return false;
  }
  
  if(mothersName == "") {
	  //alert("error");
    inlineMsg('mothersName','You must enter your mothersName.',2);
    return false;
  }
  
  if(husbandWifeName == "") {
	  //alert("error");
    inlineMsg('husbandWifeName','You must enter husband or Wife Name.',2);
    return false;
  }
  
  if(nationality == "") {
	  //alert("error");
    inlineMsg('nationality','You must enter your nationality.',2);
    return false;
  }
  
  if(dateOfBirth == "") {
	  //alert("error");
    inlineMsg('dateOfBirth','You must enter your dateOfBirth.',2);
    return false;
  }
  
  if(sex == "") {
	  //alert("error");
    inlineMsg('sex','You must enter your sex.',2);
    return false;
  }
  
  if(profession == "") {
	  //alert("error");
    inlineMsg('profession','You must enter your profession.',2);
    return false;
  }
  
  if(religion == "") {
	  //alert("error");
    inlineMsg('religion','You must enter your religion.',2);
    return false;
  }
  
  if(accountType == "") {
	  //alert("error");
    inlineMsg('accountType','You must enter your accountType.',2);
    return false;
  }
  
  if(openingDate == "") {
	  //alert("error");
    inlineMsg('password','You must enter account openingDate.',2);
    return false;
  }
  
  if(referenceAccountNo == "") {
	  //alert("error");
    inlineMsg('referenceAccountNo','You must enter your reference Account No.',2);
    return false;
  }
  
  if(referenceName == "") {
	  //alert("error");
    inlineMsg('referenceName','You must enter your reference Name.',2);
    return false;
  }
  
  
  if(referenceAccountType == "") {
	  //alert("error");
    inlineMsg('referenceAccountType','You must enter your referenceAccount Type.',2);
    return false;
  }
  
  if(nomineeAccountNo == "") {
	  //alert("error");
    inlineMsg('nomineeAccountNo','You must enter your nominee Account No.',2);
    return false;
  }
  
  if(nomineeName == "") {
	  //alert("error");
    inlineMsg('nomineeName','You must enter your nominee Name.',2);
    return false;
  }
  
  if(nomineeAccountType == "") {
	  //alert("error");
    inlineMsg('nomineeAccountType','You must enter your nominee Account Type.',2);
    return false;
  }
  
  if(relation == "") {
	  //alert("error");
    inlineMsg('relation','You must enter your relation.',2);
    return false;
  }
  
  if(nomineeNationalIdNo == "") {
	  //alert("error");
    inlineMsg('nomineeNationalIdNo','You must enter your nominee National ID No.',2);
    return false;
  }
  
  if(mailingAddress == "") {
	  //alert("error");
    inlineMsg('mailingAddress','You must enter your mailing Address.',2);
    return false;
  }
  
  if(parmanentAddress == "") {
	  //alert("error");
    inlineMsg('parmanentAddress','You must enter your parmanent Address.',2);
    return false;
  }
  
  if(zipCode == "") {
	  //alert("error");
    inlineMsg('zipCode','You must enter your zipCode.',2);
    return false;
  }
  
  if(city == "") {
	  //alert("error");
    inlineMsg('city','You must enter your city.',2);
    return false;
  }
  
  if(country == "") {
	  //alert("error");
    inlineMsg('country','You must enter your country.',2);
    return false;
  }
  
  if(contactNo == "") {
	  //alert("error");
    inlineMsg('contactNo','You must enter your contactNo.',2);
    return false;
  }
  
  if(email == "") {
    inlineMsg('email','<strong>Error</strong><br />You must enter your email.',2);
    return false;
  }
  if(!email.match(emailRegex)) {
    inlineMsg('email','<strong>Error</strong><br />You have entered an invalid email.',2);
    return false;
  }
  if(gender == "") {
    inlineMsg('gender','<strong>Error</strong><br />You must select your gender.',2);
    return false;
  }
  if(message == "") {
    inlineMsg('message','You must enter a message.');
    return false;
  }
  if(message.match(messageRegex)) {
    inlineMsg('message','You have entered an invalid message.');
    return false;
  }
  return true;
}

// START OF MESSAGE SCRIPT //

var MSGTIMER = 20;
var MSGSPEED = 5;
var MSGOFFSET = 3;
var MSGHIDE = 3;

// build out the divs, set attributes and call the fade function //
function inlineMsg(target,string,autohide) {
  var msg;
  var msgcontent;
  if(!document.getElementById('msg')) {
    msg = document.createElement('div');
    msg.id = 'msg';
    msgcontent = document.createElement('div');
    msgcontent.id = 'msgcontent';
    document.body.appendChild(msg);
    msg.appendChild(msgcontent);
    msg.style.filter = 'alpha(opacity=0)';
    msg.style.opacity = 0;
    msg.alpha = 0;
  } else {
    msg = document.getElementById('msg');
    msgcontent = document.getElementById('msgcontent');
  }
  msgcontent.innerHTML = string;
  msg.style.display = 'block';
  var msgheight = msg.offsetHeight;
  var targetdiv = document.getElementById(target);
  targetdiv.focus();
  var targetheight = targetdiv.offsetHeight;
  var targetwidth = targetdiv.offsetWidth;
  var topposition = topPosition(targetdiv) - ((msgheight - targetheight) / 2);
  var leftposition = leftPosition(targetdiv) + targetwidth + MSGOFFSET;
  msg.style.top = topposition + 'px';
  msg.style.left = leftposition + 'px';
  clearInterval(msg.timer);
  msg.timer = setInterval("fadeMsg(1)", MSGTIMER);
  if(!autohide) {
    autohide = MSGHIDE;  
  }
  window.setTimeout("hideMsg()", (autohide * 1000));
}

// hide the form alert //
function hideMsg(msg) {
  var msg = document.getElementById('msg');
  if(!msg.timer) {
    msg.timer = setInterval("fadeMsg(0)", MSGTIMER);
  }
}

// face the message box //
function fadeMsg(flag) {
  if(flag == null) {
    flag = 1;
  }
  var msg = document.getElementById('msg');
  var value;
  if(flag == 1) {
    value = msg.alpha + MSGSPEED;
  } else {
    value = msg.alpha - MSGSPEED;
  }
  msg.alpha = value;
  msg.style.opacity = (value / 100);
  msg.style.filter = 'alpha(opacity=' + value + ')';
  if(value >= 99) {
    clearInterval(msg.timer);
    msg.timer = null;
  } else if(value <= 1) {
    msg.style.display = "none";
    clearInterval(msg.timer);
  }
}

// calculate the position of the element in relation to the left of the browser //
function leftPosition(target) {
  var left = 0;
  if(target.offsetParent) {
    while(1) {
      left += target.offsetLeft;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.x) {
    left += target.x;
  }
  return left;
}

// calculate the position of the element in relation to the top of the browser window //
function topPosition(target) {
  var top = 0;
  if(target.offsetParent) {
    while(1) {
      top += target.offsetTop;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.y) {
    top += target.y;
  }
  return top;
}

// preload the arrow //
if(document.images) {
  arrow = new Image(7,80); 
  arrow.src = "images/msg_arrow.gif"; 
}