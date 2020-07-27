<!DOCTYPE html>
<html>
<head>
<script>
function myFunction() {
  var key = prompt("Please enter your name:", "key code here");
  fetch(key) // which api it sud fetch the correct password from
  .then(res => res.text()).then(function(text) { if(text.includes("true")) {
      alert("Correct key^^");
  } else {
      alert("Wrong key!!\nYou will be redirected shortly...");
      window.location.href = "http://" // where to redirect
  }});
}
</script>
<script type='text/javascript' src='http://wiad.tk/plugins/js/jquery.js'></script>
<script type='text/javascript' src='http://wiad.tk/plugins/js/jquery-migrate.min.js'></script>
<title>WiAD AdminConsole [Version 1.0.7]</title>
</head>
<body onload="myFunction()">

<textarea id="enter" rows="100%" cols="100%" style="height:600px; width:99.6%; background-color: black; color:#fff;">
>
</textarea>


<script>
document.querySelector("textarea").addEventListener("keydown", e => {
  if (e.key === "Enter") {
    e.preventDefault();
    const content = e.currentTarget.value;
    console.log(content);
    if(content.startsWith('>')) {
        var slug = content.split('>').pop();
        var text = slug.split(" ");
        fetch("/base.php?Token=a05HRXBsNFlOaXNGUGp4clFIck0=&Function="+ text[0] +"&Extra="+text[1])
    .then(res => res.text()).then(text => document.getElementById("enter").value += "\n" + text +"\n>");
    }
  }
});
</script>
</body>
</html>
