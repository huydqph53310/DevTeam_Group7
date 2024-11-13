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