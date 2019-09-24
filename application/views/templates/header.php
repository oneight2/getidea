<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Raleway:300,400,700|Roboto:300,400,500,700|Work+Sans:300,400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>getIdea() | <?= $judul ?></title>
    <style>
    	        @keyframes bgcolor{
    0%{
        background: #F5C006;
    }
    20%{
        background:#DF1638 ;
    }
    40%{
        background:#07B307 ;
    }
    60%{
        background:#1D05AC;
    }
    80%{
        background:#0FC7A7;
    }
    100%{
        background:#F5C006;
    }
}

#sidebar-wrapper{
  z-index:1;
  position: absolute;
  width:100px;
  height:100%;
  overflow-y:hidden;
  background:  #242533;
  transition:all .5s;
  display:flex;
  align-items:center;
}

/* Main Content */
#page-content-wrapper{
  width: 100%;  
  position: absolute;
  transition:all .5s;
}

#menu-toggle{
	font-family: 'Montserrat', sans-serif;
	font-weight: 300;
    transition:all .3s;
    font-size: 15pt;
    letter-spacing: 5px;
    padding: 0 0;
    position: absolute;
    border-radius: 0;
    z-index: 9999;
    color: white;
    transform: rotate(-90deg);

}
#menu-toggle:hover{
	color: orange;
}
/* Change the width of the sidebar to display it*/
#wrapper.menuDisplayed #sidebar-wrapper{
  width:50%;
  background-color:#262845;  
}

#wrapper.menuDisplayed #page-content-wrapper{
  padding-left:50%;
}

/* Sidebar styling */
.sidebar-nav{
  padding:0;
  list-style:none; 
    transition:all .5s;
    width:100%;
    text-align:center;
}

.sidebar-nav li{
  line-height:40px;  
    width:100%;
    transition:all .3s;
    padding:10px;
}

.sidebar-nav li a {
  display:block;
  text-decoration:none;
  color:#000;
}
.list-sidenav{
  animation: bgcolor infinite 60s;

}
@keyframes hue {
  from {
    filter: hue-rotate(0deg);
  }
  
  to {
    filter: hue-rotate(-360deg);
  }
}
.label{
	font-family: 'Work Sans', sans-serif;
	font-size: 10vw;
	margin-top: 20vh;
	
}
.label .get{
	font-weight: 300;
	color: #5FA4EA;
    background-image: linear-gradient(92deg, #5FA4EA 0%,#8AD9FE 100%);
    -webkit-background-clip: text;
            background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: hue 60s infinite linear;
}
.label .idea{
	 color: #f35626;
    background-image: linear-gradient(92deg, #f35626 0%,#feab3a 100%);
    -webkit-background-clip: text;
            background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: hue 60s infinite linear;
}


    </style>
  </head>
  <body>