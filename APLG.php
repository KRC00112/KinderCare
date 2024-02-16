
<!DOCTYPE html>
<html lang="en">
<head>


	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="keywords" content="">
    
	
	
	<title>Kinder Care - home page</title>
	<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Roboto:300,400,500,700,900" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="css/flaticon.css" rel="stylesheet" media="screen">
	<link href="css/custom.css" rel="stylesheet" media="screen">
	<script type="text/javascript">
		function active(){
			var searchBar = document.getElementById('searchBar');

			if(searchBar.value == 'Search a Crèche ...'){
				searchBar.value = ''
				searchBar.placeholder = 'Search a Crèche ....'
		}
	}

	function inactive(){
			var searchBar = document.getElementById('searchBar');

			if(searchBar.value == ''){
				searchBar.value = 'Search a Crèche ...'
				searchBar.placeholder = ''
		}
	}


	</script>
	
</head>

<style>
    .space{
		align:left;
        max-width:80%;
        background-color: white;
        margin:auto;
        padding:23px;
		border-bottom-right-radius:25px;
		border-bottom-left-radius:25px;
		position:relative;
		right:102px;
		top:0px;
		border-radius:8px;
		z-index: 3;
	}
		

       

}
</style>
<body data-spy="scroll" data-target="#main-navbar" data-offset="71">

	<header class="header">

		<nav class="navbar navbar-expand-lg navbar-light" id="main-navbar">
			<div class="container">

				
				<a class=" navbar-img navbar-brand" href="#"><img src="images/logo.png" alt="" /></a>
		
				<ul class="navbar-nav ml-auto" id="main-menu">
					<li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#About">About</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
					<li class="nav-item"><a class="nav-link" href="http://127.0.0.1/loginsystem/welcome.php">Logout</a></li>
					
					
				</ul>
					
				<div class="navbar-toggle"></div>
				
			</div>
		</nav>	
	</header>
	
	<div class="banner-slider" id="home">
			<div class="row no-gutters">
				<div class="col-md-12">
				
								<div class="banner-slide">
									<figure>
										<img src="images/slide-1.jpg">
									</figure>
									
									<div class="banner-slide-overlay">
										
									<h2 class="color-tagline">Because,you deserve a break...</h2>
										
										 <form  method="post">	
											<input type="text" name="str" id="searchBar" style="position:relative ;z-index: 5;"; placeholder="" value="Search a Crèche ..."  autocomplete="off" onMouseDown=" active(); " onblur="inactive();" />
                                            <input type="submit" name="submit" id="searchBtn" value="Go!"/>
                                         </form>

										 

                                       <div class="space"> 
                                            <?php
											
                                                $con = mysqli_connect('localhost','root','','result');
                                                if(isset($_POST['submit'])){
                                                $str=mysqli_real_escape_string($con,$_POST['str']);
                                                $sql="select * from info where name like '%$str%' or Location like '%$str%' or Id like '%$str%'";
                                                $res=mysqli_query($con,$sql);
                                                if(mysqli_num_rows($res)>0){
                                                    while($row=mysqli_fetch_assoc($res)){
                                                        echo "<a href='cre1.html?id=".$row['Name']."'>" .$row['Name']. "</a>";
                                                        echo "<br/>";
												if(mysqli_num_rows($res)>0){
													while($row=mysqli_fetch_assoc($res)){
															echo "<a href='cre2.html?id=".$row['Name']."'>" .$row['Name']. "</a>";
															echo "<br/>";

												if (mysqli_num_rows($res)>0){
													while($row=mysqli_fetch_assoc($res)){
															echo "<a href='cre3.html?id=".$row['Name']."'>" .$row['Name']. "</a>";
															echo "<br/>";
													}
												}





													}
												}
		
                                                    }

													
            
                                                }
                                            }
        
    
                                            ?>

											

                                        </div>

										<a class=blister href="http://127.0.0.1/project/userlocation.html"><button class="enabler">


											<b>Or enable user location</b>
										
										</button></a>

											
										<script src="https://maps.google.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU"></script>

										
									</div>
									

									
								</div>

								
				</div>
				
			
			</div>


	</div>

	<section class="about-us" id="About">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="section-title">
						<h2 class="color-orange">About Us</h2>
						
					</div>
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					
					<div class="about-image " >
						<img src="images/about.jpeg" />
					</div>
					
				</div>
				
				<div class="col-md-8">
					
					<div class="about-content " >
						<h3>Why Kinder Care?</h3>
						<p>Being a parent is perhaps one of the most gratifying Jobs one can think of.It may not seem so obvious so soon, but results of good parenting have always tended to produce extraordinary results in the long run.Crèches or Day-care centres are therefore, there to help you shoulder that very burden all the while not lessening the significance of a parent’s role in a child’s mind.</p>
						
						<p>Crèches provide children multiple ways to socialize and meet others who are just like them from a very early age. A Crèche or  daycare is a place where kids are provided with a sequence of different fun and learning activities that include singing and storytelling. These activities are crucial to a child’s intellectual growth and development, especially for toddlers. </p>
						
						<p>Our platform, “Kinder Care” makes it much more convenient for the guardians to find a daycare that provides the best kind of treatment to their young ones by providing a one-stop solution to effective day care for young children and Crèche management.</p>
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	<section class="contactus" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					
					<div class="section-title">
						<h2 class="color-orange">Information</h2>
						<p>You can contact us directly through these in case of urgency or general help and support</p>
					</div>
					
					<div class="contact-info">
						<p class="email">ContactCrew@KinderCare.com</p>
						<p class="contact">8567890426<br/>3500036232</p>
						<p class="address">Assam Don Bosco University, Azara </p>
					</div>
					
					<div class="contact-social-link">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
					
				</div>
				
				<div class="col-md-6">
					
					<div class="section-title">
						<h2 class="color-orange">Contact Us</h2>
						<p>To report a bug or to provide valuable feedbaack</p>
						
					</div>
					
					<div class="contact-form">
						<form id="contactForm" action="#" method="post">
							<div class="row">
								<div class="form-group col-md-6 col-sm-6">
									<input type="text" class="form-control" placeholder="Your Name" />
								</div>
								
								<div class="form-group col-md-6 col-sm-6">
									<input type="email" class="form-control" placeholder="Your Email Address" />
								</div>
								
								<div class="form-group col-md-12 col-sm-12">
									<input type="text" class="form-control" placeholder="Subject">
								</div>
								
								<div class="form-group col-md-12 col-sm-12">
									<textarea rows="4"class="form-control" placeholder="How can we help you?"></textarea>
								</div>
								
								<div class="col-md-12 col-sm-12 text-center">
									<button type="submit" class="btn-contact">Submit</button>
								</div>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="footer-logo">
						<img src="images/logo.png" alt="" />
					</div>
					
					<div class="footer-copyright">
						<p>Copyright &copy; 2022.</p>
					</div>
					
				</div>
			</div>
		</div>
	</footer>

	

</body>
</html>