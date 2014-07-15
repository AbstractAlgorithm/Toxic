<?php

class IndexController extends Controller {

    public function run()
    {
        Model::Load('Post');

        // ----------------------------------------------------------------------
        // ----------------------------------------------------------------------
        // ----------------------------------------------------------------------

        // Post::Recent(5);

        // ----------------------------------------------------------------------
        // ----------------------------------------------------------------------
        // ----------------------------------------------------------------------


        Template::load('basic')
            ->title("Home")
            ->headerMenu
            ( 
                array   ( 
                            false,
                            false,
                            false,
                            false,
                        )
            )
            ->postPage(false)
            ->content
            (
                Template::load('home')
                    ->get()
            )
            ->footer('')
            ->render();
    }
}