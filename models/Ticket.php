<?php
    class Ticket extends conectar{

    public function inset_ticket($usu_id, $cat_id, $tick_titulo, $tick_descrip){
        $conectar = parent::conexion();
        parent::set_names();

        $sql="INSERT INTO ticket (tick_id, usu_id, cat_id, tick_titulo, tick_descrip, tick_estado, fech_crea, usu_asig, fech_asig, est) VALUES (NULL,?,?,?,?,'Abierto',now(),NULL,NULL,'1');";
        $sql=$conectar->prepare($sql);

        $sql->bindValue(1, $usu_id);
        $sql->bindValue(2, $cat_id);
        $sql->bindValue(3, $tick_titulo);
        $sql->bindValue(4, $tick_descrip);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function listar_ticket_x_usu($usu_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT 
            
            ticket.tick_id,
            ticket.usu_id,
            ticket.cat_id,
            ticket.tick_titulo,
            ticket.tick_descrip,
            ticket.tick_estado,
            ticket.fech_crea,
            ticket.usu_asig,
            ticket.fech_asig,
            usuario.usu_nom,
            usuario.usu_ape,
            categoria.cat_nom
            FROM 
            ticket
            INNER join categoria on ticket.cat_id = categoria.cat_id
            INNER join usuario on ticket.usu_id = usuario.usu_id
            WHERE
            ticket.est = 1
            AND usuario.usu_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $usu_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function listar_ticket(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT 
            
            ticket.tick_id,
            ticket.usu_id,
            ticket.cat_id,
            ticket.tick_titulo,
            ticket.tick_descrip,
            ticket.tick_estado,
            ticket.fech_crea,
            ticket.usu_asig,
            ticket.fech_asig,
            usuario.usu_nom,
            usuario.usu_ape,
            categoria.cat_nom
            FROM 
            ticket
            INNER join categoria on ticket.cat_id = categoria.cat_id
            INNER join usuario on ticket.usu_id = usuario.usu_id
            WHERE
            ticket.est = 1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function listar_ticketdetalle_x_ticket($tick_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT
        ticketdetalle.tickd_id,
        ticketdetalle.tickd_descrip,
        ticketdetalle.fech_crea,
        usuario.usu_nom,
        usuario.usu_ape,
        usuario.rol_id
        FROM 
        ticketdetalle
        INNER join usuario on ticketdetalle.usu_id = usuario.usu_id
        WHERE 
        tick_id =?
        ";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function listar_ticket_x_id($tick_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT 
            ticket.tick_id,
            ticket.usu_id,
            ticket.cat_id,
            ticket.tick_titulo,
            ticket.tick_descrip,
            ticket.tick_estado,
            ticket.fech_crea,
            usuario.usu_nom,
            usuario.usu_ape,
            categoria.cat_nom
            FROM 
            ticket
            INNER join categoria on ticket.cat_id = categoria.cat_id
            INNER join usuario on ticket.usu_id = usuario.usu_id
            WHERE
            ticket.est = 1
            AND ticket.tick_id = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function insert_ticketdetalle($tick_id, $usu_id, $tickd_descrip){ // inserta la informacion para el historial de conversacion del ticket
        $conectar = parent::conexion();
        parent::set_names();

        $sql="INSERT INTO ticketdetalle (tickd_id, tick_id, usu_id, tickd_descrip, fech_crea, est) VALUES (NULL, ?, ?, ?, now(), '1');";
        $sql=$conectar->prepare($sql);

        $sql->bindValue(1, $tick_id);
        $sql->bindValue(2, $usu_id);
        $sql->bindValue(3, $tickd_descrip);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_ticketcerrado($tick_id){ // cerrar ticket
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE ticket 
            SET
                tick_estado = 'Cerrado'
            WHERE
                tick_id = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_ticketcancelado($tick_id){ // cancelar ticket
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE ticket 
            SET
                tick_estado = 'Cancelado'
            WHERE
                tick_id = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_ticket_asignacion($tick_id,$usu_asig){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="update ticket 
            set	
                usu_asig = ?,
                fech_asig = now()
            where
                tick_id = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $usu_asig);
        $sql->bindValue(2, $tick_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_ticket_total(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT COUNT(*) as TOTAL FROM ticket";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_ticket_totalabierto(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT COUNT(*) as TOTAL FROM ticket where tick_estado='Abierto'";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_ticket_totalcerrado(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT COUNT(*) as TOTAL FROM ticket where tick_estado='Cerrado'";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_ticket_grafico(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT categoria.cat_nom as nom,COUNT(*) AS total
            FROM   ticket  JOIN  
                categoria ON ticket.cat_id = categoria.cat_id  
            WHERE    
            ticket.est = 1
            GROUP BY 
            categoria.cat_nom 
            ORDER BY total DESC";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

}
?>