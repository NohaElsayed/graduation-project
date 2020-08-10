<?php

namespace App;


use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use App\datasearch;

class batdot 
{
    public function wuzzuf(String $search){

        $client = new Client(HttpClient::create(['timeout' =>60]));

        $crawler = $client->request('GET','https://www.bayt.com/ar/egypt/jobs/'.$search.'-jobs/');
                            $description = $crawler->filter('#results_inner_card .has-pointer-d p')->each(function ($node) {
                                 return $node->text();
                             });
 
                             $company= $crawler->filter('#results_inner_card .has-pointer-d .p10r')->each(function ($node) {
                                     return $node->text(); });

                            $url= $crawler->filter('#results_inner_card .has-pointer-d .t-regular')->each(function ($node) {
                                         return $node->text(); });
                         
                              $more=$crawler->filter('#results_inner_card .has-pointer-d h2 a')->each(function ($node) {
                                $l ='https://www.bayt.com'.$node -> attr('href');
                                 return $l;
                            });
                               

                              $image=$crawler->filter('#results_inner_card .has-pointer-d .u-right')->each(function ($node) {
                                  return $node->attr('src');
                             });
                             $location=$crawler->filter('#results_inner_card .has-pointer-d li')->each(function ($node) {
                                return $node->text();
                           });
                             $date = $crawler->filter('#results_inner_card .has-pointer-d .t-small :not(p) :not(li)')->each(function ($node) {

                                return $node->text();
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
              //  $data['uri']=$url;
              //             $data['image']=$image;
              //             $data['location']= $location;
              //             $data['description']= $description;
              //             $data['date']= $date;
              //             $data['company']=$company;
              //          $data['more']=$more;
                     
              //    return $data;
               
                  }   
     }

