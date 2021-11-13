<?php

namespace App\Controllers;
use App\Models\GerejaModel;
use App\Models\UnitModel;
use CodeIgniter\Database\Query;

class Home extends BaseController
{
    public function index()
    {
        
        $builder = $this->db->table('data');
        $query   = $builder->get(); 
        $data['data'] = $query->getResult();
        return view('home',$data);
    }

    public function create(){
        return view('layout/tb');
    }

    public function save()
    {
        $this->GerejaModel->save([
            'nama' => $this->request->getVar('nama'),
            'jenisklm' => $this->request->getVar('jenisklm'),
            'tmlahir' => $this->request->getVar('tmlahir'),
            'tgllahir' => $this->request->getVar('tgllahir'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'tmmeninggal' => $this->request->getVar('tmmeninggal'),
            'tglmeninggal' => $this->request->getVar('tglmeninggal'),
            'pddk' => $this->request->getVar('pddk')
        ]);
        return redirect()->to(site_url('home'))->with('success','data berhasil di tambahkan!');
    }
    public function delete($id)
    {
        $this->db->table('data')->where(['id' => $id])->delete();
        return redirect()->to(site_url('home'))->with('warning','data berhasil di hapus!');


    }
    public function edit($id = null)
{
    if ($id != null) {
        $query = $this->db->table('data')->getWhere(['id' => $id]);
        if ($query->resultID->num_rows > 0 ) {
            $data['data'] = $query->getRow();
            return view('layout/edit',$data);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }else {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }


}
public function update($id)
{
    $data = $this->request->getPost();
    unset($data['_method']);
    $this->db->table('data')->where(['id' => $id])->update($data);
    return redirect()->to(site_url('home'))->with('success','data berhasil di ubah!');
}
public function unit(){
    $builder = $this->db->table('unit');
        $query   = $builder->get(); 
        $unit ['unit'] = $query->getResult();
    return view('unit/unit01',$unit);
}
public function create1(){
    return view('unit/unittb');
}
public function save1()
    {
        $this->UnitModel->save1([
             'sektor' => $this->request->getVar('sektor'),
            'unit' => $this->request->getVar('unit'),
            'norumah' => $this->request->getVar('norumah'),
            'nokeluarga' => $this->request->getVar('nokeluarga'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        return redirect()->to(site_url('unit/unit01'))->with('success','data berhasil di tambahkan!');
    }















    // public function tbdata(){
    //     // nama data baseny sama misalkan table name_nama
    //     $data = $this->request->getPost();
    //     $this->db->table('data')->insert($data);

    //     if ($this->db->affectedRows() > 0 ) {
    //         return redirect()->to(site_url('home'));
    //     }
    // }
}
