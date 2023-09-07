$("#btn_post").click(function(){
    var name = document.getElementById('name');
    var email = document.getElementById('email1');
    var subject = document.getElementById('subject');
    var message = document.getElementById('message');
    var obj = {
        name: name.value,
        email: email.value,
        subject: subject.value,
        message: message.value
    }
   console.log(obj);
   
    $.post("http://localhost/news/api_news/post.php",
    obj,
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
});


$("#btn_login").click(function(){
  var name = document.getElementById('name');
  var surName = document.getElementById('surName');
  var phone = document.getElementById('phone');

  var objj = {
      name: name.value,
      surName: surName.value,
      phone: phone.value,
  }
 console.log(objj);
 
  $.post("http://localhost/news/api_news/login_register/post_api_login.php",
  objj,
  function(data,status){
    // alert("Data: " + data + "\nStatus: " + status);
  });
});
