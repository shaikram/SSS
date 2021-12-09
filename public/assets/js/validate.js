$(document).ready(function(){
  $('#regForm').submit(function(){


        for(var a = 1; a <= 4; a++){
          var reg = 'input'+a;
          var err = 'error'+a;
          var error = document.getElementById(err);
          var focus = document.getElementById(reg);
          var input = document.getElementById(reg).value;
          var regex = new RegExp("^[0-9a-zA-Z\b ]+$");
          var field = ["","Username","Email","Password","Confirm Password"];

          if(a >= 1 && a <= 2){
            switch(true){

              case input.length == 0:
                   focus.style.border = "1px solid red";
                   error.innerHTML = "";
                   error.innerHTML += field[a] + " is required!";
                   focus.focus();

               return false;
               break;

               case input.length <= 4:
                   focus.style.border = "1px solid red";
                   error.innerHTML = "";
                   error.innerHTML += field[a] + " must be 5 string or more!";
                   focus.focus();

               return false;
               break;

               case a == 1:
                    if(regex.exec(input) == null){
                      focus.style.border = "1px solid red";
                      error.innerHTML = "";
                      error.innerHTML +="Avoid using special symbol field(#,@,$,^...i.e)" + field[a];
                      focus.focus();
                      return false;
                    }

                break;

            }
          }
          if(a >= 3){
            var psw = document.getElementById('input3').value;
            var cpsw = document.getElementById('input4').value;
              switch(true){

                case input.length == 0:
                     focus.style.border = "1px solid red";
                     error.innerHTML = "";
                     error.innerHTML += field[a] + " is required!";
                     focus.focus();

                 return false;
                 break;

                 case input.length <= 7:
                     focus.style.border = "1px solid red";
                     error.innerHTML = "";
                     error.innerHTML += field[a] + " must be 8 string or more!";
                     focus.focus();

                 return false;
                 break;

                 case psw != cpsw:
                     focus.style.border = "1px solid red";
                     error.innerHTML = "";
                     error.innerHTML += "Password not match!";
                     focus.focus();

                 return false;
                 break;
              }
            }

        }

  });
});
function myFunction(a, b){
  if(a.value.length > 4 && a.value.length <= 20){
    a.style.border = "1px solid #d2d2d2";
    b.innerHTML = "";
  }
}
