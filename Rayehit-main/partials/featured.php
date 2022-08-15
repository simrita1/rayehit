<?php
    function getFeaturedCard($mysqli,$img,$status,$type,$title,$numbed,$location,$numbath,$land,$price,$uid){

        $lister = getUserFromId($mysqli,$uid);
        if ($lister==null) {
            $phone = "9840441111";
            $seller = "Admin";
        }else{
            $phone = $lister->mobile;
            $seller = $lister->name;
        }
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
            <div class='propertytype small kbold'>
                $seller
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
            <div class='buttons kbold'>
                <button class='primarybtn'>
                <i class='fa fa-phone'></i>    
                $phone
                </button>
            </div>
        </div>
    </div>
</div>
       ";
    }
?>