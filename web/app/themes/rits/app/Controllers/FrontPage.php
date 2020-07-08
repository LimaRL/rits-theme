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

        $field = get_field('info_block_7');
        $id = "";
        $categories = "";
        $services_list = "";
        $category_by_slug = "";

        $args = array(
            'numberposts' => -1,
            'post_type'   => 'post_type_services'
        );

        $services_list = get_posts( $args );

        $services = array_map(function ($post) {
            $categories = get_the_category($post->ID);
            $post_categories = "";
            $semi_coma = "";

            foreach($categories as $category){
                $post_categories .= $semi_coma.$category->slug;
                if($semi_coma === '') $semi_coma = ',';
            }

            $obj = (object) [
                "post_title" => $post->post_title,
                "post_content" => $post->post_content,
                "post_categories" => $post_categories,
            ];
            return $obj;
        }, $services_list);


        $category_by_slug = get_category_by_slug('services');

        if ( $category_by_slug ) {
            $id = $category_by_slug->term_id;
        }

        if($id) {
            $categories = get_categories( array(
                'parent' => '7',
                'orderby' => 'name',
                'order'   => 'ASC'
            ) );
        }

        $data = (object) [
            "categories"    =>  $categories,
            "services"      =>  $services,
            "text"          =>  $field,
        ];

        return $data;
    }
}
