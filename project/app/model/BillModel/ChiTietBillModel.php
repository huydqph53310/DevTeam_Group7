<?php
class ChiTietBillModel
{
    // Lấy dữ liệu của chi tiết hóa đơn dựa trên Billid
    public function getDetailBills($billId)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }
    // Thêm chi tiết cho một hóa đơn
    public function addDetailBills($data)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }

    // Cập nhật
    public function updateDetailBills($id, $data)
    {
        try {
            $sql = "UPDATE `bill` SET `status`='$data' WHERE id = $id";
            $stmt = (new ConnectDatabase())->connect->prepare($sql)->execute();
            return $stmt;
        } catch (Exception $err) {
            echo $err->getMessage();
        }
    }
    // Xóa
    public function deleteDetailBills($id)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }

    // Lấy dánh sách sản phẩm trong một hóa đơn cụ thể
    public function getProductLisrInDetailBills($BillId)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }
}
