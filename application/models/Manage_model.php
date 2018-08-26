<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Manage_model extends CI_Model {
		function get($table) {
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_spec($table, $choice) {
			$this->db->select($choice);
			$this->db->from($table);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_where($table, $cond) {
			$this->db->where($cond);
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_where_check($table, $column1, $cond1, $column2, $cond2) {
			$this->db->where($column1, $cond1);
			$this->db->where_in($column2, $cond2);
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_limit($table, $limit) {
			$this->db->limit($limit);
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_ordered($table, $order_by, $order_type) {
			$this->db->order_by($order_by, $order_type);
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_join($table1, $table2, $cond, $join_type) {
			$this->db->from($table1);
			$this->db->join($table2, $cond, $join_type);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_spec_where($table, $cond, $choice) {
			$this->db->select($choice);
			$this->db->from($table);
			$this->db->where($cond);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_spec_join($table1, $table2, $cond, $join_type, $choice) {
			$this->db->select($choice);
			$this->db->from($table1);
			$this->db->join($table2, $cond, $join_type);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_spec_muljoin($main_table, $join_array, $choice) {
			$this->db->select($choice);
			$this->db->from($main_table);
			for ($i = 0; $i < count($join_array); $i++) {
				$this->db->join($join_array[$i]['table'], $join_array[$i]['cond'], $join_array[$i]['type']);
			}
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_spec_where_join($table1, $table2, $cond1, $cond2, $join_type, $choice) {
			$this->db->select($choice);
			$this->db->from($table1);
			$this->db->join($table2, $cond2, $join_type);
			$this->db->where($cond1);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_spec_where_muljoin($main_table, $join_array, $cond, $choice) {
			$this->db->select($choice);
			$this->db->from($main_table);
			for ($i = 0; $i < count($join_array); $i++) {
				$this->db->join($join_array[$i]['table'], $join_array[$i]['cond'], $join_array[$i]['type']);
			}
			$this->db->where($cond);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_spec_where_muljoin_ordered($main_table, $join_array, $cond, $choice, $order_by, $order_type) {
			$this->db->select($choice);
			$this->db->from($main_table);
			for ($i = 0; $i < count($join_array); $i++) {
				$this->db->join($join_array[$i]['table'], $join_array[$i]['cond'], $join_array[$i]['type']);
			}
			$this->db->where($cond);
			$this->db->order_by($order_by, $order_type);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_spec_wherein_muljoin($main_table, $join_array, $cond_array, $choice) {
			$this->db->select($choice);
			$this->db->from($main_table);
			for ($i = 0; $i < count($join_array); $i++) {
				$this->db->join($join_array[$i]['table'], $join_array[$i]['cond'], $join_array[$i]['type']);
			}
			for ($i = 0; $i < count($cond_array); $i++) {
				$this->db->where_in($cond_array[$i]['column'], $join_array[$i]['cond']);
			}
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_join_ordered($table1, $table2, $cond, $join_type, $order_by, $order_type) {
			$this->db->from($table1);
			$this->db->join($table2, $cond, $join_type);
			$this->db->order_by($order_by, $order_type);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_spec_join_ordered($table1, $table2, $cond, $join_type, $order_by, $order_type, $choice) {
			$this->db->select($choice);
			$this->db->from($table1);
			$this->db->join($table2, $cond, $join_type);
			$this->db->order_by($order_by, $order_type);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_where_limit($table, $cond, $limit) {
			$this->db->where($cond);
			$this->db->limit($limit);
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_where_ordered($table, $cond, $order_by, $order_type) {
			$this->db->where($cond);
			$this->db->order_by($order_by, $order_type);
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_limit_ordered($table, $limit, $order_by, $order_type) {
			$this->db->order_by($order_by, $order_type);
			$this->db->limit($limit);
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function get_where_limit_ordered($table, $cond, $limit, $order_by, $order_type) {
			$this->db->where($cond);
			$this->db->order_by($order_by, $order_type);
			$this->db->limit($limit);
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}

		function count($table, $cond) {
			$this->db->where($cond);
			return $this->db->count_all_results($table);
		}

		function count_all($table) {
			return $this->db->count_all($table);
		}

		function add($table, $data){
			return $this->db->insert($table, $data);
		}

		function add_id($table, $data){
			$this->db->insert($table, $data);
			return $this->db->insert_id();
		}

		function update($table, $cond, $data){
			$this->db->where($cond);
			return $this->db->update($table, $data);
		}

		function update_batch($table, $data, $key){
			return $this->db->update_batch($table, $data, $key);
		}

		function delete($table, $cond){
			$this->db->where($cond);
			return $this->db->delete($table);
		}

		function query($script) {
			$query = $this->db->query($script);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}
	}
?>