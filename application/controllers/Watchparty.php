<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Betöltjük a szükséges adatbázis könyvtárat
        $this->load->database();
    }

    public function get_movie_by_id($movie_id) {
        // Lekérdezzük a film adatait az adatbázisból az adott azonosító alapján
        $query = $this->db->get_where('videos', array('videos_id' => $movie_id));

        // Ellenőrizzük, hogy van-e találat
        if ($query->num_rows() > 0) {
            // Visszaadjuk a film részleteit
            return $query->row_array();
        } else {
            // Ha nincs találat, visszaadjuk null-t vagy hibát dobhatunk
            return null;
        }
    }
}
