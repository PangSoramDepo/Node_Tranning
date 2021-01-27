<!DOCTYPE html>
<html>
<head>
<style> 
#example1 {
  box-sizing: content-box;  
  width: 300px;
  height: 100px;
  padding: 30px;  
  border: 10px solid blue;
}

#example2 {
  box-sizing: border-box;
  width: 300px;
  height: 100px;
  padding: 30px;  
  border: 10px solid blue;
}
    .pherum{
        
   box-sizing: border-box;
  width: 200px;
  height: 50px;     
   background-color: aqua;     
    float: left;    
    }
</style>
</head>
<body>

<h1>The box-sizing Property</h1>
<p>Defines how the width and height of an element are calculated: should they include padding and borders, or not.</p>

<h2>box-sizing: content-box (default):</h2>
<p>Width and height only apply to the content of the element:</p>
<div id="example1">This div has a width of 300px. But the full width is300sskkkkksssssssss 
    lkkkk
ooooo+ 20px (left and right border) + 60px (left and right padding) = 380px!
 <div class = "pherum"></div>   
    
    
</div>

<h2>box-sizing: border-box:</h2>
<p>Width and height apply to all parts of the element: content, padding and borders:</p>
<div id="example2">Here, the full width is 300px, no matter what!</div>

</body>
</html>