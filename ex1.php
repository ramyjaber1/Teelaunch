<?php 
$str = isset($_POST['myHTML']) ? $_POST['myHTML'] : "";
$res = htmlspecialchars($str);
echo "your input is: ".$res;
?>

<html>
  
  <head>
      <title>
         Exercice 1 
      </title>
  </head>
  <script>
    function HTMLElements(str) {
       
let openingTags = str.match(/<\w+>/g)
let closingTags = str.match(/(<\/\w+>)/g).reverse();
let strObj = {
'<div>': '</div>',
'<p>': '</p>',
'<i>': '</i>',
'<p>': '</p>',
'<em>': '</em>',
'<b>': '</b>',
};
const max = Math.max(openingTags.length, closingTags.length);

for (let i = 0; i < max; i++) {
if (strObj[openingTags[i]] !== closingTags[i]) {
return (openingTags[i] || closingTags[i]).replace(/<|>/g, '');
}
}

return true;
}

function demo(str) {
const res = HTMLElements(str);
console.log(str, '\t--> ', res);
document.getElementById("text").innerHTML = res
}
function click(){
document.getElementById("b1").click();
}

</script>
    
  <body onload="click()" style="text-align:center;" 
        id="body">
      <h1 style="color:blue;" 
          id="h1">  
              HTML Checker  
          </h1>
      <p id="first" 
         style="font-size: 15px;
                font-weight: bold;" >
      </p>
      <button id="b1" hidden onclick="demo('<?php echo $res; ?>')">
          click here
      </button>
      <p id="second"
         style="color:green;
                font-size: 20px;
                font-weight: bold;">
      </p>
     
      <label id="text" ></label>
     
     
  </body>
    
  </html>

  