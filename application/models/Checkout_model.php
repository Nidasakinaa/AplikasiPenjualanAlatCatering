<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends MY_Model 
{
    public $table = 'orders';   // Ini akan diubah2 di controller Checkout

    public function getDefaultValues()
    {
        return [
            'name'      => '',
            'address'   => '',
            'phone'     => '',
            'status'    => '',
            'dt_start'  => '',
            'dt_end'    => '',
            'dt_interval' => ''
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'name',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'address',
                'label' => 'Alamat',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'phone',
                'label' => 'Telepon',
                'rules' => 'trim|required|max_length[15]'
            ],
            [
                'field' => 'dt_start',
                'label' => 'Tanggal Awal',
                'rules' => 'trim|required|max_length[15]'
            ],
            [
                'field' => 'dt_end',
                'label' => 'Tanggal Akhir',
                'rules' => 'trim|required|max_length[15]'
            ],
            [
                'field' => 'dt_interval',
                'label' => 'Hari',
                'rules' => 'trim|required|max_length[15]'
            ]

        ];

        return $validationRules;
    }
}

/* End of file Checkout_model.php */
