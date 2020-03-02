<div class="container">

<div class="jumbotron" >
	<h1 class="display-3 text-danger" >Temperature Converter</h1>
	<p class="lead">CTEC 127 - PHP with SQL 1</p>
	<hr class="my-2">
	<p>Convert for fun!</p>
</div>

<div class="row">
	<div class="col-6">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="temp">Original Temperature</label>
			<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp" class="form-control mb-3">
	</div>
	<div class="col-6">
		<label for="convertfrom">Convert From:</label> 
		<select name="originalunit" class="form-control">
			<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
			<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
			<option value="fahrenheit"<?php if($originalUnit == "fahrenheit") echo ' selected="selected"';?>>Fahrenheit</option>
			<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
		</select>
	</div> 
</div> 

<div class="row mb-3">
	<div class="col-6">
		<label for="convertedtemp">Converted Temperature</label>
		<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
		name="convertedtemp" size="7" maxlength="7" id="convertedtemp" class="form-control mb-3 ">
	</div>
	<div class="col-6">
		<label for="convertto">Convert To:</label>
		<select name="conversionunit" class="form-control">
			<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
			<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
			<option value="fahrenheit"<?php if($conversionUnit == "fahrenheit") echo ' selected="selected"';?>>Fahrenheit</option>
			<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
		</select>
	</div>
</div>

<div class="row mb-5">
	<div class="col-12">
	<input type="submit" value="Convert" class="btn btn-dark"/>  
	</div>
</div>


<div class="row mb-2">
	<div class="col-6 mb-5">
		<h2 class="text-danger mb-3">Formulas</h2>
		<p>F = Fahrenheit, C = Celsius, K = Kelvin</p>
		<ul>
			<li class="mt-2"><strong>Celsius to Fahrenheit</strong></li>
				<ul>
					<li class="formula">Temp&#176;C x 9/5 +32</li>
				</ul>
			<li class="mt-2"><strong>Celsius to Kelvin</strong></li>
				<ul>
					<li class="formula">Temp&#176;C x 273.15</li>
				</ul>
			<li class="mt-2"><strong>Fahrenheit to Celsius</strong></li>
				<ul>
					<li class="formula">(Temp&#176;F - 32) x 5/9</li>
				</ul>
			<li class="mt-2"><strong>Fahrenheit to Kelvin</strong></li>
				<ul>
					<li class="formula">(Temp&#176;F + 459.67) x 5/9</li>
				</ul>
			<li class="mt-2"><strong>Kelvin to Fahrenheit</strong></li>
				<ul>
					<li class="formula"> K x 9/5 - 459.67</li>
				</ul>
			<li class="mt-2"><strong>Kelvin to Celsius</strong></li>
				<ul>
					<li class="formula">Temp K - 273.15</li>
				</ul>
		</ul>
	</div>
	<div class="col-6">
		<h2 class="text-danger mb-3">Systems</h2>
		<p>Three systems for measuring temperature: Fahrenheit, Celsius, Kelvin.</p>
		<ul>
			<li class="mt-2">Fahrenheit is a temperature scale that uses the freezing point of water (32&#176;F) and the boiling point of water (212&#176;F) at the standard atmospheric pressure. Fahrenheit is the common method of temperature measurement in the US. </li>
			<li class="mt-2">Celsius is a measurement of temperature in which 0 degrees represents the freezing point of water, and 100 degrees represents water’s boiling point at the standard atmosphere. Celsius is believed to be more precise than than fahrenheit.</li>
			<li class="mt-2">Kelvin is a temperature scale that is used, where zero reflects the complete absence of thermal energy. Most often used in the scientific world.</li>
		</ul>
	</div>
</div>
</div>
</form>
