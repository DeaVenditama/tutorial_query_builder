<?php namespace App\Models;
use CodeIgniter\Database\BaseBuilder;

class InsertModel
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function insert_contact()
    {
        $builder = $this->db->table('contact');
        $data = [
            'nama' => 'Dea Venditama',
            'email' => 'dea@gmail.com',
            'telp' => '911',
        ];

        $builder->insert($data);
        return $this->db->affectedRows();        
    }

    public function insert_ignore_contact()
    {
        $builder = $this->db->table('contact');
        $data = [
            'id' => 1,
            'nama' => 'Budi',
            'email' => 'budi@gmail.com',
            'telp' => '110',
        ];

        $builder->ignore(true)->insert($data);
        return $this->db->affectedRows();
    }

    public function compiled_insert()
    {         
        $data = [     
            'nama' => 'Ani',
            'email' => 'ani@gmail.com',
            'telp' => '111',
        ];
        $builder = $this->db->table('contact');
        $sql = $builder->set($data)->getCompiledInsert();
        
        return $sql;
    }

    public function insert_batch()
    {
        $builder = $this->db->table('contact');
        $data = [
            [
                'nama' => 'Joni',
                'email' => 'joni@gmail.com',
                'telp' => '123',
            ],
            [
                'nama' => 'Susi',
                'email' => 'susi@gmail.com',
                'telp' => '321',
            ]
        ];
        $builder->insertBatch($data);
        return $this->db->affectedRows();
    }

    public function replacing()
    {
        $builder = $this->db->table('contact');        
        $data = [
            'id' => 1,
            'nama' => 'Budi',
            'email' => 'budi@gmail.com',
            'telp' => '110',
        ];
        $builder->replace($data);
        return $this->db->affectedRows();
    }

    public function set_update()
    {
        $builder = $this->db->table('contact');
        $data = [            
            'email' => 'budiwiliam@gmail.com',
        ];
        $builder->set($data);
        $builder->where('id',1);
        $builder->update();
        return $this->db->affectedRows();
    }

    public function updating()
    {
        $builder = $this->db->table('contact');
        $data = [
            'nama' => 'Eren Yeager',
            'email' => 'eren@yeager.com',
        ];
        $builder->where('id', 1);
        $builder->update($data);
        return $this->db->affectedRows();
    }

    public function updating_2()
    {
        $builder = $this->db->table('contact');
        $data = [
            'nama' => 'Eren Yeager',
            'email' => 'eren@yeager.com',
        ];        
        $builder->update($data, ['id'=>2]);
        return $this->db->affectedRows();
    }

    public function update_batch()
    {
        $builder = $this->db->table('contact');
        $data = [
            [
                'id' => 1,
                'nama' => 'Joni',
                'email' => 'joni@gmail.com',
                'telp' => '123',
            ],
            [
                'id' => 2,
                'nama' => 'Susi',
                'email' => 'susi@gmail.com',
                'telp' => '321',
            ]
        ];
        $builder->updateBatch($data, 'id');
        return $this->db->affectedRows();
    }

    public function compiled_update()
    {         
        $data = [             
            'nama' => 'Ani',
            'email' => 'ani@gmail.com',
            'telp' => '111',
        ];
        $builder = $this->db->table('contact');
        $builder->set($data);
        $builder->where('nama','cek');
        //$sql = $builder->getCompiledUpdate();
        return $builder->update();
        return $sql;
    }
}