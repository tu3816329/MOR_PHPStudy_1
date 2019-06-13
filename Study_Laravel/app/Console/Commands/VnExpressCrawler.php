<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\NewsCategory as NewsCategory;
use App\News as News;
class VnExpressCrawler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:vnexpress';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crawl data from page vnexpress';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = "https://vnexpress.net";
        $html= file_get_html($url);
        $rs = $html->find('nav[id=main_menu].p_menu',0);
        $menu=[];
        // echo $rs->plaintext;
        foreach ($rs->find('a[href]') as $key => $value) {
          $pattern2='/^\/\S*[\-\S*]+/';
          $pattern1='/^\/\/\S*[\.\S*]+/';
          $href="";
          if (preg_match($pattern1,$value->href)){
            $href="https:".''.$value->href;
          }elseif(preg_match($pattern2,$value->href)){
            $href=$url.''.$value->href;
          }else{
              $href=$value->href;
          }
          array_push($menu,["name"=>$value->plaintext,"href"=>$href]);
        }

        foreach ($menu as $page) {
          if (!empty($page['name'])){
            NewsCategory::updateOrCreate(["name"=>$page['name']],$page);
            if ($page['href']!=="https://video.vnexpress.net"){
            $subHtml=file_get_html($page['href']);
            $subMenu = $subHtml->find('nav[id=sub_menu].clearfix',0);
            $news = $subHtml->find('section.sidebar_1 article.list_news');
            foreach ($news as $item){
              $title = $item->find('h4.title_news',0)->plaintext;
              $title=str_replace('&nbsp;','',$title);
              $title=trim(preg_replace('/[\t\n\r\s]+/', ' ', $title));
              $img = $item->find('div.thumb_art a img',0);
              // var_dump($img->attr);
              $img=$img->attr['data-original'];
              $description= $item->find('p.description',0)->plaintext;
              $n=['title'=>$title,'image'=>$img,'description'=>$description];
              echo "$page[name]";
              // var_dump($n);
              News::updateOrCreate(["title"=>$title],['title'=>$title,'image'=>$img,'description'=>$description]);
            }
          }
        }
      }
    }
  }
