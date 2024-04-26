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
					$bits = test_input($_POST['bits']);
					

					echo "<div class='background'>";
					echo "<h2>Predicted College</h2>";
					if($board<60)
						echo "Colleges won't accept your application.
					         Because your  board marks are less than 60";

				    elseif ($board>100) 
					    echo "Colleges won't accept your application.
					         Because your  board marks are not greater than 100";
					
					else
					{
						$avg = (((($jee*100)/360)*40))/100;
						if($avg>99.2)
							echo "You are eligible to apply for  COEP Technological University<br>";
						if($bits>99.2)
							echo "You are eligible to apply for  COEP Technological University<br>";
						if($bits>98.98)
							echo "You are eligible to apply for  Pune Institute of Computer Technology, Dhankavdi, Pune<br>";
					    if($bits>98.41)
							echo "You are eligible to apply for   Bhartiya Vidya Bhavan's Sardar Patel Institute of Technology , Andheri, Mumbai <br>";
						if($bits>98.00)
							echo "You are eligible to apply for Bansilal Ramnath Agarawal Charitable Trust's Vishwakarma Institute of Technology, Bibwewadi, Pune <br>";
						if($bits>98.50)
							echo "You are eligible to apply for Thadomal Shahani Engineering College, Bandra, Mumbai<br>";
						if($bits>97.67)
							echo "You are eligible to apply for Shri Vile Parle Kelvani Mandal's Dwarkadas J. Sanghvi College of Engineering, Vile Parle,Mumba<br>";
						if($bits>97.34)
							echo "You are eligible to apply for Pimpri Chinchwad Education Trust, Pimpri Chinchwad College of Engineering, Pune <br>";
						if($bits>97.08)
							echo "You are eligible to apply for K J Somaiya Institute of Technology<br>";
						if($bits>96.58)
							echo "You are eligible to apply for  Shri Ramdeobaba College of Engineering and Management, Nagpur<br>";
						if($bits>96.24)
							echo "You are eligible to apply for Thakur College of Engineering and Technology, Kandivali, Mumbai <br>";
						if($bits>96.00)
							echo "You are eligible to apply for MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune  <br>";
						if($bits>95.64)
							echo "You are eligible to apply for  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>";
						if($bits>95.15)
							echo "You are eligible to apply for  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>";
						if($bits>94.35)
							echo "You are eligible to apply for  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>";
						if($bits>93.75)
							echo "You are eligible to apply for  S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>";
						if($bits>92.69)
							echo "You are eligible to apply for  Shri Ramdeobaba College of Engineering and Management, Nagpur<br>";
						if($bits>91.97)
							echo "You are eligible to apply for Don Bosco Institute of Technology, Mumbai<br>";
						if($bits>90.86)
							echo "You are eligible to apply for  Vidyalankar Institute of Technology,Wadala, Mumba<br>";
						if($bits>90.45)
							echo "You are eligible to apply for  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>";
						if($bits>90.03)
							echo "You are eligible to apply for St. Francis Institute of Technology,Borivali, Mumba <br>";
						if($bits>89.56)
							echo "You are eligible to apply for  MIT Academy of Engineering,Alandi, Pune<br>";
						if($bits>89.07)
							echo "You are eligible to apply for Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>";
						if($bits>88.75)
							echo "You are eligible to apply for All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>";
						if($bits>88.29)
							echo "You are eligible to apply for  - Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>";
						if($bits>87.34)
							echo "You are eligible to apply for  Sinhgad College of Engineering, Vadgaon (BK), Pune<br>";
						if($bits>86.68)
							echo "You are eligible to apply for  - Mahatma Education Society's Pillai College of Engineering, New Panve<br>";
						if($bits>85.49)
							echo "You are eligible to apply for - Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>";
						if($bits>85.01)
							echo "You are eligible to apply for Progressive Education Society's Modern College of Engineering, Pune <br>";
						if($bits>84.65)
							echo "You are eligible to apply for   Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>";
						if($bits>84.06)
							echo "You are eligible to apply for  K. K. Wagh Institute of Engineering Education and Research, Nashik<br>";
						if($bits>83.57)
							echo "You are eligible to apply for - Atharva College of Engineering,Malad(West),Mumbai<br>";
						if($bits>83.00)
							echo "You are eligible to apply for  Modern Education Society's College of Engineering, Pune<br>";
						if($bits>82.66)
							echo "You are eligible to apply for - JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>";
						if($bits>82.14)
							echo "You are eligible to apply for  ST. Vincent Pallotti College of Engineering & Technology, Nagpu <br>";
						if($bits>81.69)
							echo "You are eligible to apply for- K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>";
						if($bits>81.29) 
							echo "You are eligible to apply for  Terna Engineering College, Nerul, Navi Mumba<br>";
						if($bits>80.83)
							echo "You are eligible to apply for YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>";
						if($bits>80.49)
							echo "You are eligible to apply for  Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>";
						if($bits>80.17)
							echo "You are eligible to apply for - Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>";
						if($bits>79.45)
							echo "You are eligible to apply for - JSPM Narhe Technical Campus, Pune <br>";
						if($bits>79.15)
							echo "You are eligible to apply for - TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>";
						if($bits>78.48)
							echo "You are eligible to apply for Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>";
						if($bits>78.49)
							echo "You are eligible to apply for  Anantrao Pawar College of Engineering & Research, Pune<br>";
						if($bits>78.00)
							echo "You are eligible to apply for  Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>";
						if($bits>77.89)
							echo "You are eligible to apply for - MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>";
						if($bits>77.58)
							echo "You are eligible to apply for - KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>";
						if($bits>77.20)
							echo "You are eligible to apply for  New Horizon Institute of Technology & Management, Thane<br>";
						if($bits>77.00)
							echo "You are eligible to apply for  - TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, 
							Pune<br>";
						if($bits>76.85)
							echo "You are eligible to apply for SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>";
						if($bits>76.56)
							echo "You are eligible to apply for - Sanghavi College of Engineering, Varvandi, Nashik<br>";
						if($bits>76.48)
							echo "You are eligible to apply for Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>";
						if($bits>76.19)
							echo "You are eligible to apply for  - Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>";
						if($bits>75.84)
							echo "You are eligible to apply for Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>";
						if($bits>75.61)
							echo "You are eligible to apply for  Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>";
						if($bits>75.00)
							echo "You are eligible to apply for Prof Ram Meghe College of Engineering and Management, Badnera<br>";
						if($bits>75.02)
							echo "You are eligible to apply for Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>";
						if($bits>74.34)
							echo "You are eligible to apply for P.K. Technical Campus, Pune.<br>";
						if($bits>73.25)
							echo "You are eligible to apply for Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>";
						if($bits>72.54)
							echo "You are eligible to apply for Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>";
						if($bits>71.19)
							echo "You are eligible to apply for - K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>";
						if($bits>70.32)
							echo "You are eligible to apply for S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>";
						if($bits>69.02)
							echo "You are eligible to apply for Konkan Gyanpeeth College of Engineering, Karjat <br>";
						if($bits>68.19)
							echo "You are eligible to apply for Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>";
						if($bits>65.34)
							echo "You are eligible to apply for Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>";
						if($bits>64.35)
							echo "You are eligible to apply for Bharat College of Engineering, Kanhor, Badlapur(W)<br>";
						if($bits>62.89)
							echo "You are eligible to apply for - Sanjay Ghodawat Institute<br>";
						if($bits>60.26)
							echo "You are eligible to apply for - Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>";
						if($bits>56.98)
							echo "You are eligible to apply for  Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>";
						if($bits>54.75)
							echo "You are eligible to apply for - Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>";
						if($bits>51.74)
							echo "You are eligible to apply for Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>";
						if($bits>49.19)
							echo "You are eligible to apply for Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>";
						if($bits>45.19)
							echo "You are eligible to apply for Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>";
						if($bits>43.64)
							echo "You are eligible to apply for Kavi Kulguru Institute of Technology & Science, Ramtek<br>";
						if($bits>41.83)
							echo "You are eligible to apply for Indala College Of Engineering, Bapsai Tal.Kalyan<br>";
						if($bits>37.19)
							echo "You are eligible to apply for Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>";
						if($bits>34.76)
							echo "You are eligible to apply for Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>";
						if($bits>32.64)
							echo "You are eligible to apply for Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>";
						if($bits>30.45)
							echo "You are eligible to apply for Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";

						 
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