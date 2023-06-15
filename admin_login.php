<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  
}
.container1{
display:block;
position:relative;
padding-left:35px;
margin-bottom:12px;
cursor:pointer;
font-size:22px;
user-select:none;


}
.header
{
        min-height:100vh;
        width:100%;
        background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("img1.png");
        background-position:center;
        background-size:cover;
        position:relative;
        

}
.checkmark{
position:absolute;
top:0;
left:0;
height:25px;
width:25px;
background-color:#eee;


}
.wrap{
    
    width: 500px;
    
    border-radius:10px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}


body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}

.container{
       position:center;
  max-width: 500px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  opacity:0.9;
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: 100%;
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}

.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 a{
	display: block;
	text-align: right;
	text-decoration: none;
	color: grey;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	
color:#9921e8;
font-weight:bold;

}

 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

</style>
<html>
<head>
        <meta charset="UTF-8">
	<title>MX Bridge</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
	
</head>
<body>
<!-- arun -->

<!-- indhu -->

	<section class="header">
        <div class="wrap">
	<div class="container">
		<div class="title">Admin Log In</div>
                <div class="content">
			<form method="POST" action="admin_signup.php">
				<div class="user-details">
          <div class="input-box">
          <span class="details">Username</span>
           	<input type="text"  name="username" autocomplete="off" required>
           		   </div>
                         
           
        <div class="input-box">
            <span class="details">Password</span>
           <input type="password" name="password" autocomplete="off" id="myInput" required>
            	</div>
				
			</div>	
                        <div class="button">		
            	<input type="submit"  value="Login" name="submit">
                </div>
            </form>
        </div>
    </div>
    </section>
    <script type="text/javascript" src="js/main.js"></script>
	<script>
	const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);

});
</script>
</body>
</html>
