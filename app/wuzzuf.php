<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use App\datasearch;
class wuzzuf 
{
    public function wuzzuf(String $search){

        $client = new Client(HttpClient::create(['timeout' =>60]));

        $crawler = $client->request('GET','https://wuzzuf.net/search/jobs?q='.$search);
                           $description = $crawler->filter('.right-side .result-wrp .job-details')->each(function ($node) {
                                return $node->text();
                            });
 
                            $company= $crawler->filter('.right-side .result-wrp .company-name')->each(function ($node) {
                                    return $node->text(); });
                           $location= $crawler->filter('.right-side .result-wrp .location')->each(function ($node) {
                                        return $node->text(); });
                         
                            $url=$crawler->filter('.right-side .result-wrp .job-title')->each(function ($node) {
                               return $node->text();
                            });
                            $image=$crawler->filter('.right-side .result-wrp .company-logo a img ')->each(function ($node) {
                                return $node->attr('src');
                            });
                           $date = $crawler->filter('.right-side .result-wrp .date-desktop')->each(function ($node) {
                                return $node->text();
                          });
                          
                          $more=$crawler->filter('.right-side .result-wrp .job-title a')->each(function ($node) {
                            $l =$node -> attr('href');
                             return $l;
                        });
                           
                     
             $i=0;
            while($i<5){
            $datasearch =datasearch::create([      
                        'url' =>$url[$i],
                        'image'=>$image[$i],
                        'location'=>$location[$i],
                        'desciption'=>$description[$i],
                        'date'=>$date[$i],
                        'company'=>$company[$i],
                        'more'=>$more[$i]

                    ]);  
                $i++;
                }
     
    }
}
