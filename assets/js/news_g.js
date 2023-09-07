// fetch('http://news/api_news/get.php')
//       .then(response => response.json())
//       .then(json => {
//           var h1= document.getElementById('contact_info');
//            var p= document.getElementById('address');
//            var e= document.getElementById('email');
//            var ph= document.getElementById('phone');

//             // img1.setAttribute('src', json.contact[0].images);
//           h1.innerText = json.contact[2].contact_info;
//            p.innerText = json.contact[2].address;
//             e.innerText = json.contact[2].email;
//              ph.innerText = json.contact[2].phone;
//           console.log(json);
//       });
     
var loginInfo = [];

function login(){
  fetch('http://news/api_news/login_register/get_api_login.php')
  .then(response => response.json())
  .then(json => {
      var input_name= document.getElementById('name').value;
       var input_surName= document.getElementById('surName').value;
       var alerth1= document.getElementById('alerth1');

        // img1.setAttribute('src', json.contact[0].images);
      // input_name.value = json.login[2].name;
      //  input_surName.value = json.login[2].surName;
      //    input_phone.value = json.login[2].phone;

      console.log(json.login[2].name);
      for(let i = 0; i<json.login.length; i++){
         if(input_name == json.login[i].name && input_surName == json.login[i].surName){
          var info = JSON.stringify(json.login[i]);
          window.localStorage.setItem('loginIn', info);  
          window.open('profile.php', '_self');
            // loginInfo.push(json.login[i]); 
            
         } 
         else{
            alerth1.innerText = "Name yoki surname xato!";
            alerth1.style.color = "red";
            alerth1.style.fontSize = "12pt";
         }
      }
  });
}

function onload1(){
            var h1id = document.getElementById('h1id');
            var h1name = document.getElementById('h1name');
            var h1surName = document.getElementById('h1surName');
            var h1phone = document.getElementById('h1phone');
            var h1create_at = document.getElementById('h1create_at');
            var info1 = window.localStorage.getItem('loginIn');
            var info2 = JSON.parse(info1);
            h1id.innerText = info2.id;
            h1name.innerText = info2.name;
            h1surName.innerText =info2.surName;
            h1phone.innerText = info2.phone;
            h1create_at.innerText = info2.create_at;
           console.log(loginInfo);
}
