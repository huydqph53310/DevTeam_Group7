<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn Tỉnh/Thành phố</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <form action="" class="form-group" method="post">
            <h2 class="mb-4">Chọn Địa Điểm:</h2>

            <!-- Dropdown chọn Tỉnh/Thành phố -->
            <div class="form-group">
                <label for="tinh">Tỉnh/Thành phố:</label>
                <select id="tinh" class="form-control" onchange="loadHuyen()" name="TP">
                    <option value="">--Chọn Tỉnh/Thành phố--</option>
                </select>
            </div>

            <!-- Dropdown chọn Huyện/Quận (ẩn đi ban đầu) -->
            <div class="form-group" id="huyen-group" style="display: none;">
                <label for="huyen">Huyện/Quận:</label>
                <select id="huyen" class="form-control" onchange="loadXa()" name="Quan">
                    <option value="">--Chọn Huyện/Quận--</option>
                </select>
            </div>

            <!-- Dropdown chọn Xã/Phường (ẩn đi ban đầu) -->
            <div class="form-group" id="xa-group" style="display: none;">
                <label for="xa">Xã/Phường:</label>
                <select id="xa" class="form-control" name="Phuong">
                    <option value="">--Chọn Xã/Phường--</option>
                </select>
            </div>
            <button class="btn btn-success" name="test">Test</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
    $data = json_decode(file_get_contents('app/api/tree.json'), true);
    if (isset($_POST["test"])) {
        // var_dump($_POST);
        $tinhCode = $_POST['TP'];
        $huyenCode = $_POST['TP'];
        $xaCode = $_POST['Phuong'];

        // Tìm tên tỉnh từ mã tỉnh
        $tinhName = isset($data[$tinhCode]) ? $data[$tinhCode]['name'] : 'Không tìm thấy Tỉnh';

        // Tìm tên huyện từ mã huyện
        $huyenName = isset($data[$tinhCode]['quan-huyen'][$huyenCode]) ? $data[$tinhCode]['quan-huyen'][$huyenCode]['name'] : 'Không tìm thấy Huyện';

        // Tìm tên xã từ mã xã
        $xaName = isset($data[$tinhCode]['quan-huyen'][$huyenCode]['xa-phuong'][$xaCode]) ? $data[$tinhCode]['quan-huyen'][$huyenCode]['xa-phuong'][$xaCode]['name'] : 'Không tìm thấy Xã';
        echo "Địa Chỉ " . $xaName . " - " . $huyenName . " - " . $tinhName;
        // Trả về kết quả dưới dạng JSON
        // echo json_encode([
        //     'tinh' => $tinhName,
        //     'huyen' => $huyenName,
        //     'xa' => $xaName
        // ]);
    }
    ?>

    <script>
        let data = {};

        // Tải dữ liệu từ file JSON
        async function loadData() {
            try {
                const response = await fetch('app/api/tree.json'); // Đảm bảo đường dẫn đúng với nơi lưu trữ JSON
                data = await response.json();
                loadTinh
                    (); // Sau khi tải dữ liệu thành công, gọi hàm loadTinh() để đổ dữ liệu Tỉnh/Thành phố vào dropdown
            } catch (error) {
                console.error("Không thể tải file JSON:", error);
            }
        }

        async function loadDataBienSo() {
            try {
                const responses = await fetch('app/api/bien_so_xe.json'); // Đảm bảo đường dẫn đúng với nơi lưu trữ JSON
                bienso = await responses.json();
                loadTinh
                    (); // Sau khi tải dữ liệu thành công, gọi hàm loadTinh() để đổ dữ liệu Tỉnh/Thành phố vào dropdown
            } catch (error) {
                console.error("Không thể tải file JSON:", error);
            }
        }

        // Hàm load Tỉnh/Thành phố vào dropdown
        function loadTinh() {
            const tinhSelect = document.getElementById("tinh");
            Object.keys(data).forEach(code => {
                const option = document.createElement("option");
                option.value = code; // Giữ mã tỉnh làm giá trị option
                option.textContent = data[code].name; // Tên tỉnh làm nội dung của option
                tinhSelect.appendChild(option);
            });
        }

        // Hàm load Huyện/Quận dựa trên Tỉnh/Thành phố đã chọn
        function loadHuyen() {
            const tinhCode = document.getElementById("tinh").value;
            const huyenSelect = document.getElementById("huyen");
            const huyenGroup = document.getElementById("huyen-group");
            const xaSelect = document.getElementById("xa");
            const xaGroup = document.getElementById("xa-group");

            // Reset danh sách huyện và xã, ẩn chúng
            huyenSelect.innerHTML = '<option value="">--Chọn Huyện/Quận--</option>';
            xaSelect.innerHTML = '<option value="">--Chọn Xã/Phường--</option>';
            huyenGroup.style.display = 'none';
            xaGroup.style.display = 'none';

            console.log("Tỉnh đã chọn:", tinhCode);
            if (tinhCode && data[tinhCode]) {
                // Kiểm tra dữ liệu của huyện
                console.log("Dữ liệu Huyện:", data[tinhCode]["quan-huyen"]);
                Object.keys(data[tinhCode]["quan-huyen"]).forEach(huyenCode => {
                    const option = document.createElement("option");
                    option.value = huyenCode; // Giữ mã huyện làm giá trị option
                    option.textContent = data[tinhCode]["quan-huyen"][huyenCode]
                        .name; // Tên huyện làm nội dung của option
                    huyenSelect.appendChild(option);
                });
                // Hiển thị dropdown huyện/quận
                huyenGroup.style.display = 'block';
            }
        }

        // Hàm load Xã/Phường dựa trên Huyện/Quận đã chọn
        function loadXa() {
            const tinhCode = document.getElementById("tinh").value;
            const huyenCode = document.getElementById("huyen").value;
            const xaSelect = document.getElementById("xa");
            const xaGroup = document.getElementById("xa-group");

            // Reset danh sách xã, ẩn nó
            xaSelect.innerHTML = '<option value="">--Chọn Xã/Phường--</option>';
            xaGroup.style.display = 'none';

            console.log("Tỉnh đã chọn:", tinhCode, "Huyện đã chọn:", huyenCode);
            if (tinhCode && huyenCode && data[tinhCode]["quan-huyen"][huyenCode]) {
                console.log("Dữ liệu Xã/Phường:", data[tinhCode]["quan-huyen"][huyenCode]["xa-phuong"]);
                Object.keys(data[tinhCode]["quan-huyen"][huyenCode]["xa-phuong"]).forEach(xaCode => {
                    const option = document.createElement("option");
                    option.value = xaCode; // Giữ mã xã làm giá trị option
                    option.textContent = data[tinhCode]["quan-huyen"][huyenCode]["xa-phuong"][xaCode]
                        .name; // Tên xã làm nội dung của option
                    xaSelect.appendChild(option);
                });
                // Hiển thị dropdown xã/phường
                xaGroup.style.display = 'block';
            }
        }

        // Gọi hàm loadData() khi trang được tải
        document.addEventListener("DOMContentLoaded", loadData);
    </script>

</body>

</html>