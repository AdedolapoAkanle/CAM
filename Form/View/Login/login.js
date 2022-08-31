
document.querySelector('#myform').addEventListener('submit', (e) => {
  function newPost() {
    let data = $("#myform").serialize();
    console.log(data);
    $.ajax({

      type: 'post',
      url: 'http://localhost/CAM/Login.php?action=login', //Here you will fetch records 
      data: data, //Pass $id
      beforeSend: function () {
      
      },
      success: function (response) {
        console.log(response);
        if ($.trim(response) === "1") {
          console.log('Login succesfully');
          document.querySelector('.login-btn').innerHTML = (`<i class="fa fa-spinner fa-spin"></i>`);
          
        } else {
          console.log("login failed");
          
        }

      },
      complete: function () {
      }
    });

  }
  e.preventDefault();
  newPost();
});