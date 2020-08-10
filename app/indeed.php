<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use App\datasearch;
class indeed 
{
    public function wuzzuf(String $search){

        $client = new Client(HttpClient::create(['timeout' =>60]));

        $crawler = $client->request('GET','https://eg.indeed.com/jobs?q=web+developer&l=&ts=1594402175140&rq=1&rsIdx=1');
                           $description = $crawler->filter('body.janus table#resultsBody #pageContent #resultsCol .result table.jobCardShelfContainer+div.summary')->each(function ($node) {
                                return $node->text();
                            });
 
                            $company= $crawler->filter('body.janus #resultsBody #pageContent #resultsCol .result .sjcl .company')->each(function ($node) {
                                    return $node->text(); });
                           $location= $crawler->filter('body.janus #resultsBody #pageContent #resultsCol .result .sjcl .location')->each(function ($node) {
                                        return $node->text(); });
                         
                            $url=$crawler->filter(':root body.janus #resultsBody #pageContent #resultsCol .row .sjcl .ratingsDisplay .ratingNumber, :root body.janus #resultsBody #pageContent #resultsCol .row a.jobtitle ')->each(function ($node) {
                               return $node->text();
                            });
                             
                              $date = $crawler->filter('body.janus #resultsBody #pageContent #resultsCol .result .result-link-bar-container .result-link-bar .date ')->each(function ($node) {
                                   return $node->text();
                             });
                             $more=$crawler->filter(':root body.janus #resultsBody #pageContent #resultsCol .row .sjcl .ratingsDisplay .ratingNumber, :root body.janus #resultsBody #pageContent #resultsCol .row a.jobtitle ')->each(function ($node) {
                                $l ='https://eg.indeed.com'.$node -> attr('href');
                                 return $l;
                            });
                     
             $i=0;
            while($i<5){
            $datasearch =datasearch::create([      
                        'url' =>$url[$i],
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
