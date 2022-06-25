<?php
/**
 * Neo Billing -  Accounting,  Invoicing  and CRM Software
 * Copyright (c) Rajesh Dukiya. All Rights Reserved
 * ***********************************************************************
 *
 *  Email: support@ultimatekode.com
 *  Website: https://www.ultimatekode.com
 *
 *  ************************************************************************
 *  * This software is furnished under a license and may be used and copied
 *  * only  in  accordance  with  the  terms  of such  license and with the
 *  * inclusion of the above copyright notice.
 *  * If you Purchased from Codecanyon, Please read the full License from
 *  * here- http://codecanyon.net/licenses/standard/
 * ***********************************************************************
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/// tabla para cargar la vista **********

class Clientgroup_model extends CI_Model
{
    var $table = 'edificios_tb';
    var $column_order = array(null,'id','nombre_edificio');
    var $column_search = array('nombre_edificio');
    var $order = array('id' => 'desc');

/// TABLA APARTAMENTO
    var $table1 = 'apartamento';
    var $column_order1 = array(null,'idApartamento','Apartamentos');
    var $column_search1 = array('Apartamentos');
    var $order1 = array('idApartamento' => 'desc');
///

    public function details($id)
    {

        $this->db->select('*');
        $this->db->from('customers_group');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    ////// PARA VER LOS DATOS DE PERFIL DE APARTAMENTO ***********/*******

   public function details1($custid)
    {
      
        $this->db->select('*');
        $this->db->from($this->table1);
        $this->db->join('customers', 'apartamento.idApartamento = customers.referencia', 'left');
        $this->db->where('idApartamento', $custid);
        $query = $this->db->get();
        return $query->row_array();

    } 

////////////***************

    public function get_numero_seleccionados($id_sede){
        $data =$this->db->query("select count(checked_seleccionado) as cuenta from customers where gid=".$id_sede." and checked_seleccionado=1")->result();
        return $data[0]->cuenta;
    }

    public function recipients($id)
    {

        $this->db->select('name,email');
        $this->db->from('customers');
        $this->db->where('gid', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
	public function group_info($id)
    {
		$this->db->select('*');
        $this->db->from('ciudad');
        $this->db->where('ciudad', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function add($group_name, $group_desc)
    {
        $data = array(
            'title' => $group_name,
            'summary' => $group_desc
        );

        if ($this->db->insert('customers_group', $data)) {
            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('ADDED')));
        } else {
            echo json_encode(array('status' => 'Error', 'message' =>
                $this->lang->line('ERROR')));
        }

    }
    /// para el cargue del edificio en la tabla ************

     private function _get_datatables_query($opt = '')
    {

         $this->db->from($this->table);
        

        $i = 0;

        foreach ($this->column_search as $item) // loop column
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables($opt = '')
    {
        $this->_get_datatables_query($opt);
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);

        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered($opt = '')
    {
        $this->_get_datatables_query($opt);
        if ($opt) {
            $this->db->where('eid', $opt);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($opt = '')
    {
        $this->db->from($this->table);
        if ($opt) {
            $this->db->where('eid', $opt);
        }
        return $this->db->count_all_results();
    }


 /// para el cargue LOS APARTAMENTOS en la tabla ************

     private function _get_datatables_query1($opt = '')
    {

         $this->db->from($this->table1);
        

        $i = 0;

        foreach ($this->column_search1 as $item) // loop column
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search1) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order1[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order1)) {
            $order = $this->order1;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables1($opt = '')
    {
        $this->_get_datatables_query1($opt);
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);

        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered1($opt = '')
    {
        $this->_get_datatables_query1($opt);
        if ($opt) {
            $this->db->where('eid', $opt);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all1($opt = '')
    {
        $this->db->from($this->table1);
        if ($opt) {
            $this->db->where('eid', $opt);
        }
        return $this->db->count_all_results();
    }


//**************************




    public function editgroupupdate($gid, $group_name, $group_desc)
    {
        $data = array(
            'title' => $group_name,
            'summary' => $group_desc
        );


        $this->db->set($data);
        $this->db->where('id', $gid);

        if ($this->db->update('customers_group')) {
            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('UPDATED')));
        } else {
            echo json_encode(array('status' => 'Error', 'message' =>
                $this->lang->line('ERROR')));
        }

    }
}