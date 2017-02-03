<?php
/*
	1 - water
	11 - water with land on the top
	12 - water with land on the right
	13 - water with land on the bottom
	14 - water with land on the left
	15 - water with land on the top and on the right
	16 - water with land on the right and on the bottom
	17 - water with land on the bottom and on the left
	18 - water with land on the left and on the top

	19 - water with land in the top and the right corner
	110 - water with land in the right and the bottom corner
	111 - water with land in the bottom and the left corner
	112 - water with land in the left and the top corner
	****************************************************
	2 - land
	21 - land with grass on the top
	22 - land with grass on the right
	23 - land with grass on the bottom
	24 - land with grass on the left
	25 - land with grass on the top and on the right
	26 - land with grass on the right and on the bottom
	27 - land with grass on the bottom and on the left
	28 - land with grass on the left and on the top

	29 - land with grass in the top and the right corner
	210 - land with grass in the right and the bottom corner
	211 - land with grass in the bottom and the left corner
	212 - land with grass in the left and the top corner
	****************************************************
	3 - grass
	31 - grass with land on the top
	32 - grass with land on the right
	33 - grass with land on the bottom
	34 - grass with land on the left
	35 - grass with land on the top and on the right
	36 - grass with land on the right and on the bottom
	37 - grass with land on the bottom and on the left
	38 - grass with land on the left and on the top
*/
echo json_encode(array(
	array(13, 111 , 110 , 16, 3 , 3 , 3 , 3 , 3 , 3 , 3 ),
	array(3 , 14, 12, 3 , 3 , 3 , 3 , 3 , 3 , 3 , 3 ),
	array(25 , 17, 16, 3 , 28 , 21 , 25 , 3 , 3 , 18 , 11),
	array(26 , 3 , 3 , 3 , 27 , 23 , 26 , 3 , 3 , 14, 1),
	array(3 , 3 , 18, 11, 15, 3 , 3 , 3 , 3 , 14, 1),
	array(3 , 18, 112 , 1 , 19 , 15 , 3 , 3 , 3 , 14, 1),
	array(3, 17, 111, 1, 1, 12, 3, 3, 18, 112, 1),
	array(3, 3, 14, 1, 110, 16, 3, 18, 112, 1, 1),
	array(3, 3, 17, 13, 16, 3, 3, 14, 1, 1, 1),
	array(3 , 3 , 3 , 3 , 3, 3, 3, 17, 13, 13, 111),
	array(3 , 3 , 3 , 3, 3, 3, 3, 3, 3, 3, 14),
));