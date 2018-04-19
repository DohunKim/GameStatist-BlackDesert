<?php
class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        $this->load->library('encrypt');
    }

    public function getNickname($idx)
    {
        $query = $this->db->get_where('Members', array('idMember' => $idx));
        $row = $query->first_row();
        if(isset($row->name)) return $row->name;
        return "-";
    }

    public function isDuplicated($email){
        //$query = $this->db->get_where('Members', array('email' => crypt($email,'$1$j2oTGrRz$ILJSV65YBkBC/dEiZ7l4Z/')));
        $this->db->where('email', crypt($email,'$1$j2oTGrRz$ILJSV65YBkBC/dEiZ7l4Z/'));
        $this->db->from('Members');
        //echo $this->db->count_all_results();
        if ($this->db->count_all_results() > 0) return true;
        return false;
    }

    /**
     * * 가입하기
     */
    public function register($nickname, $email, $password)
    {
        if ($this->isDuplicated($email)) {
            return false;
        }
        $data = array(
            'name' => $nickname,
            'email' => crypt($email,'$1$j2oTGrRz$ILJSV65YBkBC/dEiZ7l4Z/'),
            'password' => $this->encrypt->encode($password),
            'regDate' => date('Y-m-d H:i:s')
        );
    
        $this->db->insert('Members', $data);

        return true;
    }

    /**
     * * 로그인. 성공 시 사용자 데이터 전체를 반환. 없으면 null 반환
     */
    public function login($email, $password)
    {
        $query = $this->db->get_where('Members', array('email' => crypt($email,'$1$j2oTGrRz$ILJSV65YBkBC/dEiZ7l4Z/')));
        $row = $query->first_row();

        if (isset($row)) {
            if(strcmp($this->encrypt->decode($row->password), $password) == 0)
            {
                // TODO: make session data. uidx, nickname.
                return $row;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
}

?>