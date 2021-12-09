$(document).ready(function(){
    $('#main1').submit(function(){
  
  
        for(var a = 1; a <= 19; a++){
          var inp = 'input'+a;
          var focus = document.getElementById(inp);
          var input = document.getElementById(inp).value;
          var regex = new RegExp("^[0-9a-zA-Z\b ]+$");
          var field =
                      [
                          "",
                          "First Name",
                          "Middle Name",
                          "Last Name",
                          "Date of birth",
                          "Gender",
                          "Civil Status",
                          "TIN No.",
                          "Nationality",
                          "Religion",
                          "Place of birth",
                          "Place of birth",
                          "Mobile No.",
                          "Telephone No.",
                          "Father's first name",
                          "Father's middle name",
                          "Father's last name",
                          "Mother's first name",
                          "Mother's middle name",
                          "Mother's last name"
                      ];
  
  
  
                switch(true){
                  case input.length == 0:
                       alert(field[a] +' is required');
                       focus.focus();
  
                   return false;
                   break;
  
                   case input.length <= 2:
  
                       alert(field[a] +' must be 2 string or more!');
                       focus.focus();
  
                   return false;
                   break;
                }
  
                var option=document.getElementsByName('gender');
                if (!(option[0].checked || option[1].checked)) {
                   alert("Please Select Your Gender");
                   return false;
                }
  
  
  
  
        }
  
  
    });
  
  
  });
