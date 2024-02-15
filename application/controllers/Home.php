<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller { 

    public function index($page = null)
    {
        $data['title'] = 'Home';
        $data['content']    = $this->home->select(
                [
                    'product.id', 'product.title AS product_title', 'product.description', 'product.image', 'product.price', 'product.is_available',
                    'category.title AS category_title', 'category.slug AS category_slug'
                ]
            )
            ->join('category')                 
            ->where('product.is_available', 1)  
            ->get();
        $data['total_rows'] = $this->home->where('product.is_available', 1)->count();
        $data['page'] = 'pages/home/index';     // Mengarahkan halaman

        $this->view($data);
    }
}

/* End of file Home.php */
