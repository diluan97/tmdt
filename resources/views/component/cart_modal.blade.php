<style>
    span {cursor:pointer; }

		.minus, .plus{
			width:20px;
			height:20px;
			background:#f2f2f2;
			border-radius:4px;

			border:1px solid #ddd;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
		}
		.inputCart{
			height:34px;
            width: 40px;
            text-align: center;
            font-size: 26px;
			border:1px solid #ddd;
			border-radius:4px;
            display: inline-block;
            vertical-align: middle;
</style>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    @csrf
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="color:blue;">Giỏ hàng của bạn hiện có {{ count($carts) }} sản phẩm</h3>
      </div>
      <form>
      <div class="modal-body">
          <div class="row mobile-title" >

                <div class="mobile col-sm-3">Sản Phẩm</div>
                <div class="mobile col-sm-3">SL</div>
                <div class="mobile col-sm-3">Giá</div>
                <div class="mobile col-sm-3">Thành Tiền</div>
        </div>
        <hr>
        <div class="all_pro_duct">
        @foreach($carts as $item)
        <div class="row remove_product item{{ $item->id }}" id="product_cart{{ $item->id }}">
            <div class="mobile_cart col-sm-3 id_cart" >
                <span>{{ $item->name }}</span>
            </div>
            <div class="mobile_cart col-sm-3" >
                <div class="row">
                    <div class="number">
                        <span class="cart minus minusCart" id="{{ $item->id }}" name="minusCart" data-price="{{ $item->price }}" data-url="{{ route('minus_cart_ajax',$item->rowId) }}" >-</span>
                        <input class="inputCart" type="text" id="qty_cart{{ $item->id }}" value="{{ $item->qty }}" disabled/>
                        <span class="cart plus plusCart" name="plusCart" data-url="{{ route('plus_cart_ajax',$item->rowId) }}" >+</span>
                    </div>
                </div>
            </div>
            <div class="mobile_cart col-sm-3"><span id="price_cart{{ $item->id }}">{{ number_format($item->price) }} </span></div>
            <div class="mobile_cart col-sm-3" ><Span id="total_cart{{ $item->id }}">{{ number_format(($item->price)*($item->qty)) }} </Span></div>
        </div>
        <hr class="remove_hr remove_cart{{ $item->id }}" id="remove_hr hr_cart{{ $item->id }}">

        @endforeach
        </div>
        <div class="row">
            <div class="check  col-sm-6">
                <a name="" id="" data-url="{{ route('xoa_gio_hang') }}" class="btn_delete btn btn-primary delete_cart" href="#" role="button">Xoá Giỏ Hàng</a>
                <a name="" id="" data-url="" class="btn btn-primary" onclick="refresh_page" href="" role="button">Cập Nhật</a>
            </div>
            <div class="check all_total col-sm-6 "><span id="total_cart_total">Tổng Tiền : {{ number_format(Cart::subtotal(0,'.','')) }} VNĐ</span></div>
        </div>
      </div>
      <div class="modal-footer">
          <a name="" id=""  class="btn btn-primary" href="{{ route('check_out') }}" role="button">Tiến Hành Thanh Toán</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>

  </div>
</div>
