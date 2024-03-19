
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Thống kê doanh thu theo: <select name="thongkengay" id="thongkengay">
                                                                        <option value="7">7 ngày qua</option>
                                                                        <option value="28">28 ngày qua</option>
                                                                        <option value="90">90 ngày qua</option>
                                                                        <option value="180">180 ngày qua</option>
                                                                        <option value="365">365 ngày qua</option>
                                                                    </select></h1>
    <div id="chart" style="height: 250px;"></div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    $(document).ready(function(){
        thongke();
        var char = new Morris.Area({

        element: 'chart',

        xkey: 'date',

        ykeys: ['order','sales','quantity'],

        labels: ['Đơn hàng','Doanh thu','Số lượng bán']
        });
        $("#thongkengay").change(function(){
            var thoigian=$(this).val();
            $.ajax({
                type: "POST",
                url: "thongke/chay.php",
                dataType: "JSON",
                data: {thoigian: thoigian},
                success: function (response) {
                    char.setData(response);
                },
                error: function (error) {
                    console.error('Lỗi: ', error);
                    alert('Có lỗi xảy ra khi tải dữ liệu mới');
                }
            });
        });
        function thongke(){
            $.ajax({
                type: "POST",
                url: "thongke/chay.php",
                dataType: "JSON",
                success: function (response) {
                    char.setData(response);
                },
                error: function (error) {
                    console.error('Lỗi: ', error);
                    alert('Có lỗi xảy ra khi tải dữ liệu mới');
                }
            });
        }
    });
</script>
