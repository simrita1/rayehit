<?php
    function getFeaturedCard($pid,$location,$img,$status,$type,$title,$numbed,$numbath,$land,$price){
       return "
       <div class='featuredcard'>
    <div class='image'>
        <img src='$img'>
    </div>
    <div class='featuredtext'>
        <div class='typerow'>
            <div class='propertytype small kbold'>
                $type
            </div>
            <div class='propertytype small kbold'>
                For $status
            </div>
        </div>
        <div title='$title' class='title kbold'>
            $title
        </div>
        <div class='others mlight smalltext'>
            <span>
                <i class='fa fa-bed'></i> $numbed Bedrooms
            </span>
            <span>
                <i class='fa fa-bathtub'></i> $numbath Bathrooms
            </span>
            <span>
                <i class='fa fa-map'></i> $land Aana
            </span>
            <br>
            <span>
                <i class='fa fa-map-pin'></i> $location
            </span>
        </div>
        <div class='pricesection'>
            <div class='primarytext kbold largetext'>
                NPR $price
            </div>
            <div onclick=window.location.href='./deleteProperty.php?id=$pid&img=$img' class='buttons kbold'>
                <button class='primarybtn'>
                <i class='fa fa-trash'></i>
                    Remove Listing
                </button>
            </div>
        </div>
    </div>
</div>
       ";
    }
?>