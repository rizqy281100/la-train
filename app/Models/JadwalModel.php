<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal_kereta'; // Table name
    protected $allowedFields = ['kode_kereta', 'destinasi_stasiun', 'jam_tiba', 'jam_berangkat'];

    public function getJadwalByDestination($destination)
    {
        // Query the database to fetch data based on the selected destination
        return $this->where('destinasi_stasiun', $destination)->findAll();
    }
}
