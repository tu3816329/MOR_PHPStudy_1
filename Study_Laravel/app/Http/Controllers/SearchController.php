<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function __invoke()
    {
        $search=request()->input('txtUSearch');
        $id = request()->input('videoId');
        $key = "AIzaSyCwGye7bxxa20lels7oDusAduihMgNNC98";

        // var_dump(request()->input());
        if (isset($id)) {
            $url = "https://www.googleapis.com/youtube/v3/videos";
            $params=['query'=>['part'=>'player,statistics,snippet','id'=>$id,'key'=>$key]];
            $client = new Client();
            $res=$client->request('GET', $url, $params);
            return $res->getBody()->getContents();
        } elseif (isset($search)) {
            $url = "https://www.googleapis.com/youtube/v3/search";
            $client = new Client();
            $params=['query'=>['part'=>'snippet','type'=>'video','maxResults'=>'20','q'=>$search,'key'=>$key]];
            $res=$client->request('GET', $url, $params);
            // return json_encode($res->getBody()->getContents());
            return $res->getBody()->getContents();
            // $json = file_get_contents(base_path('storage/app/test.json'));
        // return $json;
        }
        // return json_encode($json,true);
    }
}
