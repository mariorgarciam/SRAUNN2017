 <?php  if ( ! defined('BASEPATH')) exit('No está permitido el acceso directo a los scripts');
    class M_usuarios extends CI_Model {        
        function __construct() {
            parent::__construct();
        }

        function Validar_Usuario($Usuario, $Clave) {            
            $Consulta = "SELECT * FROM usuarios WHERE usuario = ? AND clave = ? LIMIT 1"; 
            $Registro = $this->db->query($Consulta, array($Usuario, $Clave));
            
            if($Registro->num_rows()== 1) {
                return $Registro->result();
            }
            else {
                return false;
            }
        }
    }

