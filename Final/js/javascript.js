


 $(document).ready(function(){
 Parse.initialize("DLvMEIqJsYS4V2GVzxeKRpLRMs6BdK7n77s5lNbn", "Ai9LlrpaanqzeXelxn2Znnhh9piezIl3QzRIwUFK");



  });



 function Login(){
Parse.initialize("DLvMEIqJsYS4V2GVzxeKRpLRMs6BdK7n77s5lNbn", "Ai9LlrpaanqzeXelxn2Znnhh9piezIl3QzRIwUFK");var myuser =document.getElementById("login-username").value;
var mypass =document.getElementById("login-password").value;

Parse.User.logIn(myuser, mypass, {
  success: function(user) {

var alm ='wfwefwf';

window.location = "promos.html";
var sel = document.getElementById('suc');
  var opt = document.createElement('option');
opt.value = alm;
    sel.appendChild(opt);


  },
  error: function(user, error) {
  alert("Invalid user or password");
  }
});


 }

 

 function logout(){


Parse.User.logOut();


 window.location="index.html";
 }









    

  

     

    




     

