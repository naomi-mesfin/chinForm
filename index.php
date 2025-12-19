<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dynamic Cuisine Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #000000;
        color: #ffffff;
        padding: 40px;
    }
/* Hide ALL cuisine dropdowns by default */

.cuisineDiv {
    display: none;
}
    form {
        background: #ffffff;
        padding: 40px;
        max-width: 600px;
        margin: auto;
        border-radius: 8px;
        color: #000000;
    }
	label {
    display: block;
    margin-top: 10px;
    margin-bottom: 4px; /* tight space between label & field */
    font-weight: 500;
}

	input,
	select,
	textarea {
    display: block;
    width: 100%;
    margin-top: 0;
    padding: 6px 10px; /* slightly tighter */
    box-sizing: border-box;
}

	button {
    margin-top: 15px;
    padding: 10px;
}
   
</style>
</head>
<body>

<h2 style="text-align: center;">Chinese Cuisine Cooking Form</h2>


<form action="/submit" method="POST">
	<label for="name">Full Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>
	
<label for="cuisine">Select a Cuisine:</label>
<select id="cuisine" name="cuisine" onchange="showCuisineDropdown()" required>
    <option value="">-- Select Cuisine --</option>
    <option value="cantonese">Cantonese</option>
    <option value="sichuan">Sichuan</option>
    <option value="hunan">Hunan</option>
    <option value="shandong">Shandong</option>
    <option value="jiangsu">Jiangsu</option>
    <option value="zhejiang">Zhejiang</option>
    <option value="fujian">Fujian</option>
    <option value="anhui">Anhui</option>
</select>	

    <!-- Cantonese dropdown (multi-select) -->
 <div class="cuisineDiv" id="cantoneseDiv">
  <label>Select up to 4 Cantonese Dishes:</label>
  <select multiple size="8" name="cantonese[]"
          onchange="limitSelection(this, 4)">
    <option value="dimsum">Dim Sum</option>
    <option value="roasted">Roasted Meats</option>
    <option value="seafood">Seafood</option>
    <option value="steamed">Steamed Dishes</option>
    <option value="stirfried">Stir-Fried</option>
    <option value="soups">Soups</option>
    <option value="noodles">Rice & Noodles</option>
    <option value="desserts">Desserts</option>
  </select>
</div>

    <!-- Sichuan dropdown -->
 <div class="cuisineDiv" id="sichuanDiv">
  <label>Select up to 4 Sichuan Dishes:</label>
  <select multiple size="8" name="sichuan[]"
          onchange="limitSelection(this, 4)">
    <option value="mapo">Mapo Tofu</option>
    <option value="kungpao">Kung Pao Chicken</option>
    <option value="hotpot">Hot Pot</option>
    <option value="dandan">Dan Dan Noodles</option>
  </select>
</div>
	
	<!-- Hunan dropdown -->
<div class="cuisineDiv" id="hunanDiv">
  <label>Select up to 4 Hunan Dishes:</label>
  <select multiple size="8" name="hunan[]"
          onchange="limitSelection(this, 4)">
    <option value="redBraisedPork">Red Braised Pork</option>
    <option value="fishHeadChili">Fish Head Chili</option>
    <option value="spicyFrogLegs">Spicy Frog Legs</option>
    <option value="smokedPorkBamboo">Smoked Pork Bamboo</option>
	<option value="stirFriedBeefChili">Stir Fried Beef Chili</option>
    <option value="spicyEggplant">Spicy Hunan Eggplant</option>
    <option value="smokedDuck">Smoked Duck</option>
	<option value="pickledVegetables">Pickled Vegetable Stir-Fry</option>
  </select>
</div>
	
    <!-- Shandong dropdown -->	
<div class="cuisineDiv" id="shandongDiv">
  <label>Select up to 4 Shandong Dishes:</label>
  <select multiple size="8" name="Shandong[]"
          onchange="limitSelection(this, 4)">
    <option value="sweetSourCarp">Sweet Sour Carp</option>
    <option value="braisedAbaloneSeaCucumber">Braised Abalone with Sea Cucumber</option>
	 <option value="dezhouBraisedChicken">Dezhou Braised Chicken</option>
    <option value="stirFriedSeaCucumberScallions">Stir-Fried Sea Cucumber with Scallions</option>
    <option value="shandongDumplings">Shandong-Style Dumplings</option>
    <option value="friedPorkSlices">Fried Pork Slices with Garlic</option>
    <option value="braisedPorkShandong">Shandong Braised Pork</option>
    <option value="stirFriedVegetables">Shandong Stir-Fried Vegetables</option>
  </select>
</div>
	
    <!-- jiangsu dropdown -->
<div class="cuisineDiv" id="jiangsuDiv">
  <label>Select up to 4 Jiangsu Dishes:</label>
  <select multiple size="8" name="Jiangsu[]"
          onchange="limitSelection(this, 4)">
    <option value="sweetSourMandarinFish">Sweet and Sour Mandarin Fish</option>
    <option value="lionsHeadMeatballs">Lion’s Head Meatballs</option>
    <option value="drunkenCrab">Drunken Crab</option>
    <option value="steamedPorkCrabRoe">Steamed Pork with Crab Roe</option>
    <option value="yangzhouFriedRice">Yangzhou Fried Rice</option>
    <option value="braisedPorkJiangsu">Jiangsu Braised Pork</option>
    <option value="braisedFishJiangsu">Jiangsu-Style Braised Fish</option>
    <option value="stirFriedVegetablesJiangsu">Jiangsu Stir-Fried Vegetables</option>
  </select>
