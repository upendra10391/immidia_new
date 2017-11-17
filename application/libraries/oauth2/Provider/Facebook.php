<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Facebook OAuth2 Provider
 *
 * @package    CodeIgniter/OAuth2
 * @category   Provider
 * @author     Phil Sturgeon
 * @copyright  (c) 2012 HappyNinjas Ltd
 * @license    http://philsturgeon.co.uk/code/dbad-license
 */

class OAuth2_Provider_Facebook extends OAuth2_Provider
{
	protected $scope = array("public_profile"," email",);

	public function url_authorize()
	{
		return 'https://www.facebook.com/v2.8/dialog/oauth';
	}

	public function url_access_token()
	{
		return 'https://graph.facebook.com/oauth/access_token';
	}

	public function get_user_info(OAuth2_Token_Access $token)
	{
		/*$url = 'https://graph.facebook.com/me?'.http_build_query(array(
			'access_token' => $token->access_token
			
		));*/
		/**/$url = 'https://graph.facebook.com/me?'.http_build_query(array(
			'access_token' => $token->access_token,
			'fields'=>'id,first_name,last_name,email,gender,picture,location,link,about'
		));
		//$data=file_get_contents($url);
		$user = json_decode(file_get_contents($url));
			// print_r('kjshafk kjsadhfkjahdskdfj'.$data);
			//var_dump($http_response_header, $user);
			// Create a response from the request
			//echo "string===========".$user->about;
		return array(
			'uid' => $user->id,
			'nickname' => isset($user->username) ? $user->username : null,
			
			'first_name' => $user->first_name,
			'last_name' => $user->last_name,
			'email' => isset($user->email) ? $user->email : null,
			'location' => isset($user->location->name) ? $user->location->name : null,
			'description' => isset($user->bio) ? $user->bio : null,
			'image' => 'https://graph.facebook.com/me/picture?type=normal&access_token='.$token->access_token,
			'urls' => array(
			  'Facebook' => $user->link,
			),
		);
	}
}
