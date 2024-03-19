<?php
    function load_all_dm($kyw){
        $query="SELECT * FROM danhmuc WHERE 1";
        if($kyw!=''){
            $query .=" AND tendm like '%".$kyw."%'";
        }
            $query .=" ORDER BY id desc";
        return pdo_query($query);
    }
    function load_one_dm($id){
        $query="SELECT * FROM danhmuc WHERE id=".$id;
        return pdo_query_one($query);
    }
    function insert_dm($tendm){
        $conn=pdo_get_connection();
        $query_check = "SELECT COUNT(*) as count FROM danhmuc WHERE tendm = :tendm";
        $stmt = $conn->prepare($query_check);
        $stmt->execute([':tendm'=> $tendm]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result['count'] > 0) {
            echo '<script>
                    alert("Danh mục đã tồn tại !");
                </script>';
        } else{
                $query="INSERT INTO `danhmuc`(`tendm`) VALUES ('$tendm')";
                pdo_execute($query);
                echo '<script>
                            alert("Bạn đã thêm danh mục thành công !");
                            window.location.href="?act=listdm";
                        </script>';
            }
    }
    function update_dm($id,$tendm){
        $query="UPDATE `danhmuc` SET `tendm`='$tendm' WHERE id=".$id;
        pdo_execute($query);
    }
    function delete_dm($id){
        $query="DELETE FROM danhmuc WHERE id=".$id;
        pdo_execute($query);
    }
?>