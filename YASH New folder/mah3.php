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
		<form method="post" action="mah.php">
			<div id="center">
				<input class="ip" type="text" name="board" placeholder="Board's Percentage" required><br><br>
				<input class="ip" type="text" name="jee" placeholder="JEE Score" ><br><br>
				<input class="ip" type="text" name="bits" placeholder="MHT_CET Score"><br><br>
				  
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
						else if($bits>98.56)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							1) COEP Technological University<br>
							2) Pune Institute of Computer Technology, Dhankavdi, Pune<br>
							3) Bhartiya Vidya Bhavan's Sardar Patel Institute of Technology , Andheri, Mumbai<br>
							4) Bansilal Ramnath Agarawal Charitable Trust's Vishwakarma Institute of Technology, Bibwewadi, Pune <br>
							5) Thadomal Shahani Engineering College, Bandra, Mumbai<br>
							7) Shri Vile Parle Kelvani Mandal's Dwarkadas J. Sanghvi College of Engineering, Vile Parle,Mumbai<br>
							8) Pimpri Chinchwad Education Trust, Pimpri Chinchwad College of Engineering, Pune<br>
							9) K J Somaiya Institute of Technology<br>
							10) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							11) Thakur College of Engineering and Technology, Kandivali, Mumbai <br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>98.27)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							2) Pune Institute of Computer Technology, Dhankavdi, Pune<br>
							3) Bhartiya Vidya Bhavan's Sardar Patel Institute of Technology , Andheri, Mumbai<br>
							4) Bansilal Ramnath Agarawal Charitable Trust's Vishwakarma Institute of Technology, Bibwewadi, Pune <br>
							5) Thadomal Shahani Engineering College, Bandra, Mumbai<br>
							7) Shri Vile Parle Kelvani Mandal's Dwarkadas J. Sanghvi College of Engineering, Vile Parle,Mumbai<br>
							8) Pimpri Chinchwad Education Trust, Pimpri Chinchwad College of Engineering, Pune<br>
							9) K J Somaiya Institute of Technology<br>
							10) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							11) Thakur College of Engineering and Technology, Kandivali, Mumbai <br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
					   else if($bits>97.83)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							3) Bhartiya Vidya Bhavan's Sardar Patel Institute of Technology , Andheri, Mumbai<br>
							4) Bansilal Ramnath Agarawal Charitable Trust's Vishwakarma Institute of Technology, Bibwewadi, Pune <br>
							5) Thadomal Shahani Engineering College, Bandra, Mumbai<br>
							7) Shri Vile Parle Kelvani Mandal's Dwarkadas J. Sanghvi College of Engineering, Vile Parle,Mumbai<br>
							8) Pimpri Chinchwad Education Trust, Pimpri Chinchwad College of Engineering, Pune<br>
							9) K J Somaiya Institute of Technology<br>
							10) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							11) Thakur College of Engineering and Technology, Kandivali, Mumbai <br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>97.18)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							4) Bansilal Ramnath Agarawal Charitable Trust's Vishwakarma Institute of Technology, Bibwewadi, Pune <br>
							5) Thadomal Shahani Engineering College, Bandra, Mumbai<br>
							7) Shri Vile Parle Kelvani Mandal's Dwarkadas J. Sanghvi College of Engineering, Vile Parle,Mumbai<br>
							8) Pimpri Chinchwad Education Trust, Pimpri Chinchwad College of Engineering, Pune<br>
							9) K J Somaiya Institute of Technology<br>
							10) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							11) Thakur College of Engineering and Technology, Kandivali, Mumbai <br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>97.00)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							5) Thadomal Shahani Engineering College, Bandra, Mumbai<br>
							7) Shri Vile Parle Kelvani Mandal's Dwarkadas J. Sanghvi College of Engineering, Vile Parle,Mumbai<br>
							8) Pimpri Chinchwad Education Trust, Pimpri Chinchwad College of Engineering, Pune<br>
							9) K J Somaiya Institute of Technology<br>
							10) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							11) Thakur College of Engineering and Technology, Kandivali, Mumbai <br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>96.87)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							7) Shri Vile Parle Kelvani Mandal's Dwarkadas J. Sanghvi College of Engineering, Vile Parle,Mumbai<br>
							8) Pimpri Chinchwad Education Trust, Pimpri Chinchwad College of Engineering, Pune<br>
							9) K J Somaiya Institute of Technology<br>
							10) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							11) Thakur College of Engineering and Technology, Kandivali, Mumbai <br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>96.71)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							8) Pimpri Chinchwad Education Trust, Pimpri Chinchwad College of Engineering, Pune<br>
							9) K J Somaiya Institute of Technology<br>
							10) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							11) Thakur College of Engineering and Technology, Kandivali, Mumbai <br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>96.58)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							9) K J Somaiya Institute of Technology<br>
							10) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							11) Thakur College of Engineering and Technology, Kandivali, Mumbai <br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>96.08)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							10) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							11) Thakur College of Engineering and Technology, Kandivali, Mumbai <br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>95.80)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							11) Thakur College of Engineering and Technology, Kandivali, Mumbai <br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>95.43)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							12) MKSSS's Cummins College of Engineering for Women, Karvenagar,Pune<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>94.86)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							13)  B.R.A.C.T's Vishwakarma Institute of Information Technology, Kondhwa (Bk.), Pune <br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>94.25)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							14)  Agnel Charities' FR. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai <br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>93.55)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							15)  Dr. D. Y. Patil Pratishthan's D.Y.Patil College of Engineering Akurdi, Pune <br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>92.67)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							18) S.I.E.S. Graduate School of Technology, Nerul, Navi Mumbai <br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>92.29)
							echo  "You are eligible to apply for  -You are eligible to apply for -:<br>
							19) Shri Ramdeobaba College of Engineering and Management, Nagpur<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>91.37)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							20) Don Bosco Institute of Technology, Mumbai<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>90.73)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							21)  Vidyalankar Institute of Technology,Wadala, Mumba<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>89.65)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							22)  Jaywant Shikshan Prasarak Mandal's,Rajarshi Shahu College of Engineering, Tathawade, Pune <br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>89.28)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							23) St. Francis Institute of Technology,Borivali, Mumbai<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>88.77)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							24)for  MIT Academy of Engineering,Alandi, Pune<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>88.09)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							25) Dr. D. Y. Patil Unitech Society's Dr. D. Y. Patil Institute of Technology, Pimpri, Pune<br>
							26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>87.55)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>							
						    26) All India Shri Shivaji Memorial Society's Institute of Information Technology,Pun<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>87.29)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							27) Rizvi Education Society's Rizvi College of Engineering, Bandra,Mumbai<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>86.52)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							28)Sinhgad College of Engineering, Vadgaon (BK), Pune<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>86.18)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							29) Mahatma Education Society's Pillai College of Engineering, New Panve<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>84.68)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							    Aurangabad College of Engineering, Naygaon Savangi, Aurangabad <br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>84.16)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							    Progressive Education Society's Modern College of Engineering, Pune <br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>83.73)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							    Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai <br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>83.26)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
								K. K. Wagh Institute of Engineering Education and Research, Nashik<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>82.47)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
								Atharva College of Engineering,Malad(West),Mumbai<br>
								Modern Education Society's College of Engineering, Pune<br>
								JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							    ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
								K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
								Terna Engineering College, Nerul, Navi Mumba<br>
								YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
								Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
								Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
								JSPM Narhe Technical Campus, Pune <br>
								TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
								Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
								Anantrao Pawar College of Engineering & Research, Pune<br>
								Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
								MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
								KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
								New Horizon Institute of Technology & Management, Thane<br>
								TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
								SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
								Sanghavi College of Engineering, Varvandi, Nashik<br>
								Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
								Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
								Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
								Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
								Prof Ram Meghe College of Engineering and Management, Badnera<br>
								Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
								P.K. Technical Campus, Pune.<br>
								Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
								Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
								K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
								S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
								Konkan Gyanpeeth College of Engineering, Karjat <br>
								Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
								Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
								Bharat College of Engineering, Kanhor, Badlapur(W)<br>
								Sanjay Ghodawat Institute<br>
								Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
								Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
								Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
								Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
								Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
								Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
								Kavi Kulguru Institute of Technology & Science, Ramtek<br>
								Indala College Of Engineering, Bapsai Tal.Kalyan<br>
								Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
								Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
								Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>81.90)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Modern Education Society's College of Engineering, Pune<br>
							JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
							K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
							Terna Engineering College, Nerul, Navi Mumba<br>
							YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
							Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
							Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
							JSPM Narhe Technical Campus, Pune <br>
							TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>81.36)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							JSPM'S Jaywantrao Sawant College of Engineering,Pune<br>
							ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
							K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
							Terna Engineering College, Nerul, Navi Mumba<br>
							YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
							Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
							Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
							JSPM Narhe Technical Campus, Pune <br>
							TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>80.58)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							ST. Vincent Pallotti College of Engineering & Technology, Nagpur<br>
							K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
							Terna Engineering College, Nerul, Navi Mumba<br>
							YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
							Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
							Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
							JSPM Narhe Technical Campus, Pune <br>
							TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>80.04)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							K. E. Society's Rajarambapu Institute of Technology, Walwa, Sangl <br>
							Terna Engineering College, Nerul, Navi Mumba<br>
							YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
							Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
							Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
							JSPM Narhe Technical Campus, Pune <br>
							TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>79.58) 
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Terna Engineering College, Nerul, Navi Mumba<br>
							YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
							Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
							Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
							JSPM Narhe Technical Campus, Pune <br>
							TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>79.31)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							YASHWANTRAO BHONSALE INSTITUTE OF TECHNOLOGY<br>
							Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
							Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
							JSPM Narhe Technical Campus, Pune <br>
							TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>79.09)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Shri Vile Parle Kelavani Mandal's Institute of Technology, Dhule<br>
							Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
							JSPM Narhe Technical Campus, Pune <br>
							TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>78.51)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Ajeenkya DY Patil School of Engineering, Lohegaon, Pune<br>
							JSPM Narhe Technical Campus, Pune <br>
							TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>78.05)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							JSPM Narhe Technical Campus, Pune <br>
							TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>77.79)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							TSSMS's Pd. Vasantdada Patil Institute of Technology, Bavdhan, Pune<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>77.18)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Amrutvahini Sheti & Shikshan Vikas Sanstha's Amrutvahini College of Engineering, Sangamner<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>76.46)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Anantrao Pawar College of Engineering & Research, Pune<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>75.80)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Jayawant Shikshan Prasarak Mandal, Bhivarabai Sawant Institute of Technology & Research, Wagholi <br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>75.28)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							MET Bhujbal Knowledge City MET League's Engineering College, Adgaon, Nashik <br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>74.58)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							KJEI's Trinity Academy of Engineering, Yewalewadi, Pune <br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>74.40)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							New Horizon Institute of Technology & Management, Thane<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>73.60)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							TSSM's Bhivarabai Sawant College of Engineering and Research, Narhe, Pune<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>73.55)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							SKN Sinhgad Institute of Technology & Science, Kusgaon(BK),Pune<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>70.00)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Sanghavi College of Engineering, Varvandi, Nashik<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>72.48)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Siddhant College of Engineering, A/p Sudumbare, Tal.Maval, Dist-Pune<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>72.19)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Anjuman-I-Islam's Kalsekar Technical Campus, Panve<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>71.84)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Gokhale Education Society's, R.H. Sapat College of Engineering, Management Studies and Research, Nashik<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>71.61)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Haji Jamaluddin Thim Trust's Theem College of Engineering, At. Villege Betegaon, Boisar<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>71.13)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Prof Ram Meghe College of Engineering and Management, Badnera<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>70.82)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Al-Ameen Educational and Medical Foundation, College of Engineering, Koregaon, Bhima<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>70.27)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							P.K. Technical Campus, Pune.<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>69.85)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Guru Gobind Singh College of Engineering & Research Centre, Nashik<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>69.44)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>68.39)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Sahyadri Valley College of Engineering & Technology, Rajuri, Pune<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>67.02)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							K.D.M. Education Society, Vidharbha Institute of Technology,Umred Road ,Nagpur<br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>65.82)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>br>
							S K N Sinhgad College of Engineering, Korti Tal. Pandharpur Dist Solapur<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>63.19)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Konkan Gyanpeeth College of Engineering, Karjat <br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>62.94)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Shramsadhana Bombay Trust, College of Engineering & Technology, Jalgaon <br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>60.35)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Matoshri College of Engineering and Research Centre, Eklahare, Nashik<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>58.89)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Bharat College of Engineering, Kanhor, Badlapur(W)<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>55.26)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Sanjay Ghodawat Institute<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>52.98)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Shree Gajanan Maharaj Shikshan Prasarak Manda'l Sharadchandra Pawar College of Engineering, Dumbarwadi<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>51.75)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Jagadamba Education Soc. Nashik's S.N.D. College of Engineering & Reserch, Babulgaon<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>50.24)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Shahajirao Patil Vikas Pratishthan, S.B.Patil College of Engineering, Vangali, Tal. Indapu<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>47.19)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Samarth Group of Institutions, Bangarwadi, Post Belhe Tal. Junnar Dist. Pune<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>43.19)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Jawahar Education Society's Institute of Technology, Management & Research, Nashik<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>40.64)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Brahma Valley College of Engineering & Research, Trimbakeshwar, Nashik<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>38.03)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Kavi Kulguru Institute of Technology & Science, Ramtek<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>34.09)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Indala College Of Engineering, Bapsai Tal.Kalyan<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>32.06)
							echo"You are eligible to apply for  -You are eligible to apply for -:<br>
							Rajgad Dnyanpeeth's Technical Campus,Dhangwadi, Bhor<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>29.64)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Suman Ramesh Tulsiani Technical Campus: Faculty of Engineering, Kamshet,Pune<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>29.05)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
							Dattakala Group Of Institutions, Swami - Chincholi Tal. Daund Dist. Pune <br>
							 
							Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						else if($bits>27.45)
							echo "You are eligible to apply for  -You are eligible to apply for -:<br>
								Vilasrao Deshmukh Foundation Group of Institutions, Latur<br>";
						 
						 
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