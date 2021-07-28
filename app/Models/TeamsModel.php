<?php 
namespace App\Models;
use CodeIgniter\Model;

class TeamsModel extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'logo', 'winner', 'status'];
}