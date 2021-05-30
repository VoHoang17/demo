<?php
    <sinhvien class="php"></sinhvien>
    <lophoc class="php"></lophoc>
    //array sinh vien , lop
    $sv =   array(new SinhVien('sv1','Vo Hoang',21,'toan tin',array('a','a1','a2')),
            array(new SinhVien('sv2','Vo Hung',21,'tin',array('a1','a21','a23')),
            array(new SinhVien('sv3','Nguyen Hoang',21,'sinh ly',array('12a2','a211','a2')),
            array(new SinhVien('sv4','Nguyen Hung',21,'cntt',array('a3','a121','321a2'));

    $lop=   array(new lophoc('lop1','k42A','toan ',array('sv1','sv2','sv3')),
            array(new lophoc('lop2','K42B','anh',array('sv3','sv42','sv35')),
            array(new lophoc('lop3','K42C','vat ly',array('sv11','sv22','sv33')),
            array(new lophoc('lop4','NONAME','php',array('sv142','sv212','sv332'));
    // foreach ($array as $value) 
    //     code to be executed;
    // 
    //in dssv trong lớp học , lớp học của 1 sinh viên
    foreach ($sv as $value) {
        echo $value->getMaSV()','$value->getHoTen()',' $value->getTuoi()','
        $value->getNganh() ',' $value->getDsLOP();
    }
    <br>
    foreach($lop as $value){
        echo $value->getMaLop()','$value->getTenLop()','$value ->getMonHoc()','$value->getDsSV(); 
    }
    //sinh vien dang ky lop hoc ...

    //thay doi thong tin sinh vien
    $hotensv = 

    

        

?>
