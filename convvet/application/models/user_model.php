<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_user($data) {
        // Senha armazenada sem hash (em texto simples)
        if (isset($data['password']) && !empty($data['password'])) {
            // Não aplica hash, apenas armazena o valor fornecido
            $data['password'] = $data['password'];
        }

        return $this->db->insert('users', $data);
    }

    // Método de autenticação (verifica a senha e o role)
    public function authenticate($email, $password, $role) {
        // Verificar se o email e o role estão corretos
        $this->db->where('email', $email);
        $this->db->where('role', $role);  // Verifica também o papel
        $query = $this->db->get('users');

        if ($query->num_rows() > 0) {
            $user = $query->row();

            // Comparação de senha sem hash
            if ($user->password == $password) {
                return $user;
            }
        }

        return false;
    }

    // Obter o usuário pelo email
    public function get_user_by_email($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->row_array();  // Retorna o usuário como um array
    }

    // Verifica o papel do usuário (admin, client, clinic)
    public function check_role($user_id) {
        $this->db->select('role');
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        
        if ($query->num_rows() > 0) {
            return $query->row()->role;
        }
        return false;
    }
    public function get_user($user_id) {
        $query = $this->db->get_where('users', array('id' => $user_id));
        return $query->row_array(); // Retorna o usuário como um array
    }
    

    // Método para obter informações de um usuário com base no seu ID
    public function get_user_by_id($user_id) {
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        
        if ($query->num_rows() > 0) {
            return $query->row();  // Retorna o usuário encontrado
        }
        return null;  // Caso não encontre
    }

    public function update_user($user_id, $data) {
        // Verificar se os campos necessários estão preenchidos
        if (empty($data['name']) || empty($data['email'])) {
            return false; // Retorna false caso algum campo obrigatório esteja vazio
        }
    
        // Realizar o update no banco de dados
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }
    


    public function get_users_by_role($role) {
        $this->db->select('*');
        $this->db->from('users'); // Supondo que sua tabela de usuários se chama 'users'
        $this->db->where('role', $role); // Filtra pelos usuários com a role especificada
        $query = $this->db->get();
        return $query->result(); // Retorna todos os usuários com a role
    }
    public function get_clinics() {
        // Consulta para buscar usuários com o papel de 'clinic'
        $this->db->select('*');
        $this->db->from('users');  // Supondo que você tenha uma tabela 'users'
        $this->db->where('role', 'clinic');  // Filtra os usuários com o papel 'clinic'
        $query = $this->db->get();
        return $query->result();  // Retorna os resultados como um array de objetos
    }


}
?>