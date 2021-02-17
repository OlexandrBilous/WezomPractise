<?php

namespace App\Widgets;

use App\Http\Models\Category;
use App\Widgets\Contract\ContractWidget;
use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget implements ContractWidget
{
/**
* The configuration array.
*
* @var array
*/

/**
* Treat this method as a controller action.
* Return view() or other content to display.
*/
public function execute()
{
$data = Category::all();
return view('Widgets::categories', [
'data' => $data
]);
}
}
