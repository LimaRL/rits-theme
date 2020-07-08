<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function info_block_1()
    {
        return get_field('info_block_1');
    }

    public function info_block_2()
    {
        return get_field('info_block_2');
    }

    public function info_block_3()
    {
        return get_field('info_block_3');
    }

    public function info_block_4()
    {
        return get_field('info_block_4');
    }

    public function info_block_5()
    {
        return get_field('info_block_5');
    }

    public function info_block_6()
    {
        $field = get_field('info_block_6');

        $partners = array_map(function ($post) {
            $color = get_field('color', $post->ID);
            $image_url = get_the_post_thumbnail_url($post);
            $obj = (object) [
                "image_url" => $image_url,
                "post_title" => $post->post_title,
                "post_content" => $post->post_content,
                "color" => $color,
            ];
            return $obj;
        }, $field['partners']);

        $data = (object) [
            "partners" => $partners,
            "image" => $field['image'],
            "text" => $field['text'],
        ];

        return $data;
    }

    public function info_block_7()
    {
        return get_field('info_block_7');
    }
}
