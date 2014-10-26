<?php
class SchRecipe extends SchCreativeWork{
	protected $cookTime	=	'Duration';
	protected $cookingMethod	=	'Text';
	protected $ingredients	=	'Text';
	protected $nutrition	=	'NutritionInformation';
	protected $prepTime	=	'Duration';
	protected $recipeCategory	=	'Text';
	protected $recipeCuisine	=	'Text';
	protected $recipeInstructions	=	'Text';
	protected $recipeYield	=	'Text';
	protected $totalTime	=	'Duration';
	function __construct(){$this->namespace = "Recipe";}
}