<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="jagran_logo1.jpg">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>College Predictor-Predicating Future Campus.</title>
</head>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php">
    	<img src="jagran_logo1.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> College Predictor-Predicating Future Campus.
  		</a>
  <!-- Links -->
  		<ul class="navbar-nav ml-auto">
    		<li class="nav-item active">
      			<a class="nav-link" href="home1.php">Home</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="practice.php">About Us</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="login.php">Not <?php
      			if(isset($_SESSION['username']))
      				{
      					echo $_SESSION['username'];
      				}
      			?>? Logout</a>
    		</li>
  		</ul>
	</nav>
	<div class="background">
		<i class="fa fa-quote-left"></i><p>Navigate your future with clarity and confidence. Let our predictor guide you through the realms of possibility, unveiling the beauty of your academic journey.</p>
	</div>
	<div class="background">
		<h2>College Predictor-Predicating Future Campus.</h2><br>
		<form method="post" action="all_india.php">
			<div id="center">
				<input class="ip" type="text" name="board" placeholder="Board's Percentage" required><br><br>
				<input class="ip" type="text" name="jee" placeholder="JEE RANK" ><br><br>
				
				  
				<input class="button" type="submit" name="submit" value="SUBMIT">
			</div>
		</form>
	</div>
	<?php 
		function test_input($data)
			{
				$data=trim($data);
				$data=stripcslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}

			if(isset($_POST['submit']))
			{
				$username=$password="";
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$board = test_input($_POST['board']);
					$jee = test_input($_POST['jee']);
					//$bits = test_input($_POST['bits']);
					//$srm = test_input($_POST['srm']);
					//$vit = test_input($_POST['vit']);

					echo "<div class='background'>";
					echo "<h2>Predicted College</h2>";
					if($board<60)
						echo "Colleges won't accept your application. 
					          Because your board marks are less than 60";
					else
					{if($jee<97)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology (Banaras Hindu University)<br>
							Indian Institute of Technology, Bombay <br>
							Indian Institute of Technology, Delhi<br>
							Indian Institute of Technology, Gandhinagar <br>
							Indian Institute of Technology, Guwahati<br>
							Indian Institute of Technology, Hyderabad <br>
							Indian Institute of Technology, Indore <br>
							Indian Institute of Technology, Jodhpur<br>
							Indian Institute of Technology, Kanpur <br>
							Indian Institute of Technology, Kharagpur<br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<397)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Bombay <br>
							Indian Institute of Technology, Delhi<br>
							Indian Institute of Technology, Gandhinagar <br>
							Indian Institute of Technology, Guwahati<br>
							Indian Institute of Technology, Hyderabad <br>
							Indian Institute of Technology, Indore <br>
							Indian Institute of Technology, Jodhpur<br>
							Indian Institute of Technology, Kanpur <br>
							Indian Institute of Technology, Kharagpur<br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>
								  ";
					    else if($jee<634)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Delhi<br>
							Indian Institute of Technology, Gandhinagar <br>
							Indian Institute of Technology, Guwahati<br>
							Indian Institute of Technology, Hyderabad <br>
							Indian Institute of Technology, Indore <br>
							Indian Institute of Technology, Jodhpur<br>
							Indian Institute of Technology, Kanpur <br>
							Indian Institute of Technology, Kharagpur<br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<928)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Gandhinagar <br>
							Indian Institute of Technology, Guwahati<br>
							Indian Institute of Technology, Hyderabad <br>
							Indian Institute of Technology, Indore <br>
							Indian Institute of Technology, Jodhpur<br>
							Indian Institute of Technology, Kanpur <br>
							Indian Institute of Technology, Kharagpur<br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						    
						else if($jee<1034)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Guwahati<br>
							Indian Institute of Technology, Hyderabad <br>
							Indian Institute of Technology, Indore <br>
							Indian Institute of Technology, Jodhpur<br>
							Indian Institute of Technology, Kanpur <br>
							Indian Institute of Technology, Kharagpur<br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<1123)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Hyderabad <br>
							Indian Institute of Technology, Indore <br>
							Indian Institute of Technology, Jodhpur<br>
							Indian Institute of Technology, Kanpur <br>
							Indian Institute of Technology, Kharagpur<br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<1234)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Indore <br>
							Indian Institute of Technology, Jodhpur<br>
							Indian Institute of Technology, Kanpur <br>
							Indian Institute of Technology, Kharagpur<br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<1345)
							echo"You are eligible to apply for -: <br>
							Indian Institute of Technology, Jodhpur<br>
							Indian Institute of Technology, Kanpur <br>
							Indian Institute of Technology, Kharagpur<br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<1467)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Kanpur <br>
							Indian Institute of Technology, Kharagpur<br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<1689)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Kharagpur<br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<2000)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Madras<br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<2500)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Mandi<br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<2800)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Palakkad<br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<3400)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology,  Patna<br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<3800)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Roorkee<br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<4500)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology,  Ropar<br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<5200)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Tirupati<br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<5545)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Bhilai<br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<5900)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology,Goa<br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<6500)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Jammu<br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<7300)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, Dharwad<br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<8000)
							echo "You are eligible to apply for -: <br>
							Indian Institute of Technology, ISM Dhanbad<br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<9200)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology,Trichy (NITT)<br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>
							";
						else if($jee<9200)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Karnataka (NITK), 1960<br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<9600)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Rourkela (NITRKL), 1961<br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<10100)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Warangal (NITW), 1959<br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<10600)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Calicut (NITC), 1961<br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<11123)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Nagpur (VNIT), 1960<br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<11523)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Durgapur (NITDGP), 1960<br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<11934)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Silchar (NITS), 1967<br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<12500)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology,NIT Jaipur (MNIT), 1963<br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<12900)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Allahabad (MNNIT), 1961<br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<13565)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Kurukshetra (NITKKR), 1963<br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<14078)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Jalandhar (NITJ), 1987<br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<14600)
							echo"You are eligible to apply for -: <br>
							National Institute of Technology, NIT Surat (SVNIT), 1961<br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<15000)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Meghalaya (NITM), 2010<br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<15507)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Patna (NITP), 1886<br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<15946)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Raipur (NITRR), 1956<br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<16786)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Srinagar (NITSRI), 1960<br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<17640)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Bhopal (MANIT), 1960<br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<18100)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Agartala (NITA), 1965<br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<18934)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Goa (NITG), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<19745)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<20545)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Jamshedpur (NITJSR), 1960<br>
							National Institute of Technology, NIT Manipur (NITMN), 2010<br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<21356)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Hamirpur (NITH), 1986<br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<22000)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Uttarakhand (NITUK), 2010<br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<22834)
							echo "YYou are eligible to apply for -: <br>
							National Institute of Technology, NIT Puducherry (NITPY), 2010<br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<23346)
							echo "YYou are eligible to apply for -: <br>
							National Institute of Technology, NIT Arunachal Pradesh (NITAP), 2010<br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<24765)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<25400)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Delhi (NITD), 2010<br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<26500)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Mizoram (NITMZ), 2010<br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<27345)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Nagaland (NITN), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<28178)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Sikkim (NITSKM), 2010<br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";
						else if($jee<29000)
							echo "You are eligible to apply for -: <br>
							National Institute of Technology, NIT Andhra Pradesh (NITANP), 2015<br>";

					}
					echo "</div>";
				}
			}
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>