<?php
class mGoogleLogin extends CI_Model
{
    function Is_already_register($id)
    {
        $this->db->where('login_oauth_uid', $id);
        $query = $this->db->get('chat_user');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function Update_user_data($data, $id)
    {
        $this->db->where('login_oauth_uid', $id);
        $this->db->update('chat_user', $data);
    }

    function Insert_user_data($data)
    {
        $this->db->insert('chat_user', $data);
    }
}
