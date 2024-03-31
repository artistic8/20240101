<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 6, 10, 11',
		'inter(fav 5, fav 6)' => '1, 7, 9',
		'inter(fav 5, fav 10)' => '1, 8, 9',
		'inter(fav 5, fav 11)' => '7, 8',
		'inter(fav 6, fav 10)' => '1, 9',
		'inter(fav 6, fav 11)' => '7',
		'inter(fav 10, fav 11)' => '4, 8, 11',
		'union' => '1, 4, 7, 8, 9, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 5, 6, 7',
		'inter(fav 2, fav 5)' => '5',
		'inter(fav 2, fav 6)' => '2, 5, 6, 8',
		'inter(fav 2, fav 7)' => '2, 7',
		'inter(fav 5, fav 6)' => '5',
		'inter(fav 6, fav 7)' => '2',
		'union' => '2, 5, 6, 7, 8',
		'win' => '2, 5, 6, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3, 8, 10',
		'inter(fav 1, fav 3)' => '1, 8',
		'inter(fav 1, fav 8)' => '1, 2, 8, 10, 11',
		'inter(fav 3, fav 8)' => '1, 3, 8, 12',
		'union' => '1, 2, 3, 8, 10, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 4, 11, 12',
		'inter(fav 1, fav 4)' => '3, 11',
		'inter(fav 1, fav 11)' => '6, 11',
		'inter(fav 1, fav 12)' => '3',
		'inter(fav 4, fav 11)' => '11',
		'inter(fav 4, fav 12)' => '3',
		'union' => '3, 6, 11',
		'win' => '1, 4, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 4, 5, 10',
		'inter(fav 1, fav 4)' => '1, 3, 4, 7',
		'inter(fav 1, fav 5)' => '1, 3, 12',
		'inter(fav 1, fav 10)' => '4',
		'inter(fav 4, fav 5)' => '1, 3',
		'inter(fav 4, fav 10)' => '2, 4',
		'union' => '1, 2, 3, 4, 7, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 5, 7, 8',
		'inter(fav 3, fav 5)' => '11',
		'inter(fav 3, fav 7)' => '1, 3, 5, 9, 11',
		'inter(fav 3, fav 8)' => '3',
		'inter(fav 5, fav 7)' => '6, 11',
		'inter(fav 7, fav 8)' => '3',
		'union' => '1, 3, 5, 6, 9, 11',
		'win' => '3, 5, 7, 8',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 4, 6, 10',
		'inter(fav 2, fav 4)' => '3, 4, 5, 7',
		'inter(fav 2, fav 6)' => '6',
		'inter(fav 2, fav 10)' => '3',
		'inter(fav 4, fav 6)' => '10',
		'inter(fav 4, fav 10)' => '3, 8, 10',
		'inter(fav 6, fav 10)' => '10',
		'union' => '3, 4, 5, 6, 7, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 6, 7, 8',
		'inter(fav 5, fav 6)' => '4, 11',
		'inter(fav 5, fav 7)' => '3, 4, 5',
		'inter(fav 5, fav 8)' => '3, 8',
		'inter(fav 6, fav 7)' => '4',
		'inter(fav 6, fav 8)' => '12',
		'inter(fav 7, fav 8)' => '1, 3',
		'union' => '1, 3, 4, 5, 8, 11, 12',
		'win' => '5, 6, 7, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 5, 11, 12',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'inter(fav 5, fav 11)' => '12',
		'inter(fav 5, fav 12)' => '5, 12',
		'inter(fav 11, fav 12)' => '12',
		'union' => '3, 5, 8, 11, 12',
		'win' => '3, 5, 11, 12',
	],
];
