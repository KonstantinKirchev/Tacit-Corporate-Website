<?php

$style = "";
$style_hover = "";
$html = "";

$headings_array = array('h1','h2', 'h3', 'h4', 'h5', 'h6', 'p');

//get correct heading value. If provided heading isn't valid get the default one
$title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

if($icon_color != "" || $icon_background_color != "" || $border_color != "" || $size != ""){
    $style = ' style="';
    if($icon_color != "") {
        $style .='color:'.$icon_color.';';
    }
    if($icon_background_color != "") {
        $style .= "background-color: {$icon_background_color};";
    }
    if($border_color != "") {
        $style .='border-color:'.$border_color.';';
    }
    if($size != ""){
        $style .= 'font-size:'.$size.'px;';
    }
    $style .= '";';
}

if($icon_color_hover != "" || $icon_background_color_hover != "" || $border_color_hover != "" || $size != ""){

    $style_hover .= ' style="';
    if($icon_color_hover != "") {
        $style_hover .='color:'.$icon_color_hover.';';
    }
    if($icon_background_color_hover != "") {
        $style_hover .= "background-color: {$icon_background_color_hover};";
    }
    if($border_color_hover != "") {
        $style_hover .='border-color:'.$border_color_hover.';';
    }
    if($size != ""){
        $style_hover .= 'font-size:'.$size.'px;';
    }
    $style_hover .= '";';
}

$html .= '<div class="animated_icon_with_text_holder">';
if($enable_link == 'yes'){
    $html .= '<a href="'.$link.'" target="'.$target.'">';
}
$html .= '<div class="animated_icon_with_text_inner">';
$html .= '<div class="animated_icon_holder">';
$html .= '<div class="animated_icon">';
$html .= '<div class="animated_icon_inner">';
$html .= '<span class="animated_icon_front">';
$html .= "<i class='fa ".$icon."'" . $style . "></i>";
$html .= '</span>';
$html .= '<span class="animated_icon_back">';
$html .= "<i class='fa " . $icon."'" . $style_hover ."></i>";
$html .= '</span>';

$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
$html .= '<div class="animated_text_holder">';
$html .= '<div class="animated_text_holder_wrap">';
$html .= '<div class="animated_text_holder_wrap_inner">';
$html .= '<div class="animated_text_holder_inner">';

$html .= '<div class="animated_title">';
$html .= '<div class="animated_title_inner">';
$html .= '<'.$title_tag.'>';
$html .= $title;
$html .= '</'.$title_tag.'>';
$html .= '</div>';
$html .= '</div>';
$html .= '<div class="animated_text">';
$html .= '<p><span>';
$html .= $text;
$html .= '</span></p>';
$html .= '</div>';

$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
if($enable_link == 'yes'){
    $html .= '</a>';
}
$html .= '</div>';

echo bridge_qode_get_module_part( $html );