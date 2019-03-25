<?php

namespace frontend\controllers;

class DosenController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $ucapan = "Ini adalah Halaman Dosen";
        $dosen1 = "Sirojul Munir";
        $dosen2 = "Zaki Imaduddin";
        $dosen3 = "Indra Hermawan";
        $dosen4 = "Amalia Rahma";
        $prodi1 = "Sistem Informasi";
        $prodi2 = "Teknik Informatika";
        $status1 = "Menikah";
        $status2 = "Belum Menikah";


        return $this->render('index',[
            'ucapanSalam'=>$ucapan,
            'dospem1' =>$dosen1,
            'dospem2' =>$dosen2,
            'dospem3' =>$dosen3,
            'si' =>$prodi1,
            'ti'=>$prodi2,
            'st1'=>$status1,
            'st2'=>$status2
            
        ]);
    }

}
