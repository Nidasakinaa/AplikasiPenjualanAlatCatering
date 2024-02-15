<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends MY_Model
{
    protected $table = 'user';  // Tabel ditentukan manual karena nama class model bukan nama tabel

    public function getDefaultValues()
    { // nama field table user yang di gunakan untuk masuk
        return [
            'email'     => '',
            'password'  => ''
        ];
    }

    public function getValidationRules()  //validasi data email dan password apakah sudah sesuai?
    {
        $validationRules = [
            [
                'field' => 'email',
                'label' => 'E-Mail',
                'rules' => 'trim|required|valid_email'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ]
        ];

        return $validationRules;
    }

    public function run($input)
    {
        $query = $this->where('email', strtolower($input->email))// lowercase pada inputan email
            ->where('is_active', 1)
            ->first();
        
        if (!empty($query) && hashEncryptVerify($input->password, $query->password)) { //eksekusi jika password sudah terverifikasi ada dan terenkripsi
            // Jika user ada & password sama, maka buat session
            $sess_data = [ //data yg tdpt pd table disimpan di cache(memori sementara)
                'id'        => $query->id,
                'name'      => $query->name,
                'email'     => $query->email,
                'role'      => $query->role,
                'is_login'  => true
            ];
            
            $this->session->set_userdata($sess_data);
            return true;
        }

        return false;
    }
}

/* End of file Login_model.php */
