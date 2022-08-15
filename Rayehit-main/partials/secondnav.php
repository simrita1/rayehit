<link rel="stylesheet" href="./css/secondnav.css">
<div class="secondnav">
    <form action="#" method="get">
        <div class="inpgrp kregular">
            <input name="location" type="text" value="Kathmandu" name="search">
            <i class="fa fa-search"></i>
        </div>
        <div class="hidden">
            <input id="sale" type="radio" checked name="status" value='sell'>
            <input id="rent" type="radio" name="status" value='rent'>
        </div>
        <div id="tabsale" class="inptab active kregular">
            For Sale
        </div>
        <div id="tabrent" class="inptab kregular">
            For Rent
        </div>
        <div class="inpgrp kregular">
            <input name="maxprice" type="text" placeholder="Max Price">
        </div>
        <input type="hidden" name="filters" value=1>
        <div class="buttons">
            <button type="submit" class="primarybtn">
                Save Search
            </button>
        </div>
    </form>
</div>