<?php
namespace App\Helpers;
use App\Tbl_color_theme;
use Auth;
use App\User;
class ColorThemeHelper
{
	public static function colors($id)
	{	
        
        if($id != ''){
            $color = Tbl_color_theme::where('user_id', $id)->first();
            $colors = [
                'main' => $color->main_color,
                'first' => $color->first_color,
                'second' => $color->second_color,
                'third' => $color->third_color, 
                'forth' => $color->forth_color,
                'fifth' => $color->fifth_color,
            ];
        }
        else {
            $colors = [
                'main' => '#2655c2',
                'first' => '#ffffff',
                'second' => '#2F89FC',
                'third' => '#181E1D',
                'forth' => '#2f3e46',
                'fifth' => '#dee2e2',
            ];
        }

		return $colors;	 
	}	
}