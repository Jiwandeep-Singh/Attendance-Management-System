
<!DOCTYPE html>
<html>
  <head>
    <title>HTML 5 and CSS 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
      
      <style>
        
          #box {
              
              width: 100px;
              height: 100px;
              background-color: red;
              border-radius: 100px 100px 0px 0px;
              transition: 1s ease-in-out;
              font-family: "Arial";
              display: flex;
              align-items: center;
              justify-content: center;
              font-size: 200%;
              
          }
          #box1 {
              
              width: 100px;
              height: 50px;
              background-color: blue;
             
              transition: 1s ease-in-out;
              font-family: "Arial";
              display: flex;
              align-items: center;
              justify-content: center;
              font-size: 200%;
              
          }

          
          #box:hover {
              
              /*transform: translate(50px, 50px);
              
              transform: rotate(40deg);
              
              transform: scale(2, 4);
              
              transform: skew(20deg, 30deg); */
              
              transform: rotateZ(180deg);
              transform: translate(100px, 100px);
              
          }
          
        
        
      </style>
      
  </head>
    
  
  <body>
      
       <div id="box">Box
      <div id="box1"> </div>
      </div>
      
  </body>
    
</html>











