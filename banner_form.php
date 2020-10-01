<?php 

$search= $_POST['search'];
if($search=='fruits' || $search =='fruit'){
	require('category_fruit.php');
}
elseif($search=='dairy' || $search =='dair')
{
	require('category_diary.php');
}
elseif($search=='cereal' || $search =='cerea')
{
	require('category_cereal.php');
}
elseif($search=='vegetable' || $search =='vegetables')
{
	require('category_vegetable.php');
}
elseif($search=='poultry' || $search =='poultr')
{
	require('category_poultry.php');
}
elseif($search=='spice' || $search =='spices')
{
	require('category_spices.php');
}

?>