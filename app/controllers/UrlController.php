<?php

class UrlController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| URL Controller for URL Shortner
	|--------------------------------------------------------------------------
	*/

	public function createShortUrl()
	{
		$url = Input::get('url');
		
		/*To check URL exists in database*/
		
		$url_exists = Url::where('long', '=', $url);
		
		if($url_exists->count() == 1)
		{
			$short = $url_exists->first()->short; 
		}
		else
		{
			/*To generate short URL*/
			
			$insert_long_url_id = DB::table('url')->insertGetId(array('long'=>$url));
						
			if($insert_long_url_id)
			{
				$short = base_convert($insert_long_url_id, 10, 36);
				
				Url::where('id', '=', $insert_long_url_id)->update(array('short' => $short));
			}
			else
			{
				return "false";
			}
			
		}
		
		if($short)
		{
			return $short;
		}
		else
		{
			return "false";
		}
	}
	
	public function getUrl($code)
	{
		/*Check database and redirects to long URL*/
		
		$short = Url::where('short', '=', $code);
		if($short->count() == 1)
		{
			return Redirect::to($short->first()->long); 
		}
		else
		{
			return Redirect::to('/');
		}
	}
	
}

?>
