<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SignIn</title>
  <style type="text/css">
    body{
    	
  margin: 0;
  padding: 0;


      background-image: url("Image/Img1.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      height: 100vh;
      position: relative;
    }
    
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.5);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(8px);
    }

    .frm-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 800px;
      height: 400px;
    }

    .frm {
      border: none;
      border-radius: 20px 0 0 20px;
      background-color:lightyellow;
      height: 100%;
      width: 50%;
      opacity: 0.7;
      position: relative;
    }

    .frm:before {
      content: "";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url("Image/Img4.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      border-radius: 20px 0 0 20px;
    }

    .other-content {
    	
    	  opacity: 0.7;
      height: 100%;
      width: 50%;
      background-color: #fff;
      border-radius: 0 20px 20px 0;
    }
    table{
    	margin-top: 100px;
    	margin-left: 50px;
    }
input{
	padding-left: 20px;
	padding-bottom: 10px;
	width: 250px;
	margin-bottom: 20px;
	background-color: white;
	border-radius: 10px;
	box-shadow: 10px 10px 10px;
}
input:hover{
	height: 30px;
	width:270px;
}
button{
	border: none;
	border-radius: 7px;
	color:white;
	height: 35px;
	width: 150px;
	background-color: yellowgreen;
	margin-bottom: 10px;
	margin-left: 60px;
}
button:hover{
	color:yellowgreen;
	background-color: darkgreen;
	
}
  </style>

</head>
<body>
  <div class="overlay">
    <form method="post" action="signpro.php">
      <div class="frm-container">
        <div class="frm">
                 
        </div>
        <div class="other-content">
          <table >
            <tr>
              <td>
                <h3 align="center">Welcome!</h3>
              </td>
            </tr>
          	<tr>
              <td>
                <input type="text" name="username" placeholder="@username">
              </td>
            </tr>
                           	
            <tr>
              <td>
                <input type="password" name="password" placeholder="Password">
              </td>
            </tr>
            <tr>
              <td>
                <button name="login">LOGIN</button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="SIGNUP.php">SIGNUP</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </form>
  </div>
</body>
</html>



