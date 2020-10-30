<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Username Availability</title>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<style>
h1{ margin:20px; text-align:center; padding:0px; font-family: 'Rubik', sans-serif; }
#lowrbdy{ width:100%; height:655px; position:absolute;  top:0px;  left:0px; }
#lowrbdy img{ width:100%; height:100%;  }
.outer{ width:1100px; height:560px; position:absolute; top:60px; left:160px; background:rgba(255,255,255,0.8);  }
#UserName{ width:400px; border:none; height:50px; box-shadow:0px 0px 2px #555; margin:90px 0px 0px 350px; font-size:30px; }
#name_status{ text-align:center; font-size:40px;  }
.example{ text-align:center; font-size:20px}
body{background:#222}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
function checkname()
{
 var name=document.getElementById( "UserName" ).value;
  
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   user_name:name,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response=="Available")  
   {
     $("#name_status").css('color', '#0AC02A', 'important');
    return true;
   }
   else
   {
     $("#name_status").css('color', '#FF0004', 'important');
    return false;
   }
  }
  });
 }
 else
 {
  $( '#name_status' ).html("");
  return false;
 }
}
</script>
</head>

<body>
<div id="lowrbdy">
  <img class="bdimg" src="bg.jpg">
</div>

<div class="outer">
  <h1>Live Username Availability Check Using PHP and AJAX</h1>
    
  <input type="text" name="UserName" id="UserName" onkeyup="checkname();">
    <p class="example"><strong>Example:</strong> Loren, Ipsum, John, Doe</p>
    <br>
  <p id="name_status"></p>
</div>
</body>
</html>