</div>

<!-- zhejiang dropdown -->
<div class="cuisineDiv" id="zhejiangDiv">
  <label>Select up to 4 zhejiang Dishes:</label>
  <select multiple size="8" name="zhejiang[]"
          onchange="limitSelection(this, 4)">
	<option value="westLakeFish">West Lake Fish in Vinegar Gravy</option>
    <option value="dongpoPork">Dongpo Pork</option>
    <option value="beggarsChicken">Beggar’s Chicken</option>
    <option value="steamedCrabShaoxing">Steamed Crab with Shaoxing Wine</option>
    <option value="longjingShrimp">Longjing Shrimp</option>
    <option value="braisedPorkZhejiang">Zhejiang Braised Pork</option>
    <option value="stirFriedVegetablesZhejiang">Zhejiang Stir-Fried Vegetables</option>
    <option value="tofuZhejiang">Zhejiang-Style Tofu</option>
   </select>
</div>

<!-- Fujian dropdown -->
<div class="cuisineDiv" id="fujianDiv">
  <label>Select up to 4 Fujian Dishes:</label>
  <select multiple size="8" name="fujian[]"
          onchange="limitSelection(this, 4)">
	<option value="buddhaJumpsWall">Buddha Jumps Over the Wall</option>
    <option value="redCookedPorkFujian">Red-Cooked Pork</option>
    <option value="fujianFriedRice">Fujian Fried Rice</option>
    <option value="steamedFishRedYeast">Steamed Fish with Red Yeast Rice</option>
    <option value="oysterOmelette">Oyster Omelette</option>
    <option value="braisedSeafoodFujian">Braised Seafood</option>
    <option value="stirFriedVegetablesFujian">Fujian Stir-Fried Vegetables</option>
    <option value="shrimpSoupFujian">Fujian-Style Shrimp Soup</option>
</select>
</div>

<!-- Anhui dropdown -->
<div class="cuisineDiv" id="anhuiDiv">
  <label>Select up to 4 Anhui Dishes:</label>
  <select multiple size="8" name="anhui[]"
          onchange="limitSelection(this, 4)">
	<option value="stewedTurtleHam">Stewed Soft-Shelled Turtle with Ham</option>
    <option value="braisedBambooShoots">Braised Bamboo Shoots</option>
    <option value="stinkyMandarinFish">Stinky Mandarin Fish</option>
    <option value="huangshanBraisedPigeon">Huangshan Braised Pigeon</option>
    <option value="wildMushroomSoup">Wild Mushroom Soup</option>
    <option value="stirFriedWildVegetables">Stir-Fried Wild Vegetables</option>
    <option value="braisedPorkAnhui">Anhui Braised Pork</option>
    <option value="bambooShootSoup">Bamboo Shoot Soup</option>
</select>
</div>

    <label for="experience">Tell us how long you cooked this food?(years)</label>
    <textarea id="experience" name="message" rows="1"></textarea>
	
	<label for="chefexperience">Have you ever worked as a chef or professional cook?(enter Yes/No)</label>
	 <textarea id="chefexperience" name="chefexperience" rows="1"></textarea>
    
<script>
function toggleSpecify(show) {
    const div = document.getElementById('specifyDiv');
    div.style.display = show ? 'block' : 'none';
    if (!show) {
        document.getElementById('specifyText').value = '';
    }
}
</script>

<label>Do you have the following items in your kitchen?</label>
<label for="saucepan">Saucepan?</label>
<select id="saucepan" name="saucepan" required>
    <option value="">-- Select --</option>
    <option value="yes">Yes</option>
    <option value="no">No</option>
</select>

<label for="fryingPan">Frying Pan?</label>
<select id="fryingPan" name="fryingPan" required>
    <option value="">-- Select --</option>
    <option value="yes">Yes</option>
    <option value="no">No</option>
</select>

<label for="stockpot">Stockpot?</label>
<select id="stockpot" name="stockpot" required>
    <option value="">-- Select --</option>
    <option value="yes">Yes</option>
    <option value="no">No</option>
</select>

	 
	<button type="submit" id="submitBtn" disabled>Submit</button>



</form>

<script>
let currentSelect = null;

function showCuisineDropdown() {
    const selected = document.getElementById("cuisine").value;
    const submitBtn = document.getElementById("submitBtn");

    const cuisines = [
        "cantonese", "sichuan", "hunan", "shandong",
        "jiangsu", "zhejiang", "fujian", "anhui"
    ];

    // Hide all cuisine dropdowns and reset
    cuisines.forEach(c => {
        const div = document.getElementById(c + "Div");
        const select = div.querySelector("select");
        div.style.display = "none";
        select.selectedIndex = -1;
        select.required = false;
    });

    submitBtn.disabled = true; // disable initially

    if (selected) {
        const activeDiv = document.getElementById(selected + "Div");
        const activeSelect = activeDiv.querySelector("select");

        activeDiv.style.display = "block";
        activeSelect.required = true;
        currentSelect = activeSelect;

        checkSelection(activeSelect); // initial check
    }
}

function limitSelection(select, max) {
    if (select.selectedOptions.length > max) {
        select.selectedOptions[select.selectedOptions.length - 1].selected = false;
        alert(`You can only select ${max} options.`);
    }
    checkSelection(select);
}

function checkSelection(select) {
    const submitBtn = document.getElementById("submitBtn");
    const selectedCount = select.selectedOptions.length;

    // Enable submit ONLY when exactly 4 are selected
    submitBtn.disabled = (selectedCount !== 4);
}
</script>



</body>
</html>
