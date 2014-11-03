<?php
// Aufruf [[img? &file=`assets/images/text.jpg` &sizes=`400,1000`]]

$sizes = explode(',', $sizes);
if (count($sizes) > 0) {
    foreach ($sizes as $i => $size) {
        $sizes[$i] = '[[phpthumbof? &input=`'.$file.'` &options=`w='.$size.'&h=0&q=80`]] '.($size-1).'w';
    }
    return '<img src="[[phpthumbof? &input=`'.$file.'` &options=`w=800&h=0&q=80`]]" srcset="'.implode(',', $sizes).'">';
}
