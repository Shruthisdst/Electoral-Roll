<!DOCTYPE html>
<html lang="en">
<head>
	<title>Electoral Roll for a Graduates</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script  src="js/input_method.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		  <img src="images/images.jpeg" alt="Logo" />
		  <a class="title" href="#"></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			 <ul class="nav navbar-nav navbar-right">
			<li><a href="#">Home</a></li>
<!--
			<li><a href="about.html">About Us</a></li>
			<li><a href="#">Application Form</a></li>
-->
			</ul>
	  </div>
	</div>
</nav>

<div class="container">
	<h1 class="text-center">Application Form</h1>
	<hr />
	<h2 class="text-center">FORM-18</h2>
	<h4 class="text-center">(See Rule 31)</h4>
	<h3 class="text-center">Claim for inclusion of name in the Electoral Roll for a Graduates' Constituency</h3><br />
	<p class="text-left"><strong>To</strong>,<br />The Electroral Registration Officer,<br />South Graduates' Constituency</p>
	<p><strong>Sir</strong>,</p>
	<p class="textIndent">I request that my name be registered in the Electoral Roll for the South Graduates' Constituency. The Particulars are:</p>
	<br /> 
	<form  method="POST" class="form-horizontal" role="form" action="toXML.php">
		<div class="form-group">
			<label for="I_sec1_1" class="control-label col-xs-2">1. Name (in Full)</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_1" name="I_sec1_1">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_2" class="control-label col-xs-2">Sex:</label>
			<div class="col-xs-8">
				Male &nbsp; <input type="radio" name="I_sec1_2" value="male" id="I_sec1_2">&nbsp;&nbsp;&nbsp;&nbsp;
				Female &nbsp; <input type="radio" name="I_sec1_2" value="female" id="I_sec1_2_2">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_3" class="control-label col-xs-2">Father's / Mother's / Husband's Name (in Full)</label><br />
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_3" name="I_sec1_3">
			</div>
		</div>
		<div class="form-group">
			<label for="list1" class="control-label col-xs-2">Select any one</label>
			<div class="col-xs-6">
				<input type="checkbox" name="list" value="Father" id="list1">Father<br />
				<input type="checkbox" name="list" value="Mother" id="list2">Mother<br />
				<input type="checkbox" name="list" value="Husband" id="list3">Husband<br />
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_4" class="control-label col-xs-2">Qualification</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_4" name="I_sec1_4">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_5" class="control-label col-xs-2">Occupation</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_5" name="I_sec1_5">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_6" class="control-label col-xs-2">House Address (place of ordinary residence)</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_6" name="I_sec1_6">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_7" class="control-label col-xs-2">House No.</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_7" name="I_sec1_7">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_8" class="control-label col-xs-2">Street, Mohalla</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_8" name="I_sec1_8">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_9" class="control-label col-xs-2">Town, Village</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_9" name="I_sec1_9">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_10" class="control-label col-xs-2">Post Office</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_10" name="I_sec1_10">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_11" class="control-label col-xs-2">Police Station, Tehsil, Taluka, Mouza</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_11" name="I_sec1_11">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_12" class="control-label col-xs-2">District</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_12" name="I_sec1_12">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec1_13" class="control-label col-xs-2">Age</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec1_13" name="I_sec1_13">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec2_1a" class="control-label col-xs-2">2. *I am Graduate</label>
			<div class="col-xs-6">of the
				<input type="text" class="form-control" id="I_sec2_1a" name="I_sec2_1a"><br />
				University having passed the Degree/Diploma Examination in the year
				<input type="text" class="form-control" id="I_sec2_1b" name="I_sec2_1b">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 center bold">OR</div>
		</div><br />
		<div class="form-group">
			<label for="I_sec2_2a" class="control-label col-xs-2">*I am in possession</label>
			<div class="col-xs-6">of Diploma/certificates in
				<input type="text" class="form-control" id="I_sec2_2a" name="I_sec2_2a"><br />
				which is a qualification equivalent to that of a graduate of university in India having passed the examination of the Diploma / Certificate in the year
				<input type="text" class="form-control" id="I_sec2_2b" name="I_sec2_2b">
			</div>
		</div>
		<div class="form-group">
			<label for="I_sec3_1" class="control-label col-xs-6">3. *In support of my claim as being a graduate / in possession of above, the Diploma/Certificate submit herewith</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec3_1" name="I_sec3_1">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 bold">4. ** My name has not been included in the electoral roll for this or any other graduate's constituency</div>
		</div><br />
		<div class="row">
			<div class="col-xs-12 center bold">OR</div>
		</div><br />
		<div class="form-group">
			<label for="I_sec4_1" class="control-label col-xs-6">** My name has been included in electoral roll for the graduate's constituency under the address given below and I request that to be deleted from the roll.</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="I_sec4_1" name="I_sec4_1">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 bold">5. I declare that I am a citizen of India and that all the particulars given above are true to the best of my knowtedge and belief.</div>
		</div><br />
		<!--<div class="row">
			<div class="col-xs-6">
				<label for="id5_1" class="control-label col-xs-6">Place :</label>
				<div class="col-xs-6">
					<input type="text" class="form-control" id="id5_11" name="id5_1"><br />
				</div>
				<label for="id2_1" class="control-label col-xs-6">Date :</label>
				<div class="col-xs-6">
					<input type="text" class="form-control" id="id5_12" name="id5_1">
				</div>
			</div>
			<div class="col-xs-6 right">..................................................<br />Signature of Claiment</div>
		</div>-->
		<hr />
		<p class="text-justify"><small>Note: Any person who makes a statement or declaration which is false and which he either knows/believes to be false or dose not believe to be true is punishable under section 31 of the Representation of the people Act,1950.</small></p>
		<ul class="list-unstyled">
			<li>* Strike out the paragraph not applicable.</li>
			<li>** Strike of the inappropriale alternatives.</li>
		</ul>
		<div class="row">
			<div class="col-xs-12 center dashed_border"></div>
		</div>
		<h3 class="text-center"><u>Additional Information</u></h3><br /><br />
		<!--<div class="form-group">
			<label for="id1_11" class="control-label col-xs-4">1. Name of the elector / applicant</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="id1_11" name="id1_11">
			</div>
		</div>
		<div class="form-group">
			<label for="id2" class="control-label col-xs-4">2. Father's / Mother's / Husband's name</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="id2" name="id2">
			</div>
		</div>-->
		<div class="form-group">
			<label for="II_sec1_1" class="control-label col-xs-4">(a) Whether registered as elector for any Assembly Constituency</label>
			<div class="col-xs-8">
				Yes &nbsp; <input type="radio" name="II_sec1_1" value="yes" id="II_sec1_1">&nbsp;&nbsp;&nbsp;&nbsp;
				No &nbsp; <input type="radio" name="II_sec1_1" value="no" id="II_sec1_2">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-xs-4">(b) If yes, mention the following particulars</label>
		</div>
		<div class="form-group">
			<label for="II_sec2_1" class="control-label col-xs-6">(i) Number of Assembly Constituency</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="II_sec2_1" name="II_sec2_1">
			</div>
		</div>
		<div class="form-group">
			<label for="II_sec2_2" class="control-label col-xs-6">Name of Assembly Constituency</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="II_sec2_2" name="II_sec2_2">
			</div>
		</div>
		<div class="form-group">
			<label for="II_sec3_1" class="control-label col-xs-6">(ii) Part number (if known) /</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="II_sec3_1" name="II_sec3_1">
			</div>
		</div>
		<div class="form-group">
			<label for="II_sec3_2" class="control-label col-xs-6">Polling station number (if known)</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="II_sec3_2" name="II_sec3_2">
			</div>
		</div>
		<!--<div class="form-group">
			<label for="id3_ii" class="control-label col-xs-6">(iii) Date of Birth</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="id3_iii" name="id3_iii">
			</div>
		</div>-->
		 <div class="form-group">
			<label for="II_sec4_1" class="control-label col-xs-6">(iii) Date of Birth</label>
			<div class="col-xs-6">
				Day &nbsp; 
				<select name="II_sec4_1" id="II_sec4_1">
					<option value="">&nbsp;</option>
				<?php 
					for($i=1;$i<=31;$i++)
					{
						echo '<option value="'. str_pad($i,2,0,STR_PAD_LEFT) .'">'. str_pad($i,2,0,STR_PAD_LEFT) .'</option>';
						
					}
				?> 
				</select> &nbsp;&nbsp;
				Month &nbsp; 
				<select name="II_sec4_2" id="II_sec4_2">
					<option value="">&nbsp;</option>
				<?php 
					for($i=1;$i<=12;$i++)
					{
						echo '<option value="'. str_pad($i,2,0,STR_PAD_LEFT) .'">'. str_pad($i,2,0,STR_PAD_LEFT) .'</option>';
						
					}
				?> 
				</select>&nbsp;&nbsp;
				Year &nbsp; 
				<select name="II_sec4_3" id="II_sec4_3">
					<option value="">&nbsp;</option>
				<?php 
					for($i=1940;$i<=date("Y");$i++)
					{
						echo '<option value="'. $i .'">'. $i .'</option>';
						
					}
				?> 
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="II_sec5_1" class="control-label col-xs-6">(iv) EPIC number (if any)</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="II_sec5_1" name="II_sec5_1">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-xs-6">(v) Contact Phone No.</label>
		</div>
		<div class="form-group">
			<label for="II_sec6_1" class="control-label col-xs-6">Mobile</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="II_sec6_1" name="II_sec6_1">
			</div>
		</div>
		<div class="form-group">
			<label for="II_sec6_2" class="control-label col-xs-6">Land line</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="II_sec6_2" name="II_sec6_2">
			</div>
		</div>
		<div class="form-group">
			<label for="II_sec7_1" class="control-label col-xs-6">(vi) Email address (if any)</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" id="II_sec7_1" name="II_sec7_1">
			</div>
		</div><br />
		<div class="row right">
			<div class="col-xs-10 center">
				<button type="submit" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;
				<button type="reset" class="btn btn-default">Reset</button>
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-10"></div>
			<div class="col-xs-2 right">
			</div>
		</div>
	</form>
</div>
</body>
</html>

 
