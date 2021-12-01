<?php

namespace Watson\Domain;

class Rss
{
    /**
     * Link title.
     *
     * @var string
     */
    private $title;

    /**
     * Link url.
     *
     * @var string
     */
    private $url;

    /**
     * Link desc.
     *
     * @var string
     */
    private $desc;


    public function setTitle($title) {
        $this->title = $title;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setDesc($desc) {
        $this->desc = $desc;
    }
}