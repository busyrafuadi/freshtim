<?php 
class Cms5e284a702b69e439068448_789175a65576fe94c3f003a1027f10c2Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
    $this->page->title = $this->post->title;
    $this->page->description = str_limit($this->post->summary, 60, "...");
}
}
