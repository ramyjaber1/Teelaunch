
<html>

    <body>

    <form method ="post" action="ex1.php">
      <label>click here to try ex1</label>
      <button type="button"  onclick="showDiv()"> click here </button> 
      
      <div id="mydiv" style="display:none;  margin-top:5px;"> 
      <input type="text" name="myHTML" placeholder="enter your html "/>
      <input type ="submit" onclick="demo('<?php echo $res; ?>')" name="submit1" value="Done" />
      </div> 
    </form>
<form method ="post" action="ex2.php">
    <label> Click this to try ex2</label>
    <button type="button"  onclick="showDiv1()"> click here </button> 
    <div id="mydiv1" style="display:none; margin-top:5px;"> 
    <input name="str1" type="text" placeholder="enter your brackets" />
    <input type ="submit"  name="submit1" value="Done" />
    </div> 
</form>

<form method ="post" action="ex3.php">
    <label> chessboard</label>
    
    <input type ="submit" value="click here"/>
</form>

<script>
function showDiv1() {
  document.getElementById('mydiv1').style.display = "block";
}
function showDiv() {
  document.getElementById('mydiv').style.display = "block";
}
</script>




