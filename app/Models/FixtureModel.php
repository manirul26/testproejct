<?php 
namespace App\Models;
use CodeIgniter\Model;

class FixtureModel extends Model
{
    protected $table = 'fixture';
    protected $primaryKey = 'id';
    protected $allowedFields = ['referee', 'timezone', 'date', 'timestamp','periods_id','venue_id','status_id'];
}