<input type="radio" name="aaa" value="1" checked="checked" id ='clickhide'><span class="lbl">单选</span>
<input type="radio"  name="aaa" value="2" id="clickshow"><span class="lbl">多选</span>
<div class="gw_num" style="display: none">
    <em class="jian">-</em>
    <input id="second" type="text" value="1" class="num"/>
    <em class="add">+</em>
</div>

<script src="https://cdn.bootcss.com/jquery/3.3.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {

//加的效果
        $(".add").click(function () {
            var n = $(this).prev().val();
            var num = parseInt(n) + 1;
            if (num == 0) {
                return;
            }
            $(this).prev().val(num);
        });
//减的效果
        $(".jian").click(function () {
            var n = $(this).next().val();
            var num = parseInt(n) - 1;
            if (num == 0) {
                return
            }
            $(this).next().val(num);
        });

        $('#clickshow').click(function () {
            $(".gw_num").css('display','block')
        });

        $('#clickhide').click(function () {
                $('.gw_num').css('display','none')
        });
    });
</script>
