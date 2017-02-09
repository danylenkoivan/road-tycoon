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

	39 - grass with land in the top and the right corner
	310 - grass with land in the right and the bottom corner
	311 - grass with land in the bottom and the left corner
	312 - grass with land in the left and the top corner
	****************************************************
	ROADS
	1 - horizontal
	2 - vertical
	3 - bottom to right
	4 - left to bottom
	5 - left to top
	6 - top to right
	7 - horizontal with exit to top
	8 - horizontal with exit to bottom
	9 - vertical with exit to right
	10 - vertical with exit to left
	11 - crossroad
*/
echo json_encode(array(
	array(
		array('terrain' => 13 ),
		array('terrain' => 111 ),
		array('terrain' => 110 ),
		array('terrain' => 16 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3)
	),
	array(
		array('terrain' => 3 ),
		array('terrain' => 14 ),
		array('terrain' => 12 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 3)
	),
	array(
		array('terrain' => 25 ),
		array('terrain' => 17 ),
		array('terrain' => 16 ),
		array('terrain' => 3 ),
		array('terrain' => 28 ),
		array('terrain' => 21 ),
		array('terrain' => 25 ),
		array('terrain' => 3 ),
		array('terrain' => 3 ),
		array('terrain' => 18 ),
		array('terrain' => 11)
	),
	array(
		array('terrain' => 26),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3, 'city' => 'city'),
		array('terrain' => 27),
		array('terrain' => 23),
		array('terrain' => 26),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 14),
		array('terrain' => 1)
	),
	array(
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 18),
		array('terrain' => 11),
		array('terrain' => 15),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 14),
		array('terrain' => 1)
	),
	array(
		array('terrain' => 3),
		array('terrain' => 18),
		array('terrain' => 112),
		array('terrain' => 1),
		array('terrain' => 19),
		array('terrain' => 15),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 14),
		array('terrain' => 1)
	),
	array(
		array('terrain' => 3),
		array('terrain' => 17),
		array('terrain' => 111),
		array('terrain' => 1),
		array('terrain' => 1),
		array('terrain' => 12),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 18),
		array('terrain' => 112),
		array('terrain' => 1)
	),
	array(
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 14),
		array('terrain' => 1),
		array('terrain' => 110),
		array('terrain' => 16),
		array('terrain' => 3),
		array('terrain' => 18),
		array('terrain' => 112),
		array('terrain' => 1),
		array('terrain' => 1)
	),
	array(
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 17),
		array('terrain' => 13),
		array('terrain' => 16),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 14),
		array('terrain' => 1),
		array('terrain' => 1),
		array('terrain' => 1)
	),
	array(
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 17),
		array('terrain' => 13),
		array('terrain' => 13),
		array('terrain' => 111)
	),
	array(
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3),
		array('terrain' => 3, 'city' => 'capital'),
		array('terrain' => 14)
	),
));