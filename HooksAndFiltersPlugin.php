<?php

class HooksAndFiltersPlugin extends Omeka_Plugin_AbstractPlugin
{
    public $_hooks = array('public_items_show');
    
    public $_filters = array('public_navigation_main');
    
    public function hookPublicItemsShow($args)
    {
        echo "<p>LOOK! I'VE ADDED CONTENT!!!!</p>";
        
        //we'll use this after we've looked at the Models example plugin
        /*
          $tweet1 = get_db()->getTable('Tweet')->find(1);
          echo "<p>" . metadata($tweet1, 'text') . "</p>";
          
          $tweetId13 = get_db()->getTable('Tweet')->findTweetId(13);
          echo "<p>" . metadata($tweetId13, 'text') . "</p>";          
          
        */
    }
    
    public function filterPublicNavigationMain($navArray)
    {
        $navArray['Example'] = array('label' => 'Example', 'uri'=>'http://example.com');
        return $navArray;
    }
}